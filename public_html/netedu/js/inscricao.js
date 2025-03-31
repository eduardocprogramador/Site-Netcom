let ultimoItemExibido = null;

$('#modalidade').change(function () {
    const valor = $(this).val();

    // Mostrar label do curso
    $('#label-curso').show();

    // Ocultar select anterior
    if (ultimoItemExibido) {
        $('#' + ultimoItemExibido).hide();
    }

    // Mostrar select atual
    $('#' + valor).show();

    // Resetar valor do campo oculto
    $('#curso_real').val('');

    ultimoItemExibido = valor;
});

// Quando um curso for selecionado, atualizar o campo oculto
$('.curso-opcao').change(function () {
    const valorSelecionado = $(this).val();
    $('#curso_real').val(valorSelecionado);
});