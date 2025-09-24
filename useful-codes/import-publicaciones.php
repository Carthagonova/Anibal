<?php
// import-publicaciones.php
// === Importa publicaciones científicas en el CPT 'publi-cientifica' ===
// Requiere el archivo export_publi.json en la raíz de esta web.

// Cargar entorno de WordPress
require_once( dirname(__FILE__) . '/wp-load.php' );

// Cargar el JSON exportado
$json_file = __DIR__ . '/export_publi.json';
if (!file_exists($json_file)) {
    exit("❌ No se encuentra export_publi.json. Sube el archivo primero.");
}
$data = json_decode(file_get_contents($json_file), true);

$count = 0;

foreach ($data as $item) {
    // Crear el post en el nuevo CPT
    $post_id = wp_insert_post(array(
        'post_type'   => 'publi-cientifica',
        'post_title'  => $item['title'],
        'post_status' => 'publish',
        'post_date'   => $item['date'],
    ));

    if ($post_id) {
        $count++;

        // Importar los ACF
        if (!empty($item['link_externo'])) {
            update_field('link_externo', $item['link_externo'], $post_id);
        }
        if (!empty($item['paper'])) {
            update_field('paper', $item['paper'], $post_id);
        }

        // === Autores (texto → taxonomía "autor")
        if (!empty($item['autores'])) {
            $autores = array_map('trim', explode(',', $item['autores']));
            $autor_terms = [];

            foreach ($autores as $autor) {
                $term = term_exists($autor, 'autor');
                if (!$term) {
                    $term = wp_insert_term($autor, 'autor');
                }
                if (!is_wp_error($term)) {
                    $autor_terms[] = (int) $term['term_id'];
                }
            }

            if (!empty($autor_terms)) {
                wp_set_object_terms($post_id, $autor_terms, 'autor');
            }
        }

        // === Tratamientos (web vieja) → Enfermedad (web nueva)
        if (!empty($item['tratamientos'])) {
            foreach ($item['tratamientos'] as $term_name) {
                $term = term_exists($term_name, 'enfermedad');
                if (!$term) {
                    $term = wp_insert_term($term_name, 'enfermedad');
                }
                if (!is_wp_error($term)) {
                    wp_set_object_terms($post_id, (int) $term['term_id'], 'enfermedad', true);
                }
            }
        }

        // === Unidades (web vieja) → Unidad (web nueva)
        if (!empty($item['unidades'])) {
            foreach ($item['unidades'] as $term_name) {
                $term = term_exists($term_name, 'unidad');
                if (!$term) {
                    $term = wp_insert_term($term_name, 'unidad');
                }
                if (!is_wp_error($term)) {
                    wp_set_object_terms($post_id, (int) $term['term_id'], 'unidad', true);
                }
            }
        }
    }
}

echo "✅ Importación completada. Se han creado {$count} publicaciones.";
