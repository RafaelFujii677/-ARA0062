<?php
include_once "../dao/conection.php";

?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>Lista de usuários</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div class="container">
        <h1>Tela de usuários</h1>
        <hr>
        <a href="menu.php">
            < Voltar </a> <br><br>

                <a class="btn btn-primary" href="new-user.php" role="button">Incluir</a>
                <br><br>

                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Login</th>
                            <th>Senha</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $bd = new DAO();
                        $sql = "select * from Usuarios";

                        foreach ($bd->query($sql) as $row) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['login'] . "</td>";
                            echo "<td>" . $row['senha'] . "</td>";

                            echo "<td><a href='#' onclick ='Pergunta(" . $row['id'] . ")'> Excluir</a></td>";

                            echo "<td><a href='AlterarUsuario.php?id=" . $row['id'] . "'>Alterar</a></td>";

                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <script>
                    function Pergunta(id) {
                        if (confirm("Deseja realmente excluir ?")) {
                            window.location.replace("https://aula-php-andre-eppinghaus.000webhostapp.com/20202/3006/usuario/ExcluirUsuario.php?id=" + id);
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