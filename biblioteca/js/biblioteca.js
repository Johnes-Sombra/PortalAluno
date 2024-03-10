function mostrarApostilas(categoria) {
    // Limpa o conteúdo anterior
    document.getElementById('apostilas').innerHTML = '';

    // Faz uma requisição AJAX para obter a lista de arquivos
    var xhr = new XMLHttpRequest();
    xhr.open('GET', './listar_arquivos.php?categoria=' + categoria, true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            var files = JSON.parse(xhr.responseText);

            // Cria uma lista não ordenada (ul)
            var ul = document.createElement('ul');

            // Percorre os arquivos e cria links para eles
            files.forEach(function(file) {
                // Cria um link para o arquivo PDF
                var link = document.createElement('a');
                link.href = './biblioteca/apostilas/' + categoria + '/' + file;
                link.textContent = file;

                // Cria um item de lista (li) e adiciona o link a ele
                var li = document.createElement('li');
                li.appendChild(link);

                // Adiciona o item de lista à lista não ordenada
                ul.appendChild(li);
            });

            // Adiciona a lista de arquivos ao elemento com o id 'apostilas'
            document.getElementById('apostilas').appendChild(ul);
        } else {
            console.error('Erro ao carregar arquivos.');
        }
    };
    xhr.send();
}
