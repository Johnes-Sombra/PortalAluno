// Dicionário de municípios por estado
const municipiosPorEstado = {
    'AC': ["Acrelândia", "Assis Brasil", "Brasiléia", "Bujari", "Capixaba", "Cruzeiro do Sul", "Epitaciolândia", "Feijó", "Jordão", "Manoel Urbano", "Marechal Thaumaturgo", "Mâncio Lima", "Plácido de Castro", "Porto Acre", "Porto Walter", "Rio Branco", "Rodrigues Alves", "Santa Rosa do Purus", "Sena Madureira", "Senador Guiomard", "Tarauacá", "Xapuri"],
    'AM': ["Alvarães", "Amaturá", "Anamã", "Anori", "Apuí", "Atalaia do Norte", "Autazes", "Barcelos", "Barreirinha", "Benjamin Constant", "Beruri", "Boa Vista do Ramos", "Boca do Acre", "Borba", "Caapiranga", "Canutama", "Carauari", "Careiro", "Careiro da Várzea", "Codajás", "Coari", "Eirunepé", "Envira", "Fonte Boa", "Guajará", "Humaitá", "Ipixuna", "Iranduba", "Itacoatiara", "Itamarati", "Itapiranga", "Japurá", "Jutaí", "Lábrea", "Manacapuru", "Manaquiri", "Manaus", "Manicoré", "Maraã", "Maués", "Nhamundá", "Nova Olinda do Norte", "Novo Airão", "Novo Aripuanã", "Parintins", "Pauini", "Presidente Figueiredo", "Rio Preto da Eva", "Santa Isabel do Rio Negro", "Santo Antônio do Içá", "São Gabriel da Cachoeira", "São Paulo de Olivença", "São Sebastião do Uatumã", "Silves", "Tabatinga", "Tapauá", "Tefé", "Tonantins", "Uarini", "Urucará", "Urucurituba"]
    // Adicione outros estados e seus respectivos municípios aqui
};

// Função para atualizar as opções de municípios de acordo com o estado selecionado
function atualizarMunicipios() {
    const estadoSelecionado = document.getElementById('estado').value;
    const municipioSelect = document.getElementById('municipio');

    // Limpar as opções atuais
    municipioSelect.innerHTML = '';

    // Adicionar as opções correspondentes ao estado selecionado
    municipiosPorEstado[estadoSelecionado].forEach(municipio => {
        const option = document.createElement('option');
        option.text = municipio;
        municipioSelect.add(option);
    });
}

// Adicionar um evento de mudança ao campo de seleção de estado
document.getElementById('estado').addEventListener('change', atualizarMunicipios);

// Chamar a função inicialmente para exibir os municípios do estado selecionado inicialmente
atualizarMunicipios();
