$(document).ready(function() {
    $('#gerarEquipeBtn').click(function() {
        // Pega o valor do campo objeto da contratação
        var objetoContratacao = $('#objeto_contratacao').val();

        // Faz a requisição AJAX para gerar a equipe
        $.ajax({
            url: '/gerar-equipe',
            method: 'GET',
            data: { objeto_contratacao: objetoContratacao }, // Envia o objeto da contratação
            success: function(response) {
                // Limpa o conteúdo anterior
                $('#resultado').empty();

                // Insere o resultado na div
                $.each(response, function(index, membro) {
                    $('#resultado').append(
                        '<p><strong>' + membro.funcao + ':</strong> ' + membro.nome + '</p>'
                    );
                });
            },
            error: function(xhr) {
                $('#resultado').html('<p style="color: red;">Erro ao gerar equipe: ' + xhr.responseJSON.message + '</p>');
            }
        });
    });
});
