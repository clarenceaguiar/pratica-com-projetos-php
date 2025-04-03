<?php

$conteudoArquivoJson = file_get_contents('filme.json');
$filme = json_decode($conteudoArquivoJson, true);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Filme inserido</title>
</head>
<body>
    <h1><?= $filme['nome']; ?></h1>
    <ul>Ano de lançamento: <?= $filme['anoLancamento']; ?></ul>
    <ul>Nota: <?= $filme['nota']; ?></ul>
    <ul>Gênero: <?= $filme['genero']; ?></ul>
</body>
</html>