<?php
session_start();

$login=$_POST["login"];
$senha=$_POST["senha"];

include_once "../dao/conection.php";

$bd = new DAO();
$sql = "SELECT * FROM Usuarios WHERE login='$login' AND senha='$senha'";


//
//NAO protege contra SQL Injection
//
foreach ($bd->query($sql) as $row) {
    $_SESSION["autenticado"]=$row['id'];

    $html ="
    <html>
        <head><title>Tela de verificação </title></head>
        <body>
         <script>
         window.location.replace('https://pegasusmusic.000webhostapp.com/pages/menu.php');
         </script>
        </boyd>
    </html>
"; 
    echo $html;
    return;
}
//se a consulta retornar vazia, nem entra no foreach
//e o usuário digitou os dados incorretos.
session_destroy ( ) ;
    $html ="
<html>
    <head><title>Tela de verificação </title></head>
    <body>
        <h1>O login é $login e sua senha é $senha e são inválidos</h1>
    </boyd>
</html>

";
    
echo $html;
?>