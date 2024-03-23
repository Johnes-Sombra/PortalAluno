<?php
$connection = new mysqli('localhost', 'biblioteca', '1234567890', 'biblioteca');
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$categorias = ["EIXO AMBIENTE E SAÚDE", "EIXO GESTÃO E NEGÓCIOS", "EIXO INFORMAÇÃO E COMUNICAÇÃO", "EIXO RECURSOS NATURAIS"];

foreach ($categorias as $categoria) {
    echo "<div class='categoria' onclick='abrirLivros(\"$categoria\")'>$categoria</div>";
}
?>
<script>
    function abrirLivros(categoria) {
        window.location.href = 'livros.php?categoria=' + encodeURIComponent(categoria);
    }
</script>
