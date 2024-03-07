document.addEventListener("DOMContentLoaded", function() {
    // Capturando o formulário
    const form = document.querySelector('form');

    // Adicionando um listener para o evento de envio do formulário
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evita o envio padrão do formulário

        // Capturando os dados do formulário
        const curso = document.getElementById('curso').value;
        // Capturar outros campos aqui conforme necessário

        // Exibindo os dados capturados no console (você pode alterar isso conforme necessário)
        console.log('Curso:', curso);
        // Exibir outros dados capturados conforme necessário

        // Aqui você pode adicionar código para enviar os dados para um servidor, fazer validações, etc.
    });
});
