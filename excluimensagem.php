<html>				<!DOCTYPE html>
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ester Belloni</title>
    <!--Chama o favicon-->
    <link rel="shortcut icon" href="imagem/favicon.ico" type="image/x-icon">
    <!--Chama o css-->
    <link rel="stylesheet" type="text/css" href="./estilo.css">
</head>
<body>
<nav>
    <a href="home.html">HOME</a>
    <a href="florais.html">FLORAIS</a>
    <a href="aromaterapia.html">AROMATERAPIA</a>
    <a href="cromoterapia.html">CROMOTERAPIA</a>
    <a href="fitoterapia.html">FITOTERAPIA</a>
    <a href="radiestesia.html">RADIESTESIA</a>
    <a href="reiki.html">REIKI XAMÂNICO</a>
    <a href="cristaloterapia.html">CRISTALOTERAPIA</a><br>
    <a href="tarot.html">TERAPIA COM ORÁCULOS</a>
    <a href="pets.html">TERAPIA PARA PETS</a>
    <a href="form.html">CONTATO</a>
    <a id="principal" href="intranet.php">INTRANET</a>

  </nav>  
  <div>
  <br>  <h1>MENSAGENS EXCLUÍDAS !!!</h1>


<?php
include_once('conexao.php');

//sprintf("DELETE FROM `mensagem_table`");
$sql = sprintf("TRUNCATE TABLE mensagem_table"); 

mysqli_query($conn,$sql) or die("Erro ao tentar excluir registro");
echo "MENSAGENS EXCLUÍDAS";

?>

  </div>
</html>