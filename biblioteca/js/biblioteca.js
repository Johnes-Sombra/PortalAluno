function mostrarApostilas(categoria) {
    // Limpa o conteúdo anterior
    document.getElementById('apostilas').innerHTML = '';

    // Cria uma lista não ordenada (ul)
    var ul = document.createElement('ul');

    // Percorre os arquivos PDF da categoria selecionada
    var files = getFiles(categoria);
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
}

// Função fictícia para obter os arquivos da categoria (substitua esta função pela lógica real de obtenção de arquivos)
function getFiles(categoria) {
    // Retorne uma lista de arquivos fictícia para a categoria fornecida
    return ['arquivo1.pdf', 'arquivo2.pdf', 'arquivo3.pdf'];
}
