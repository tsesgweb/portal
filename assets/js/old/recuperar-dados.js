var limite = 5000;
window.onload = function() {
    montaHTML();
};

function montaHTML() {
    function comparar(a, b, item) {
        var paginaA = a.item;
        var paginaB = b.item;

        var comparacao = 0;
        if (paginaA > paginaB) {
            comparacao = 1;
        } else if (paginaA < paginaB) {
            comparacao = -1;
        }
        //do maior para o menor
        return comparacao * -1;
    }
    var paginas = localStorage.getItem("dadosAnalytics");
    var acessos = document.getElementById('historico-acessos');
    var link = document.querySelectorAll('.acessados-link');
    var ul = document.createElement('ul');
    ul.className = 'list-inline icone icone-lista';
    paginas = JSON.parse(paginas);
    if (paginas === null) paginas = [];
    if (paginas.length >= limite) {
        //Ordena a os dados com maiores acessos
        paginas.sort(comparar('acessos'));
        for (var i = 0; i < limite; i++) {
            var pagina = paginas[i];
            //Somente os resultado com maior limite de acessos
            if (pagina.acessos >= limite) {
                var li = document.createElement('li');
                var a = document.createElement('a');
                li.className = 'item-' + pagina.id;
                a.textContent = pagina.titulo;
                a.title = pagina.titulo + ' (' + pagina.acessos + ' )';
                a.href = pagina.url;
                li.appendChild(a);
                ul.appendChild(li);
            }
        }
        link.className = 'show';
        acessos.appendChild(ul);
        return acessos;
    } else {
        link.className = 'hide';
    }
}