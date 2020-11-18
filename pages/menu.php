<?php
session_start();

if (!isset($_SESSION["autenticado"])) {
    echo "
    <script>
    window.location.replace('https://pegasusmusic.000webhostapp.com/');
    </script>
    ";
}

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
    <div class="container-fluid">
        <div class="card text-white bg-dark mb-3">
            <div class="card-header">Cabeçalho</div>
            <div class="card-body">
                <h5 class="card-title">Título de Card Dark</h5>
                <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o
                    conteúdo do card.</p>
            </div>
        </div>
    </div>

</body>

</html>