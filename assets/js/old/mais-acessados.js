const KEY = 'analytics-Portal';
const ACEITE = true;
const TIME = 1000;
const MINACCESS = 10;
const TOTALVIEWS = 10;
const COLUMNS = 2;
const ORDERBY = 'access';
const ORDER = 'desc' // ASC~DESC
const DOCTITLE = document.title
const URL = window.location.protocol + '//' + window.location.host + window.location.pathname
const REGEXTITLE = new RegExp(/(|\s)\—+ Tribunal (Superior|Regional) Eleitoral(.+$|)/gmi)
const TITLE = DOCTITLE.replace(REGEXTITLE, "")
const UNIQUEID = Math.random().toString(36).substr(2, 16)
const setItem = (itens) => localStorage.setItem(KEY, JSON.stringify(itens))
const getStorage = localStorage.getItem(KEY) == null ? [] : JSON.parse(localStorage.getItem(KEY))
const dateDiffs = (a, b) => {
    let $dataA = new Date(a);
    let $dataB = new Date(b);
    let $time = Math.abs($dataB.getTime() - $dataA.getTime());
    let $days = Math.ceil($time / (1000 * 3600 * 24));
    return $days;
}

const currentDateFormated = (date) => {
    let $day = date.getDate();
    if ($day.toString().length == 1) $day = 0 + $day;
    let $month = date.getMonth() + 1;
    if ($month.toString().length == 1) $month = 0 + $month;
    let $year = date.getFullYear();
    let $hour = date.getHours();
    let $min = date.getMinutes();
    let $sec = date.getSeconds();
    return $day + "." + $month + "." + $year + "-" + $hour + ":" + $min + ":" + $sec;
};

const compareValues = (key, order = 'asc') => {
    return function(a, b) {
        if (!a.hasOwnProperty(key) || !b.hasOwnProperty(key)) return 0;
        const varA = (typeof a[key] === 'string') ? a[key].toUpperCase() : a[key];
        const varB = (typeof b[key] === 'string') ? b[key].toUpperCase() : b[key];
        let comparison = 0;
        if (varA > varB) comparison = 1;
        else if (varA < varB) comparison = -1;
        return ((order == 'desc') ? (comparison * -1) : comparison);
    }
};
const orderBy2 = (array) => {
    array.sort((key) => {
        let a, b;
        if (a[key] > b[key]) return 1;
        if (a[key] < b[key]) return -1;
        // a must be equal to b
        return ORDER;
    })
}
const orderBy = (key) => {
    return (a, b) => {
        let $pageA = a[key],
            $pageB = b[key],
            $match = 0;
        if ($pageA > $pageB) {
            $match = 1;
        } else if ($pageA < $pageB) {
            $match = ORDER;
        }
        return $match * ORDER;
    };
};

const getKeyInStorage = (storage, key) => {
    let keys = [];
    for (let $i = 0; $i < storage.length; $i++) {
        keys.push(storage[$i][key]);
    }
    return keys;
};

const updateItem = (id) => {
    for (let i = 0; i < getStorage.length; i++) {
        if (id == getStorage[i].id) {
            (getStorage[i].access++);
            getStorage[i].modified = new Date();
            getStorage[i].changed = dateDiffs(getStorage[i].created, getStorage[i].modified);
            getStorage[i].title != TITLE ? getStorage[i].title = TITLE : getStorage[i].title;
        }
    }
    return setItem(getStorage);
};

const newItem = () => {
    const item = {
        id: UNIQUEID,
        title: TITLE,
        url: URL,
        access: 1,
        created: new Date()
    };
    getStorage.push(item);
    return setItem(getStorage);
};
const createHTML = () => {
    const $pages = getStorage.sort(compareValues(ORDERBY, ORDER)),
        $access = jq('#historico-acessos'),
        $link = jq('.acessados-link'),
        $ul = jq('<ul class="list-unstyled icone icone-lista"/>')
    $fiteredPages = $pages.length > TOTALVIEWS ? $pages.slice(0, TOTALVIEWS) : $pages
    $fiteredPages
        .filter((item) => {
            return item.access >= MINACCESS
        })
        .map((page, index, array) => {
            if (array.length >= TOTALVIEWS) {
                $li = jq('<li class="item-' + page.id + '"/>');
                $a = jq('<a />')
                    .text(page.title + ' (' + page.access + ' )')
                    .attr({
                        'title': page.title + ' (' + page.access + ' )',
                        'href': page.url,
                        'data-index': index
                    });
                $li.append($a);
                $ul.append($li);
                $access.append($ul);
                $link.addClass('show');
            }
        });
};

const initStorage = () => {
    let id, url;
    const filterUrl = (itens) => URL == itens.url ? itens.url : '';
    setTimeout(() => {
        let id, url;
        getStorage
            .filter(filterUrl)
            .map((itens) => {
                id = itens.id;
                url = itens.url;
            })
        if (url == URL) {
            updateItem(id);
        } else {
            newItem();
        }
    }, TIME);
    createHTML();
}
const termosMaisAcessados = () => {
        console.log(typeof Cookies == 'function');
        if (typeof Cookies == 'function') {
            const aceiteTermoMaisAcessados = jq("name='aceiteTermoMaisAcessados'");
            console.log(aceiteTermoMaisAcessados);
        }
    }
    (function($) {
        if (!ACEITE) {
            $("#historico-acessos").text("<p>Termo de aceite</p>");
        } else {
            initStorage();

        }
        const $naoExibir = $('#bs-nao-exibir')
        $('#nao-exibir').on('click', function() {
            $naoExibir.modal('show');

        })
        const $confirmarExibir = $('#confirmacao-exibir');
        $confirmarExibir.on('click', function(e) {
            $naoExibir.modal('hide');
            e.preventDefault();
        })

        const $limparCache = $('#bs-limpar-cache');
        $('#limpar-cache').on('click', function() {
            $limparCache.modal('show');
        })
        const $confirmarLimparCache = $('#confirmacao-limpar');
        $confirmarLimparCache.on('click', function(e) {
            localStorage.removeItem(KEY);
            window.location.reload(true);
            $limparCache.modal('hide');
            e.preventDefault();
        })
        $(window).on('load bind', $(this), function() {
            function onStorage(data) {
                console.log(data);
            }
            if (window.addEventListener) {
                window.addEventListener("storage", onStorage, false);
            } else {
                window.attachEvent("onstorage", onStorage);
            }
        })
    })(jQuery);