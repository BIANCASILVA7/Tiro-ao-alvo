<?php
$conn = new PDO("sqlite:db/banco.sqlite"); 
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 

$nome =$_POST["nome"];
$acertos =$_POST["acertos"];
$erros =$_POST["erros"];
$data = date("d-m-Y H:i:s");

$preparo = $conn->prepare("INSERT INTO Usuarios (nome, quantAcertos, quantErros, dataHora) VALUES(:nome, :quantAcertos, :quantErros, :dataHora);"); 
$preparo->bindParam(":nome", $nome); 
$preparo->bindParam(":quantAcertos", $acertos);
$preparo->bindParam(":quantErros", $erros);
$preparo->bindParam(":dataHora", $data);

$preparo->execute();

header("Location:ranking.php");