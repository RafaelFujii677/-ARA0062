<?php

include_once "conection.php";

$login = $_GET["login"];
$senha = $_GET["senha"];

if (isset($_GET["id"])) { //atualiza
    $id = $_GET["id"];
    $sql = "UPDATE Usuarios set login='$login', senha='$senha' where id='$id' ";
} else { //grava um novo
    $sql = "INSERT INTO Usuarios (id, login, senha) VALUES (NULL, '$login', '$senha')";
}

$bd = new DAO();
$contador = $bd->exec($sql);

if($contador != null){
    echo "<h1>foi armazenado/atualizado ". $contador ." registro</h1>";
}else{
    echo "<h1>erro</h1>";
}


?>

<a href="../pages/lista-user.php">Voltar</a>