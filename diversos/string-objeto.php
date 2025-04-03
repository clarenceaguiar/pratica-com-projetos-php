<?php 

$stringJson = '{"Nome":"Clarence","anoNascimento":1997,"profissão":"Dev"}';
$stringEmObjeto = json_decode($stringJson, true);
var_dump($stringEmObjeto);