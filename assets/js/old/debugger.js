 if (typeof jq.fn.responsiveTabs == "function") {
     jq("#bt-debitos-do-eleitor a, #bt-todos-os-servicos a").clone().appendTo('.abas-servicos-conteudo').addClass('accordion-link');
 } else {
     if (jq('body.template-paginainicial').lenght < 0) {
         console.log('responsiveTabs not found');
     }
 }
 if (document.domain === 'www.tse.jus.br') {
     importScript('http://www.googletagmanager.com/gtag/js?id=UA-16748902-3');
     window.dataLayer = window.dataLayer || [];

     function gtag() {
         dataLayer.push(arguments);
     }
     gtag('js', new Date());

     gtag('config', 'UA-16748902-3');
 }

 var localVotacaoHome = document.getElementById('local-votacao');
 //  console.log(document.body.getElementsByClassName('template-paginainicial').length);
 var importStyle = (function(oHead) {

     function loadError(oError) {
         throw new URIError("The style " + oError.target.src + " is not accessible.");
     }

     return function(sSrc) {
         var oStyle = document.createElement("link");
         oStyle.type = "text\/css";
         oStyle.rel = "stylesheet";
         oStyle.onerror = loadError;
         oHead.appendChild(oStyle);
         oStyle.href = sSrc;
     };

 })(document.head || document.getElementsByTagName("head")[0]);
 importStyle('http://www.tse.jus.br/dinamico/css/debugger.css');