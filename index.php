<?php 
include_once("bd/Conexao.php");
include_once("bd/Consulta.php");
session_start();
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
	<h3>CRUD COM PHP PROCEDURAL {SALVE+1}</h3>
	<?php include_once("bd/Alertas.php") ?>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>Cor</th>
				<th>Matrícula</th>
				<th colspan="3">Acções</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			while ($PegaCarros=mysqli_fetch_array($ConsultaCarros)) {
			?>
			<tr>
				<th><?php echo $PegaCarros['id']; ?></th>
				<th><?php echo $PegaCarros['nome']; ?></th>
				<th><?php echo $PegaCarros['cor']; ?></th>
				<th><?php echo $PegaCarros['matricula']; ?></th>
				<th><a href="ver_carro.php?carro=<?php echo $PegaCarros['id']; ?>"><i class="fa fa-file"></i></a></th>
				<th><a href="editar.php?carro=<?php echo $PegaCarros['id']; ?>"><i class="fa fa-edit"></i></a></th>
				<th><a href="bd/EliminarCarro.php?alerta=<?php echo $PegaCarros['id']; ?>"><i class="fa fa-remove"></i></a></th>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</section>
<li class="AdCarro">+Carro</li>
<div class="AdicionarCarro">
	<form method="Post" action="bd/CriarCarro.php">
		<h5>Adicionar Carro</h5>
		<label>Nome do Carro</label>
		<input type="text" name="nome" placeholder="carro" required="">
		<label>Cor do Carro</label>
		<input type="text" name="cor" placeholder="cor" required="">
		<label>Matrícul do Carro</label>
		<input type="text" name="matricula" placeholder="matricula" required="">
		<span id="fechar">FECHAR</span>
		<input type="submit" value="Cadastrar">
	</form>
</div>
<?php if(isset($_SESSION['alerta'])){ ?>
<div class="eliminarcarros">
		<div class="alertacarro">
			<h3>ALERTA</h3>
			<p>Tens a Certeza?</p>
			<span class="alertacarros">Cancelar</span>
			<a href="bd/EliminarCarro.php?carro=<?php echo $_SESSION['alerta']; ?>">Confirmar</a>	
		</div>
</div>
<?php }  unset($_SESSION['alerta']); ?>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/menu.js"></script>
</html>