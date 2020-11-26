<?php
include('config.inc.php');
$subnivel = 'Biblioteca';
$titulo = 'Apresentação';
$biblioteca = true;
$asideinterna = false;
$tags = false;
$gestor = false;
include BASE_URL.'/includes/header.inc.php';
?>
<section class="biblioteca" id="banner">
   <div class="banners">
      <h3 class="sr-only">Banners principais</h3>
      <div class="item">
            <a href="http://www.tse.jus.br/o-tse/cultura-e-historia/catalogo-de-publicacoes/lista-do-catalogo-de-publicacoes" title="Catalogo de publicações"><img src="http://www.tse.jus.br/o-tse/cultura-e-historia/biblioteca/adm/banners-topo/catalogo-de-publicacoes/@@images/5fd9bb60-a3c7-48ec-9cb4-0202bd0adce3.jpeg" class="img-responsive"></a>
      </div>
      <div class="item">
            <a href="http://www.tse.jus.br/arquivos/novas-aquisicoes-da-biblioteca" title="Novas aquisições "><img src="http://www.tse.jus.br/o-tse/cultura-e-historia/biblioteca/adm/banners-topo/novas-aquisicoes/@@images/1f4fa6df-39bd-4260-846b-7ae702f11b82.jpeg" class="img-responsive"></a>
      </div>
   </div>
   <div class="apresentacao">
      <div class="imagem"><img src="http://www.tse.jus.br/imagens/imagens/tse-logo-biblioteca-professor-alysson-darowish-mitraud/@@images/d4a3a636-116b-4824-86f2-9d6414a14a5d.jpeg" class="img-responsive" alt="Logo da biblioteca Professor Alysson Darowish Mitraud."></div>
      <div class="texto">
            <div class="titulo-personalizado">
               <h3 class="titulo-padrao">A biblioteca</h3>
            </div>
            <p>A Biblioteca Professor Alysson Darowish Mitraud é de acesso público, especializada na área jurídica, com ênfase em Direito Eleitoral e matéria partidária e tem por objetivo oferecer subsídio à tomada de decisões e ao desenvolvimento das
               atividades administrativas do Tribunal Superior Eleitoral por meio do atendimento das demandas de seus usuários.
               <a href="http://www.tse.jus.br/o-tse/cultura-e-historia/biblioteca/biblioteca-do-tse" title="biblioteca destaque 1">» Saiba mais</a>
            </p>
      </div>
   </div>
   <div class="colunas">
      <div class="um">
            <!-- -->
            <div class="titulo-personalizado">
               <h3 class="titulo-padrao">Acervo biblioteca (ALEPH)</h3>
            </div>
            <div class="conteudo">
               <form action="@@processrequestbiblioteca" method="get" accept-charset="utf-8">
                  <label for="busca" class="sr-only">Pesquisar</label>
                  <div class="input-group input-group-md pesquisa">
                        <input id="servicoBiblioteca" name="servicoBiblioteca" value="aleph" type="hidden"><input id="busca" class="form-control" placeholder="Pesquisar..." type="search" autocomplete="off" name="busca">
                        <div class="input-group-btn"><button class="icone icone-pesquisa btn btn-primary" type="submit"><span class="hidden-xs">Buscar</span><span class="fa fa-search visible-xs" aria-hidden="true"></span></button></div>
                  </div>
               </form>
               <div class="pesquisa-avancada"><a href="http://www.tse.jus.br/o-tse/cultura-e-historia/biblioteca/reje/catalogo-do-tse" title="Pesquisa avançada aleph">Busca avançada »</a></div>
               <div class="">
                  <div class="links-renovacao text-justify">
                        <div class="tab-pane active" id="ancora-1">
                           <p><a class="internal-link" href="resolveuid/2bf14ed525804b1793d0c1e7535606f9" target="_blank" title="">Renovação de empréstimo</a> | <a class="internal-link" href="resolveuid/8e54e64796674057876669e211e80bae" target="_self"
                                    title="">Solicitação de pesquisa</a></p>
                        </div>
                  </div>
                  <div class="texto-acervo">
                        <p>Pesquisa em todo o acervo da Rede de Bibliotecas da Justiça Eleitoral.</p>
                  </div>
               </div>
            </div>
            <div class="titulo-personalizado">
               <h3 class="titulo-padrao">Destaques</h3>
            </div>
            <div class="conteudo">
               <div class="links-destaques conter-conteudo icone icone-lista">
                  <div class="tab-pane active" id="ancora-1">
                        <div class="links-destaques conter-conteudo icone icone-lista">
                           <ul class="grupo-lista">
                              <li><a class="internal-link" href="resolveuid/4342679d9b44f1087bd4cc4b7c6a4658" target="_blank" title="">Serviços da biblioteca</a></li>
                              <li><a class="internal-link" href="resolveuid/2c80f5f77ef418e3ef1d0c849c0cfd0b" target="_blank" title="">Empréstimo entre bibliotecas</a></li>
                           </ul>
                        </div>
                  </div>
               </div>
            </div>
            <div class="titulo-personalizado">
               <h3 class="titulo-padrao">Contato</h3>
            </div>
            <div class="conteudo">
               <div class="texto-contato">
                  <div class="tab-pane active" id="ancora-1">
                        <div class="texto-contato">
                           <ul>
                              <li>Telefone: +55 (61) 3030-9300/9301</li>
                              <li>
                                    <em>E-mail</em>: <a href="http://metallic.tse.jus.br:8401/portalje/tse/institucional/biblioteca/" title="mailto:biblioteca@tse.jus.br">biblioteca@tse.jus.br</a>
                              </li>
                           </ul>
                        </div>
                  </div>
               </div>
            </div>
            <div class="titulo-personalizado">
               <h3 class="titulo-padrao">Hora de funcionamento</h3>
            </div>
            <div class="conteudo">
               <div class="texto-funcionamento">
                  <ul>
                        <li>De segunda a sexta-feira nos seguintes horários:</li>
                        <li>Das&nbsp;8h às 20h&nbsp;para o público interno (servidores, colaboradores e estagiários)</li>
                        <li>Das&nbsp;12h às 19h&nbsp;para o público externo</li>
                  </ul>
               </div>
            </div>
      </div>
      <!-- Fim primeira coluna -->
      <div class="dois">
            <div class="titulo-personalizado">
               <h3 class="titulo-padrao">Biblioteca digital (DSPACE)</h3>
            </div>
            <div class="conteudo">
               <form action="@@processrequestbiblioteca" method="get" accept-charset="utf-8">
                  <label for="busca" class="sr-only">Pesquisar</label>
                  <div class="input-group input-group-md pesquisa">
                        <input id="servicoBiblioteca" name="servicoBiblioteca" value="dspace" type="hidden"><input id="busca" class="form-control" placeholder="Pesquisar..." type="search" autocomplete="off" name="busca">
                        <div class="input-group-btn"><button class="icone icone-pesquisa btn btn-primary" type="submit"><span class="hidden-xs">Buscar</span><span class="fa fa-search visible-xs" aria-hidden="true"></span></button></div>
                  </div>
               </form>
               <div class="pesquisa-avancada"><a href="http://www.tse.jus.br/o-tse/cultura-e-historia/biblioteca/biblioteca-digital" title="Busca avançada">Busca avançada »</a></div>
               <div class="texto-acervo">
                  <p></p>
                  <p>Acesse o inteiro teor de livros, revistas, artigos de revista, trabalhos acadêmicos, produção intelectual de ministros, desembargadores e servidores da Justiça Eleitoral, entre outros documentos relativos a eleições, matéria eleitoral
                        e partidária e assuntos correlatos.
                  </p>
               </div>
            </div>
            <div class="titulo-personalizado">
               <h3 class="titulo-padrao">Coleções</h3>
            </div>
            <div class="conteudo">
               <div class="link-banners colecoes">
                  <div class="item">
                        <a href="http://www.tse.jus.br/o-tse/cultura-e-historia/biblioteca/doutrina" title="Doutrina">
                           <img src="http://www.tse.jus.br/o-tse/cultura-e-historia/biblioteca/adm/banners-colecoes/doutrina/@@images/5c2e44fc-0207-4a96-9101-485d8c60a882.png" class="img-responsive">
                           <p>Doutrina</p>
                        </a>
                  </div>
                  <div class="item">
                        <a href="http://www.tse.jus.br/o-tse/cultura-e-historia/biblioteca/repositorio-institucional-da-justica-eleitoral" title="Repositório Institucional da JE">
                           <img src="http://www.tse.jus.br/o-tse/cultura-e-historia/biblioteca/adm/banners-colecoes/repositorio-institucional-da-je/@@images/f2fdc3d3-45ff-4b81-9a1f-6bdfd14bf911.png" class="img-responsive">
                           <p>Repositório Institucional da JE</p>
                        </a>
                  </div>
                  <div class="item">
                        <a href="http://www.tse.jus.br/o-tse/cultura-e-historia/biblioteca/museu-do-voto" title="Museu do Voto">
                           <img src="http://www.tse.jus.br/o-tse/cultura-e-historia/biblioteca/adm/banners-colecoes/museu-do-voto/@@images/fb1bc6d9-502a-4b7d-946f-b7cac54fb205.png" class="img-responsive">
                           <p>Museu do Voto</p>
                        </a>
                  </div>
                  <div class="item">
                        <a href="http://www.tse.jus.br/o-tse/cultura-e-historia/biblioteca/boletim-interno" title="Boletim Interno">
                           <img src="http://www.tse.jus.br/o-tse/cultura-e-historia/biblioteca/adm/banners-colecoes/boletim-interno/@@images/1ee2f2f6-f032-4b60-9672-f087fc0cb1d5.png" class="img-responsive">
                           <p>Boletim Interno</p>
                        </a>
                  </div>
               </div>
            </div>
            <div class="titulo-personalizado">
               <h3 class="titulo-padrao">Contato</h3>
            </div>
            <div class="conteudo">
               <div class="texto-contato">
                  <div class="tab-pane active" id="ancora-1">
                        <ul>
                           <li>Telefone: +55 (61) 3030-9320</li>
                           <li>
                              <em>E-mail</em>: <a href="http://metallic.tse.jus.br:8401/portalje/tse/institucional/biblioteca/" title="mailto:sebbd@tse.jus.br">sebbd@tse.jus.br</a>
                           </li>
                        </ul>
                  </div>
               </div>
            </div>
      </div>
   </div>
   <!-- Fim coluna 2 -->
   <div class="link-banners">
      <div class="item">
            <a href="http://www.tse.jus.br/o-tse/cultura-e-historia/biblioteca/perguntas-frequentes" title="Preguntas frequentes"><img src="http://www.tse.jus.br/o-tse/cultura-e-historia/biblioteca/adm/banners-rodape/preguntas-frequentes/@@images/91bacd75-a1d4-4d7a-b9a5-b7781a33e2ee.jpeg" class="img-responsive"></a>
      </div>
      <div class="item">
            <a href="http://www.tse.jus.br/o-tse/cultura-e-historia/biblioteca/reje/rede-de-bibliotecas-da-justica-eleitoral-reje" title="Reje"><img src="http://www.tse.jus.br/o-tse/cultura-e-historia/biblioteca/adm/banners-rodape/reje/@@images/9faebe5a-5222-4888-ae31-1a97770212ec.jpeg" class="img-responsive"></a>
      </div>
      <div class="item">
            <a href="http://www.tse.jus.br/o-tse/cultura-e-historia/catalogo-de-publicacoes/lista-do-catalogo-de-publicacoes" title="Bibliografias"><img src="http://www.tse.jus.br/o-tse/cultura-e-historia/biblioteca/adm/banners-rodape/bibliografias/@@images/696458bd-b7b6-45b0-a27b-dd4db968ab09.jpeg" class="img-responsive"></a>
      </div>
      <div class="item">
            <a href="http://www.tse.jus.br/o-tse/cultura-e-historia/biblioteca/tesauro-da-justica-eleitoral" title="Tesauro"><img src="http://www.tse.jus.br/o-tse/cultura-e-historia/biblioteca/adm/banners-rodape/tesauro/@@images/595d3132-572a-401e-9e20-ccfe6bebe35a.jpeg" class="img-responsive"></a>
      </div>
   </div>
</section>
<div class="modal fade modal-noticias" id="modal-noticias">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
               <h4 class="modal-title">Edição de texto</h4>
            </div>
            <div class="modal-body" style="padding-top:0px; height:700px"><iframe src="" frameborder="0" width="100%" height="100%"></iframe></div>
            <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button></div>
      </div>
   </div>
</div>
<script>
   $(document).ready(function() {
      $('[data-load-remote]').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var remote = $this.data('load-remote');
            if (remote) {
               $('#modal-noticias').modal('show').find('.modal-body').find('iframe').attr("src", remote);
            }
      });
   });
</script>
<?php include BASE_URL . '/includes/footer.inc.php'; ?>