<div id="barra-ferramentas-noticias">
  <div class="links">
    <div class="links__conteudo">
      <div class="links__linha">
        <div class="sumario">
          <button class="abrir-sumario"><span class="sr-only">Sumário</span></button>
        </div>
        <div class="paginacao">
          <button class="anterior"><span class="titulo">Anterior</span></button>
          <button class="proximo"><span class="titulo">Próximo</span></button>
        </div>
        <div class="tempo-leitura">8 min de leitura</div>
        <div class="media">
        <div class="dropdown">
          <button class="compartilhar dropdown-toggle" type="button" id="compartilhar-barra-ferramentas" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Compartilhar</span>
          </button>
          <div class="dropdown-menu compartilhar-barra-ferramentas" aria-labelledby="compartilhar-barra-ferramentas">
            <?php include BASE_URL . '/includes/share-icones.inc.php';?>
          </div>
</div>
        </div>
        <div class="eventos-pagina">
          <button type="button" class="imprimir" onclick="window.print()"><span class="sr-only">Imprimir</span></button>
          <button type="button" class="salvar" data-container="body" data-toggle="popover" data-placement="top"
            data-content="<a href='http://www.tse.jus.br/imprensa/noticias-tse/2019/Marco/pedidos-de-liminar-rompem-fluxo-processual-tradicional-na-justica-eleitoral/download_pdf?dt=2903201915191553883594&pdf-view=paginanoticia'>PDF</a>
                                                            <a href='http://www.tse.jus.br/imprensa/noticias-tse/2019/Marco/pedidos-de-liminar-rompem-fluxo-processual-tradicional-na-justica-eleitoral/download_rtf'>RTF</a>">
            <span class="sr-only">Salvar</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="progress-container">
    <div class="progress-bar" id="barra-progressao"></div>
  </div>
</div>