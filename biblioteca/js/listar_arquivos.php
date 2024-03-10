<?php

// Diretório onde estão os arquivos
$directory = './biblioteca/apostilas/' . $_GET['categoria'];

// Obtém a lista de arquivos no diretório
$files = scandir($directory);

// Remove os diretórios '.' e '..'
$files = array_diff($files, array('..', '.'));

// Retorna a lista de arquivos como JSON
echo json_encode(array_values($files));
