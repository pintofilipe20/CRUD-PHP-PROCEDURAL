<?php 

$CarroPorId="SELECT * from carro where id='$IdCarro'";
$ConsultaCarroPorId=mysqli_query($conexao, $CarroPorId);
$BuscaCarroPorId=mysqli_fetch_array($ConsultaCarroPorId);

?>