$(document).ready(function() {
    //Script de consulta
    (function() {
        var $tipo = $(".pesquisa-box");
        $("#acao").on('change', $(this), function(e) {

            e.preventDefault();
            var $selecionada = $('option:selected', this);
            $tipo.hide();
            $("#" + $selecionada.val()).hide().show();
        });
    })();
});
