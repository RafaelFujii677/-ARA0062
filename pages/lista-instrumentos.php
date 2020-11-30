<?php
include_once "../dao/conection.php";
?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>Lista de Instrumentos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div class="container">
        <h1>Tela de instrumentos</h1>
        <hr>
        <a href="menu.php">
            < Voltar </a> <br><br>

                <a class="btn btn-primary" href="new-instrumento.php" role="button">Incluir</a>
                <br><br>

                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Marca</th>
                            <th>Tipo</th>
                            <th>Preço</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $bd = new DAO();
                        $sql = "SELECT * FROM Instrumentos";

                        foreach ($bd->query($sql) as $row) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['nome'] . "</td>";
                            echo "<td>" . $row['marca'] . "</td>";
                            echo "<td>" . $row['tipo'] . "</td>";
                            echo "<td>" . $row['preco'] . "</td>";

                            echo "<td><a href='#' onclick ='Pergunta(" . $row['id'] . ")'> Excluir</a></td>";

                            echo "<td><a href='../dao/editar-instrumento.php?id=" . $row['id'] . "'>Alterar</a></td>";

                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <script>
                    function Pergunta(id) {
                        if (confirm("Deseja realmente excluir ?")) {
                            window.location.replace("https://pegasusmusic.000webhostapp.com/dao/excluir-instrumento.php?id=" + id);
                        }
                    }
                </script>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>