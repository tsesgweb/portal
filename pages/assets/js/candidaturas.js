jq(document).ready(function() {
    var BASE_URL = 'http://divulgacandcontas.tse.jus.br';
    var TSE = 'http://www.tse.jus.br/eleicoes/eleicoes-2018/divulgacandcontas/';
    var REST = BASE_URL + '/divulga/rest/v1/';
    var idEleicao = '2022802018';
    var ano = '2018';
    var DOWNLOAD = BASE_URL + '/candidaturas/oficial/' + ano + '/BR/BR/' + idEleicao + '/';
    var MAJORITARIOS = 'candidatura/listar/' + ano + '/BR/' + idEleicao + '/1/candidatos';
    var presidentes = [];

    jq.getJSON(REST + MAJORITARIOS, function(data) {
        data = data.candidatos;
        jq.each(data, function(key, campo) {
            presidentes.push(
                "<tr><td><a href=" + TSE + '#/candidato/' + ano + '/' + idEleicao + '/BR/' + campo.id + "> " + campo.nomeUrna + " </a></td > " +
                "<td>" + campo.numero + "</td>" +
                "<td>" + campo.descricaoSituacao + "</td>" +
                "<td>" + campo.partido.sigla + "</td>" +
                "<td>" + campo.nomeColigacao.toUpperCase() + "</td>" +
                "<td><a href='#' id=" + campo.id + " class='plano-governo'> Baixar proposta</a> </td></tr>"
            );
        });
    }).always(function() {
        jq("<tbody/>", {
            "id": "presidentes",
            html: presidentes.join("")
        }).appendTo("#candidatos");
    }).done(function() {
        var $lista = jq('#presidentes').find('.plano-governo');
        $lista.each(function() {
            var $self = jq(this);
            var id = $self.attr('id');
            jq.getJSON(REST + 'candidatura/buscar/' + ano + '/BR/' + idEleicao + '/candidato/' + id).done(function(data) {
                jq.each(data.arquivos, function(key, value) {
                    if (value.nome.indexOf('proposta') === 0) {
                        var tipo = value.codTipo;
                        var nome = value.nome;
                        if (tipo == 5) {
                            $self.attr({
                                href: DOWNLOAD + id + '/' + nome,
                                target: '_blank',
                                title: nome
                            });
                        } else {
                            $self.text(' Sem proposta de Governo');
                        }
                    }
                });
            });
        });
    }).fail(function(textStatus, error) {
        var err = textStatus + ", " + error;
        console.log("Request Failed: " + err);
    });
});