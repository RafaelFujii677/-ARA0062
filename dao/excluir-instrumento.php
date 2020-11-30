<?php
include_once "conection.php";

$id=$_GET["id"];

$sql = "DELETE FROM Instrumentos where id='$id' ";
$bd = new DAO();
$contador = $bd->exec($sql);

echo "<h1>foi excluído $contador registro</h1>";

?>

<a href="../pages/lista-instrumentos.php">Voltar</a>