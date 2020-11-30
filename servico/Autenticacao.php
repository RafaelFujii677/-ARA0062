<?php
session_start();

if ( ! isset($_SESSION["autenticado"]) ){
    echo "
    <script>
    window.location.replace('https://aula-php-andre-eppinghaus.000webhostapp.com/20202/3006');
    </script>
    ";
    
}

?>