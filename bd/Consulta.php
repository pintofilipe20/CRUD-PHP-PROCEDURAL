<?php 

$SelecionaCarros="SELECT * from carro order by id desc";
$ConsultaCarros=mysqli_query($conexao,$SelecionaCarros);
?>