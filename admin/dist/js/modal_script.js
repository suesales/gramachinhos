$('a.modalButton').on('click', function (e) {

    var screenModal = $(this).attr('data-screen');
    //var titulo_modal = $(this).attr('modal-title');

    switch (screenModal) {
        case 'aut_doc':

        var cerNasc = $(this).attr('data-cerNasc');
        var rg = $(this).attr('data-rg');
        var cpf = $(this).attr('data-cpf');
        var autoImage = $(this).attr('data-autoImage');
        var autoSaidaExterna = $(this).attr('data-autoSaidaExterna');

        //$("#titulo_modal").text(titulo_modal);

        (cerNasc == 1) ? $("#inputCerNasc").prop("checked", true) : $("#inputCerNasc").prop("checked", false);
        (rg == 1) ? $("#inputRG").prop("checked", true) : $("#inputRG").prop("checked", false);
        (cpf == 1) ? $("#inputCPF").prop("checked", true) : $("#inputCPF").prop("checked", false);
        (autoImage == 1) ? $("#inputAutoImage").prop("checked", true) : $("#inputAutoImage").prop("checked", false);
        (autoSaidaExterna == 1) ? $("#inputAutoSaidaExterna").prop("checked", true) : $("#inputAutoSaidaExterna").prop("checked", false);

        /*(cerNasc == 1) ? $("#inputCerNasc").attr("checked", "checked") :  $("#inputCerNasc").attr("checked", "");
        (rg == 1) ? $("#inputRG").attr("checked", "checked") : $("#inputRG").attr("checked", "");
        (cpf == 1) ? $("#inputCPF").attr("checked", "checked") : $("#inputCPF").attr("checked", "");
        (autoImage == 1) ? $("#inputAutoImage").attr("checked", "checked") : $("#inputAutoImage").attr("checked", "");
        (autoSaidaExterna == 1) ? $("#inputAutoSaidaExterna").attr("checked", "checked") : $("#inputAutoSaidaExterna").attr("checked", "");*/
        break;

        case 'escola':

        var nomeEscola = $(this).attr('data-escola');
        var serie = $(this).attr('data-serie');

        //$("#titulo_modal").text(titulo_modal);
        $("#inputNomeEscola").val(nomeEscola);
        $("#inputSerie").val(serie);
        break;

        case 'endereco':

        var lograouro = $(this).attr('data-lograouro');
        var cep = $(this).attr('data-cep');
        var bairro = $(this).attr('data-bairro');
        var cidade = $(this).attr('data-cidade');

        //$("#titulo_modal").text(titulo_modal);
        $("#inputLograouro").val(lograouro);
        $("#inputCep").val(cep);
        $("#inputBairro").val(bairro);
        $("#inputCidade").val(cidade);
        break;
    }
});
