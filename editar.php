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
	<h3>EDITAR INFORMAÇÃO DO CARRO <?php echo $BuscaCarroPorId['nome']; ?></h3>
	<form method="POST" action="bd/EditarCarro.php">
		<input type="hidden" name="idcarro" value="<?php echo $BuscaCarroPorId['id']; ?>">
		<label>Nome do Carro</label>
		<input type="text" name="nome" value="<?php echo $BuscaCarroPorId['nome']; ?>">
		<label>Cor do Carro</label>
		<input type="text" name="cor" value="<?php echo $BuscaCarroPorId['cor']; ?>">
		<label>Matrícul do Carro</label>
		<input type="text" name="matricula" value="<?php echo $BuscaCarroPorId['matricula']; ?>">

		<input type="submit" value="Editar" style="width: 10%;">
	</form>
</body>
</html>