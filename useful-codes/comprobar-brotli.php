<?php
// Comprobar si la compresión Brotli está habilitada en el servidor
if (strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'br') !== false) {
  echo "La compresión Brotli está habilitada en el servidor.<br>";
} else {
  echo "La compresión Brotli no está habilitada en el servidor.<br>";
}

// Comprobar si el navegador admite la compresión Brotli
if (strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'br') !== false) {
  echo "El navegador admite la compresión Brotli.<br>";
} else {
  echo "El navegador no admite la compresión Brotli.<br>";
}?>