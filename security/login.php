<?php
include_once "../dao/conection.php";

session_start();
$login = $_POST["login"];
$senha = $_POST["senha"];

$bd = new DAO();
$sql = "select * from Usuarios";

foreach ($bd->query($sql) as $row) {
    if ($login == $row['login'] && $senha ==  $row['senha']) {
        $_SESSION["autenticado"] = true;

        $html = "<html>
                <head><title>Tela de verificação </title></head>
                <body>
                <script>
                window.location.replace('https://pegasusmusic.000webhostapp.com/pages/menu.php');
                </script>
                </boyd>
            </html>";
    } else {
        session_destroy();
        $html = "<html>
                <head><title>Tela de verificação </title> <meta charset='utf-8'></head>
                <body>
                    <h1>O login é $login e sua senha é $senha e são inválidos</h1>
               </boyd>
            </html>";
    }
}
echo $html;
