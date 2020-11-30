<?php
session_start();

$login=$_POST["login"];
$senha=$_POST["senha"];

include_once "servico/Bd.php";

$bd = new Bd();
$sql = "select * from usuario_3006 where login='$login' and senha='$senha'";


//
//NAO protege contra SQL Injection
//
foreach ($bd->query($sql) as $row) {
    $_SESSION["autenticado"]=true;
    $_SESSION["idusuario"]=$row['id'];
    $_SESSION["loginusuario"]=$row['login'];
    
    $html ="
    <html>
        <head><title>Tela de verificação </title></head>
        <body>
         <script>
         window.location.replace('https://aula-php-andre-eppinghaus.000webhostapp.com/20202/3006/menu.php');
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