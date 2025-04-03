<?php 

$arquivo = fopen("teste.txt", "r");
$lePrimeiraLinha =  fgets($arquivo);
echo $lePrimeiraLinha;
fclose($arquivo);