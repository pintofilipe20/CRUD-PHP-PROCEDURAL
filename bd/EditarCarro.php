<?php 
include_once("conexao.php");
include_once("xss.php");


$idcarro=clear($_POST['idcarro']);
$nome=clear($_POST['nome']);
$cor=clear($_POST['cor']);
$matricula=clear($_POST['matricula']);

$EditarCarroPorId="UPDATE carro SET nome = '$nome', cor = '$cor', matricula = '$matricula' WHERE id = '$idcarro'";
$Consulta=mysqli_query($conexao,$EditarCarroPorId);
$verificacao=mysqli_affected_rows($conexao);

    if ($verificacao > 0){
        session_start();
		$_SESSION['sucesso-edit']=true;
        
        echo '<script>window.location="../index.php"</script>';
    }

?>