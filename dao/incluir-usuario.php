<?php

include_once "conection.php";

$login=$_GET["login"];
$senha=$_GET["senha"];

if (isset($_GET["id"])) { //atualiza
    $id = $_GET["id"];
    $sql = "update `usuarios` set login='$login', senha='$senha' where id='$id' ";
}else { //grava um novo
    $sql = "INSERT INTO `usuarios` (`id`, `login`, `senha`) VALUES (NULL, '$login', '$senha')";    
}

$bd = new DAO();

echo "<h1>Usuário salvo com sucesso.</h1>";

?>

<a href="../pages/lista-user.php">Voltar</a>
