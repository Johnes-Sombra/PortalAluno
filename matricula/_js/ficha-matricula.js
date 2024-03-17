document.addEventListener('DOMContentLoaded', function () {
    // Campo "Qual" referente a alergia ao medicamento
    var campoQualAlergia = document.getElementById('qual_alergia');
    var campoAlergia = document.getElementById('alergia_medicamento');

    campoAlergia.addEventListener('change', function () {
        if (campoAlergia.value === 'Sim') {
            campoQualAlergia.disabled = false;
            campoQualAlergia.required = true;
        } else {
            campoQualAlergia.disabled = true;
            campoQualAlergia.required = false;
        }
    });

    // Campo "Qual" referente a alguma deficiência
    var campoQualDeficiencia = document.getElementById('qual_deficiencia');
    var campoDeficiencia = document.getElementById('deficiencia');

    campoDeficiencia.addEventListener('change', function () {
        if (campoDeficiencia.value === 'Sim') {
            campoQualDeficiencia.disabled = false;
            campoQualDeficiencia.required = true;
        } else {
            campoQualDeficiencia.disabled = true;
            campoQualDeficiencia.required = false;
        }
    });

    // Campo "Local de Trabalho" referente a emprego
    var campoLocalTrabalho = document.getElementById('local_trabalho');
    var campoEmprego = document.getElementById('emprego');

    campoEmprego.addEventListener('change', function () {
        if (campoEmprego.value === 'Sim') {
            campoLocalTrabalho.disabled = false;
            campoLocalTrabalho.required = true;
        } else {
            campoLocalTrabalho.disabled = true;
            campoLocalTrabalho.required = false;
        }
    });

    // Botão "Enviar" habilitado pela checkbox
    var checkboxDeclaracao = document.getElementById('declaracao');
    var btnEnviar = document.querySelector('input[type="submit"]');

    checkboxDeclaracao.addEventListener('change', function () {
        btnEnviar.disabled = !checkboxDeclaracao.checked;
    });

    // Botão "Limpar Campos"
    var btnLimpar = document.getElementById('limpar_campos');
    var form = document.querySelector('form');

    btnLimpar.addEventListener('click', function (event) {
        event.preventDefault();
        form.reset();
    });
});
