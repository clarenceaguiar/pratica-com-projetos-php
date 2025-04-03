<?php 

$arquivo = fopen("teste.txt", "a");
fwrite($arquivo, "\nPHP é incrível!\n");
fclose($arquivo);