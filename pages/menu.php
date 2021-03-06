<?php
include_once "security/auth.php";
include_once "../dao/conection.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <?php
    $bd = new DAO();
    $sql = "SELECT * FROM Instrumentos";
    echo"   <div class='container'>
                <a href='../index.html'> <- Sair " . session_destroy() . " </a> 
            </div>";

    echo"<div class='container'>
            <h1>Pegasus music</h1>
            <ul class='nav'>
                <li class='nav-item'>
                    <a class='nav-link active' href='lista-user.php'>Cadastro de Usuários</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link active' href='lista-instrumentos.php'>Cadastro de instrumentos</a>
                </li>
            </ul>";
            foreach ($bd->query($sql) as $row) {
                echo "
                <div class='Container'>
                    <div class='card' style='width: 18rem;'>
                        <div class='card-body'>
                            <h5 class='card-title'>" . $row['tipo'] . "</h5>
                            <h6 class='card-subtitle mb-2 text-muted'>Nome: " . $row['nome'] . "</h6>
                            <h6 class='card-subtitle mb-2 text-muted'>Marca: " . $row['marca'] . "</h6>
                            <p class='card-text'>R$ " . $row['preco'] . "</p>
                        </div>
                    </div>
                </div>";
            };
        "</div>";
    ?>
    
</body>

</html>