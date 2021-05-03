<?php 

include_once("Conexao.php");
include_once("xss.php");
    $nome=clear($_POST['nome']);
    $cor=clear($_POST['cor']);
    $matricula=clear($_POST['matricula']);

 
	$cadastrar_carro="INSERT INTO carro values(default,'$nome','$cor','$matricula')";
	$consulta_carro=mysqli_query($conexao,$cadastrar_carro);
	$dados=mysqli_affected_rows($conexao);

    if ($dados > 0){
        session_start();
		$_SESSION['sucesso']=true;
        
        echo '<script>window.location="../index.php"</script>';
    }
    

 ?>