<?php 

    if(isset($_GET['alerta'])){
        session_start();
    	$_SESSION['alerta']=$_GET['alerta'];
            
        echo'<script>window.location="../index.php"</script>';
    }
 
    include_once("conexao.php");
    include_once("xss.php");

    $carro=clear($_GET['carro']);

    $EliminarCarro="DELETE FROM carro WHERE id='$carro'";
    $consulta=mysqli_query($conexao,$EliminarCarro);
    $linhas=mysqli_affected_rows($conexao);
		
    if ($linhas > 0){
    	
        session_start();
		$_SESSION['eliminarcarro']=true;
        
        echo '<script>window.location="../index.php"</script>';
    
	}

?>