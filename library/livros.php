<?php
if (isset($_GET['categoria'])) {
    $categoria = $_GET['categoria'];
    $diretorio = '';

    switch ($categoria) {
        case 'EIXO AMBIENTE E SAÚDE':
            $diretorio = '/livros/ambiente_saude';
            break;
        case 'EIXO GESTÃO E NEGÓCIOS':
            $diretorio = '/livros/gestao_negocios';
            break;
        case 'EIXO INFORMAÇÃO E COMUNICAÇÃO':
            $diretorio = '/livros/informacao_comunicacao';
            break;
        case 'EIXO RECURSOS NATURAIS':
            $diretorio = '/livros/recursos_naturais';
            break;
        default:
            header("Location: index.php");
            exit();
    }

    $livros = glob($diretorio . '/*.pdf');
} else {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros - <?php echo $categoria; ?></title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1><?php echo $categoria; ?></h1>
        <div id="livros">
            <?php foreach ($livros as $livro): ?>
                <div class="livro">
                    <a href="<?php echo $livro; ?>" target="_blank"><?php echo basename($livro); ?></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
