<?php

function clear($input){

global $conexao;

$var=mysqli_escape_string($conexao, $input);

$var=htmlspecialchars($var);
return $var;

}
?>