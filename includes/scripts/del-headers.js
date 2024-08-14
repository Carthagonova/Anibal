document.addEventListener('DOMContentLoaded', function() {
    // Esto coge todos los h1 de la página /blog/, conserva el primero y los demás los convierte en <p>
    // Verifica si la URL de la página es la deseada para el <h1>
    if (window.location.pathname === '/blog/') {
        // Selecciona todos los elementos <h1> con la clase 'x-text-content-text-primary'
        var headersH1 = document.querySelectorAll('h1.x-text-content-text-primary');

        // Variable para controlar si el primer <h1> ha sido encontrado
        var firstH1Found = false;

        headersH1.forEach(function(header) {
            if (!firstH1Found) {
                // Conservar el primer <h1> encontrado
                firstH1Found = true;
            } else {
                // Crea un nuevo elemento <p>
                var paragraph = document.createElement('p');
                
                // Copia el contenido del <h1> al <p>
                paragraph.innerHTML = header.innerHTML;

                // Copia las clases del <h1> al <p>
                paragraph.className = header.className;

                // Reemplaza el <h1> con el nuevo <p>
                header.parentNode.replaceChild(paragraph, header);
            }
        });
    }

    // Este bloque se ejecutará en cualquier post de WordPress, cambia los h2 y h3 que estén bajo el id de listas-post y los convierte en <p>
    // Selecciona el contenedor con id 'listas-posts'
    var container = document.getElementById('listas-posts');
    if (container) {
        // Función para reemplazar elementos
        function replaceHeaders(selector) {
            var headers = container.querySelectorAll(selector);

            headers.forEach(function(header) {
                // Crea un nuevo elemento <p>
                var paragraph = document.createElement('p');
                
                // Copia el contenido del header al <p>
                paragraph.innerHTML = header.innerHTML;

                // Copia las clases del header al <p>
                paragraph.className = header.className;

                // Reemplaza el header con el nuevo <p>
                header.parentNode.replaceChild(paragraph, header);
            });
        }

        // Reemplaza <h2> y <h3> con <p>
        replaceHeaders('h2.x-text-content-text-primary');
        replaceHeaders('h3.x-text-content-text-primary');
    }

    // Reemplazar <h4> con el id 'ftwp-header-title' por <div>
    var headerH4 = document.getElementById('ftwp-header-title');
    if (headerH4) {
        // Crea un nuevo elemento <div>
        var div = document.createElement('div');
        
        // Copia el contenido del <h4> al <div>
        div.innerHTML = headerH4.innerHTML;

        // Asigna el mismo id al nuevo <div> para mantener los estilos CSS
        div.id = 'ftwp-header-title';

        // Reemplaza el <h4> con el nuevo <div>
        headerH4.parentNode.replaceChild(div, headerH4);
    }
});
