<?php
include 'config.php';

// Verifica se a categoria foi passada na URL
if(isset($_GET['categoria'])) {
    $categoria = $_GET['categoria'];

    // Verifica se a categoria é válida
    if(in_array($categoria, ['ambiente_saude', 'gestao_negocios', 'informacao_comunicacao', 'recursos_naturais'])) {
        // Diretório dos livros
        $diretorio = "livros/$categoria";

        // Obtém a lista de arquivos PDF no diretório da categoria
        $livros = glob("$diretorio/*.pdf");

        // Exibe os links para os livros
        echo "<h2>Livros da categoria: $categoria</h2>";
        foreach($livros as $livro) {
            $nomeLivro = pathinfo($livro, PATHINFO_FILENAME);
            echo "<a href='$livro'>$nomeLivro</a><br>";
        }
    } else {
        echo "Categoria inválida.";
    }
} else {
    echo "Categoria não especificada.";
}
?>
