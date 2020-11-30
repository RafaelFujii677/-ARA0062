<?php
session_start();

include_once "conection.php";

$nome = $_GET["nome"];
$marca = $_GET["marca"];
$tipo = $_GET["tipo"];
$preco = $_GET["preco"];

if (isset($_GET["id"])) { //atualiza
    $id = $_GET["id"];
    $sql = "UPDATE Instrumentos set nome='$nome', marca='$marca', tipo='$tipo', preco='$preco' where id='$id' ";
} else { //grava um novo
    $sql = "INSERT INTO Instrumentos (id, nome, marca, tipo, preco) VALUES (NULL, '$nome', '$marca', '$tipo', $preco)";
}

$bd = new DAO();
$contador = $bd->exec($sql);

if($contador != null){
    echo "<h1>foi armazenado/atualizado ". $contador ." registro</h1>";
}else{
    echo "<h1>erro</h1>";
}


?>

<a href="../pages/lista-instrumentos.php">Voltar</a>