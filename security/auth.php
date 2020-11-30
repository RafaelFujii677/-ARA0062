<?php
session_start();

if (!isset($_SESSION["autenticado"])) {
    echo "
    <script>
    window.location.replace('https://pegasusmusic.000webhostapp.com/');
    </script>";
}

?>