function mostrarApostilas(categoria) {
    // Limpa o conteúdo anterior
    document.getElementById('apostilas').innerHTML = '';

    // Cria uma nova requisição XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Define o método GET e a URL para buscar os arquivos PDF da categoria selecionada
    xhr.open('GET', './biblioteca/apostilas/' + categoria);

    // Define a função a ser executada quando a requisição for concluída
    xhr.onload = function() {
        // Verifica se o status da requisição é 200 (OK)
        if (xhr.status === 200) {
            // Transforma a resposta da requisição em um objeto JSON
            var files = JSON.parse(xhr.responseText);

            // Verifica se a lista de arquivos não está vazia
            if (files.length > 0) {
                // Cria uma lista não ordenada (ul)
                var ul = document.createElement('ul');

                // Itera sobre a lista de arquivos e cria um link (a) para cada arquivo
                files.forEach(function(file) {
                    // Cria um novo elemento de link (a)
                    var link = document.createElement('a');
                    
                    // Define o atributo href do link com o caminho do arquivo PDF
                    link.href = './biblioteca/apostilas/' + categoria + '/' + file;
                    
                    // Define o texto do link com o nome do arquivo
                    link.textContent = file;
                    
                    // Define o atributo target para abrir o link em uma nova aba
                    link.setAttribute('target', '_blank');
                    
                    // Cria um novo item de lista (li)
                    var li = document.createElement('li');
                    
                    // Adiciona o link ao item de lista
                    li.appendChild(link);
                    
                    // Adiciona o item de lista à lista não ordenada
                    ul.appendChild(li);
                });

                // Adiciona a lista de arquivos ao elemento com o id 'apostilas'
                document.getElementById('apostilas').appendChild(ul);
            } else {
                // Se a lista de arquivos estiver vazia, exibe uma mensagem
                document.getElementById('apostilas').innerHTML = '<p>Nenhum arquivo disponível para esta categoria.</p>';
            }
        } else {
            // Se a requisição falhar, exibe uma mensagem de erro
            console.error('Erro ao carregar arquivos.');
        }
    };

    // Envia a requisição
    xhr.send();
}
