<?php
//Connection
$conn = new PDO("sqlite:db/banco.sqlite");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="container">
    <h1>Ranking</h1>
    
    <main>
        <table class="table container">
            <thead>
                <tr class="linha">
                    <th>Posição</th>
                    <th>Nome</th>
                    <th>Acertos</th>
                    <th>Erros</th>
                    <th>Data/Hora</th>
                
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "Partida.php";

                $q = $conn->query("SELECT * from Usuarios ORDER BY quantAcertos DESC, quantErros ASC, dataHora DESC"); 
                $usuarios = $q->fetchAll(PDO::FETCH_CLASS, "Partida");

                $i = 1;
                foreach ($usuarios as $users) :
                ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $users->getNome(); ?></td>
                    <td><?= $users->getQuantAcertos(); ?></td>
                    <td><?= $users->getQuantErros(); ?></td>
                    <td><?= $users->getDataHora(); ?></td>
                </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </main>

<a href="index.php">Voltar</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>