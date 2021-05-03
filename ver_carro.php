<?php 

$IdCarro=$_GET['carro'];
include_once("bd/Conexao.php");
include_once("bd/CarroPorId.php");

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Crud com PHP Procedural</title>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head> 
<body>	
<body>
<section class="tudo">
	<h3>INFORMAÇÕES DO CARRO <?php echo $BuscaCarroPorId['nome']; ?></h3>
	<p class="texto">Nome do carro: <?php echo $BuscaCarroPorId['nome']; ?></p>
	<p class="texto">Cor do carro: <?php echo $BuscaCarroPorId['cor']; ?></p>
	<p class="texto">Matrícul do carro: <?php echo $BuscaCarroPorId['matricula']; ?></p>
</section>
</body>
</html>