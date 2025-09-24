<?php
// export-publicaciones.php
// === Exporta publicaciones científicas desde el CPT 'actualidad' ===
// Genera un archivo export_publi.json en la raíz del WordPress actual.

// Cargar entorno de WordPress
require_once( dirname(__FILE__) . '/wp-load.php' );

// Argumentos para filtrar solo las publicaciones científicas
$args = array(
    'post_type'      => 'actualidad',
    'posts_per_page' => -1,
    'tax_query'      => array(
        array(
            'taxonomy' => 'areas-actualidad', // tu taxonomía "Áreas"
            'field'    => 'slug',
            'terms'    => 'investigacion',    // slug de la categoría "investigación"
        ),
    ),
    'meta_query'     => array(
        array(
            'key'   => 'tipo_de_publicacion',
            'value' => 'Publicación científica',
        ),
    ),
);

$query = new WP_Query($args);

$export = [];

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        // recoger términos de tratamientos y unidades
        $tratamientos = wp_get_post_terms(get_the_ID(), 'tratamientos-actualidad', array('fields' => 'names'));
        $unidades     = wp_get_post_terms(get_the_ID(), 'unidades-actualidad', array('fields' => 'names'));

        $export[] = [
            'old_id'       => get_the_ID(), // opcional, por si luego lo quieres
            'title'        => get_the_title(),
            'date'         => get_the_date('Y-m-d H:i:s'),
            'link_externo' => get_field('link_externo'),
            'paper'        => get_field('paper'),
            'autores'      => get_field('autores'), // texto plano
            'tratamientos' => $tratamientos,
            'unidades'     => $unidades,
        ];
    }
}
wp_reset_postdata();

// Guardar JSON en la raíz
$file = __DIR__ . '/export_publi.json';
file_put_contents($file, json_encode($export, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "✅ Exportación completada.<br>";
echo "Archivo generado: export_publi.json (" . count($export) . " publicaciones)";
