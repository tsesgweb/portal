function checarSuporteStorage() {
    if (window.sessionStorage) {
        return true;
    } else {
        return false;
    }
    if (window.localStorage) {
        return true;
    } else {
        return false;
    }
}

if (checarSuporteStorage()) {
    var protocolo = window.location.protocol;
    var $address = window.location.host;
    var $production = /^(http(s)?(:\/\/))?(metalic|webhomologa|portalhomologa|www|intranet)?(\.)?(tse|tre\-[a-z]{2})\.(jus|gov)\.br(|\/)$/.test($address);
    var $developer = /^\/portal\/(?:|index\.php?)$/i.test(window.location.pathname) || window.location.pathname == "/";
    //Retira http ou httos e www
    var $subdomain = $address.replace(new RegExp(/\.[a-z]{2,3}\.[a-z]{2}$/i), "");
    //Retira o $subdomain deixando apenas o $domain prinipal
    var $domain = $subdomain.replace(new RegExp(/^[a-z]*\./i), "");
    var $storageKey = "analytics" + "-" + $subdomain + "-" + $domain.toUpperCase();
    var $time = 100;
    if (!$developer) {
        var adicionarDados = function() {
            getData($storageKey, $time);
        };
        if (window.addEventListener) {
            window.addEventListener("load", function() {
                adicionarDados();
            });
        } else {
            window.attachEvent("load", function() {
                adicionarDados();
            });
        }
    }
}

function getData(key, time) {
    setTimeout(function() {
        var $getUrl = window.location.protocol + '//' + window.location.host + window.location.pathname,
            $getStorage = getStorage() === null ? [] : getStorage(),
            $setId = $getStorage.length >= 1 ? $setId = parseInt($getStorage.length) + 1 : 1,
            $identifier,
            $equalUrl;
        for (var $i = 0; $i < $getStorage.length; $i++) {
            if ($getStorage[$i].url === $getUrl) {
                $equalUrl = !$equalUrl;
                $identifier = $getStorage[$i].id;
            }
        }
        //Se a url for igual, atualiza os dados
        if ($equalUrl) updateItem($identifier);
        else newItem($setId, $getUrl);

        //Pega os dados do localStorage
        function getStorage() {
            storage = localStorage.getItem(key);
            return JSON.parse(storage);
        }
        //Cria um novo item na lista dos dados
        function newItem(id, url) {
            var $page = {
                id: id,
                title: titleFormat(),
                url: url,
                access: 1,
                created: new Date()
            };
            $getStorage.push($page);
            return localStorage.setItem(key, JSON.stringify($getStorage));
        }
        //Atualiza o localstorage
        function updateItem(id) {
            for (var i = 0; i < $getStorage.length; i++) {
                if (id == $getStorage[i].id) {
                    //Atualiza o título caso alterado
                    if ($getStorage[i].title !== titleFormat()) $getStorage[i].title = titleFormat();
                    //Adiciona o contador
                    $getStorage[i].access++;
                    //Cria o item accessed
                    $getStorage[i].accessed = new Date();
                    //Cria o item changed e coloca a direfença de dias
                    $getStorage[i].changed = differDates($getStorage[i].created, $getStorage[i].accessed);
                }
            }
            return localStorage.setItem(key, JSON.stringify($getStorage));
        }
    }, time);
}
//Formata o título retirando — Tribunal Superior Eleitoral ou Tribunal Regional Eleitoral
function titleFormat() {
    var $title = document.title;
    var $regExp = $title.match(/(|\s)\—+ Tribunal (Superior|Regional) Eleitoral(.+$|)/gmi);
    $newTitle = $title.replace($regExp, "");
    return $newTitle;
}
//Função para obter a dirença entre as datas
function differDates(a, b) {
    var $dataA = new Date(a);
    var $dataB = new Date(b);
    var $time = Math.abs($dataB.getTime() - $dataA.getTime());
    var $days = Math.ceil($time / (1000 * 3600 * 24));
    return $days;
}
// Formata a data de "2018-06-25T21:35:46.384Z" para "25.06.2018 21:35:46"
function currentDateFormated(date) {
    var $day = date.getDate();
    if ($day.toString().length == 1)
        $day = "0" + $day;
    var $month = date.getMonth() + 1;
    if ($month.toString().length == 1)
        $month = "0" + $month;
    var $year = date.getFullYear();
    var $hour = date.getHours();
    var $min = date.getMinutes();
    var $sec = date.getSeconds();
    return $day + "." + $month + "." + $year + " " + $hour + ":" + $min + ":" + $sec;
}
jq(function() {
    //chama a função que monta o html
    createHTML($storageKey, 5, 5);
});
// Recuperar dados
function createHTML(key, minAccess, totalView) {
    var $pages = localStorage.getItem(key),
        $access = jq('#historico-acessos'),
        $link = jq('.acessados-link'),
        $ul = jq('<ul class="list-inline icone icone-lista"/>');

    if (pages($pages).length >= minAccess) {

        for (var $i = 0; $i < totalView; $i++) {
            var $page = pages($pages)[$i];
            if ($page.access >= minAccess) {
                $li = jq('<li class="item-' + $page.id + '"/>');
                $a = jq('<a />')
                    .text($page.title + ' (' + $page.access + ' )')
                    .attr({
                        'title': $page.title + ' (' + $page.access + ' )',
                        'href': $page.url
                    });
                $link.addClass('show');
                $li.append($a);
                $ul.append($li);
            } else {
                $link.addClass('hide');
            }
        }
        $access.append($ul);
        return $access;
    }

    //Função para pegar os dados e colocar em json e ordenar
    //Como usar pages(localStorage.getItem(key))
    function pages(p) {
        p = JSON.parse(p);
        if (p === null) p = [];
        p = p.sort(comparaKey("access"));
        return p;
    }
    //função para comparar os dados
    //Como usar array.sort(comparaKey("access"));
    function comparaKey(key) {
        return function(a, b) {
            var paginaA = a[key],
                paginaB = b[key],
                comparacao = 0;
            if (paginaA > paginaB) {
                comparacao = 1;
            } else if (paginaA < paginaB) {
                comparacao = -1;
            }
            //do maior para o menor
            return comparacao * -1;
        };
    }
}
jq(function() {
    var naoExibir = jq('#bs-nao-exibir');
    jq('#nao-exibir').on('click', function(e) {
        naoExibir.modal('show');

    });
    var confirmarExibir = jq('#confirmacao-exibir');
    confirmarExibir.on('click', function(e) {
        naoExibir.modal('hide');
        e.preventDefault();
    });

    var limparCache = jq('#bs-limpar-cache');
    jq('#limpar-cache').on('click', function() {
        limparCache.modal('show');
    });
    var confirmarLimparCache = jq('#confirmacao-limpar');
    confirmarLimparCache.on('click', function(e) {
        localStorage.removeItem($storageKey);
        location.reload(true);
        limparCache.modal('hide');
        e.preventDefault();
    });
    jq(window).on('load bind', jq(this), function() {
        function onStorage(data) {
            console.log(data);
            console.log('console');
        }
        if (window.addEventListener) {
            window.addEventListener("storage", onStorage, false);
        } else {
            window.attachEvent("onstorage", onStorage);
        }
    });
});