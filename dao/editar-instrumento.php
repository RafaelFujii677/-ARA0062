<?php

include_once "conection.php";

$id = $_GET["id"];

$bd = new DAO();
$sql = "SELECT * FROM Instrumentos WHERE id='$id'";

foreach ($bd->query($sql) as $row) {
    $nome =  $row['nome'];
    $marca =  $row['marca'];
    $tipo =  $row['tipo'];
    $preco =  $row['preco'];
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <title>Gerenciamento de Instrumentos</title>
</head>

<body>

    <div class="container">

        <h1>Tela de edição de Instrumentos</h1>
        <hr>
        <a href="../pages/lista-instrumentos.php">
            < Voltar </a> <br><br>

                <form action="incluir-instrumento.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <?php
                        echo "<input type='hidden' name='id' value='$id' >";
                        echo "<input type='text' name='nome' class='form-control' value='$nome'  >";
                        ?>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Marca</label>
                        <?php
                        echo "<input type='text' name='marca' class='form-control' value='$marca'  >";
                        ?>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Tipo</label>
                        <?php
                        echo "<input type='text' name='tipo' class='form-control' value='$tipo'  >";
                        ?>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Preço</label>
                        <?php
                        echo "<input type='number' step='0.01' name='preco' class='form-control' value='$preco'  >";
                        ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>


                <br><br>
    </div> <!-- container -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

</body>

</html>