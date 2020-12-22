<?php
include 'config.inc.php';
$subnivel       = 'Conteúdo janela';
$titulo         = 'Modelo de agenda';
$asideagenda    = true;
$tags           = false;
$gestor           = false;
include BASE_URL.'/includes/header.inc.php';
?>
<div class="agenda-je">
  <div class="agenda__linha">
    <figure class="text-center">
        <img src="http://webhomologa.tse.jus.br/imagem/agenda.png" class="agenda img-responsive"
          alt="Logo principal da EJE">
        <figcaption class="descricao-img-principal"></figcaption>
    </figure>
    <div class="arcodeon aba-vertical-com-seta">
        <p>
        <h2>Eventos - 13 de março de 2019</h2>
        </p>
        <div id="accordion">
          <!-- Agendamento de compromisso #1 Horario de início e Término -->
          <div class="panel-group">
              <div class="panel panel-default materia">
                <div class="panel-heading">
                    <h4 class="panel-title titulo-com">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">#1                                </a>
                    </h4>
                    <span class="agenda-mais-detalhes">
                    <span><i class="fa fa-calendar" aria-hidden="true"></i>13/03/2019</span> <span> <i
                      class="fa fa-clock-o" aria-hidden="true"></i> 10:00 am - 11:45 am </span>
                    <span class="detalhes"> <i class="fa fa-map-marker" aria-hidden="true"></i> STF,
                    Salão Branco </span>
                    </span>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
                      <div class="detalhes">
                          <h5><strong>Detalhes: </strong></h5>
                          <div class="details__linha">Nunc ipsum orci, laoreet mollis ex eu, ultricies
                            vulputate magna. Nulla cursus velit a nisl dignissim efficitur. In dui nulla,
                            suscipit ut justo et, hendrerit fringilla leo. In pretium, nulla non rutrum
                            cursus, arcu
                            dui pulvinar massa, vel maximus ante justo nec nisl. Fusce dignissim porttitor
                            turpis, a vehicula magna pharetra et. Curabitur porttitor vel mi id rutrum. Nunc
                            aliquam elementum lacus eu dictum. Mauris scelerisque
                            ante vel sem eleifend, nec dictum orci porttitor. Nulla accumsan nec nisi
                            aliquet viverra.
                          </div>
                          <h5>
                            <Strong>Particpantes: </Strong>
                          </h5>
                          <div class="crew__linha">Sr. Paulo Guedes - Ministro da Economia General <br>
                            Floriano Peixoto - Ministro da Secretaria-Geral da Presidência da República<br>
                            Sra. Marcia Amorim - Secretária Especial de Modernização do Estado da
                            Secretaria-Geral
                            da Presidência da República<br> Sr. Paulo Uebel - Secretário Especial de
                            Desburocratização, Gestão e Governo Digital
                            <br> Sr. Guilherme Afif Domingos - Assessor Especial do Ministro da Economia<br>
                            Sr. José Levi - Procurador-Geral da Fazenda Nacional<br> Sr. Gleisson Rubin -
                            Secretário Especial Adjunto de Desburocratização, Gestão
                            e Governo Digital<br> Sr. Luís Felipe Salin Monteiro - Secretário de Governo
                            Digital;
                          </div>
                          <h5><strong>Local:</strong></h5>
                          <div class="place__linha"> STF, Salão Branco;</div>
                          <div class="calendar__linha">
                            <h5>
                                <a class="fa fa-calendar" href="" id="outlookcalendar"> <span
                                  class="detalhes">Adicionar ao
                                meu calendário</span></a>
                            </h5>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
          </div>
          <!-- Agendamento de compromisso #2 Horario de início e Término -->
          <div class="panel-group">
              <div class="panel panel-default materia">
                <div class="panel-heading">
                    <h4 class="panel-title titulo-com">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Compromisso com
                      período</a>
                    </h4>
                    <span class="agenda-mais-detalhes">
                    <span>
                    <i class="fa fa-calendar" aria-hidden="true"></i>13/03/2019 - 25/03/2019
                    </span>
                    <span>
                    <i class="fa fa-clock-o" aria-hidden="true"></i> 10:00 am - 11:45 am
                    </span>
                    <span class="detalhes">
                    <i class="fa fa-map-marker" aria-hidden="true"></i> STF,
                    Salão Branco
                    </span>
                    </span>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                      <div class="detalhes">
                          <h5><strong>Detalhes: </strong></h5>
                          <div class="details__linha">Nunc ipsum orci, laoreet mollis ex eu, ultricies
                            vulputate magna. Nulla cursus velit a nisl dignissim efficitur. In dui nulla,
                            suscipit ut justo et, hendrerit fringilla leo. In pretium, nulla non rutrum
                            cursus, arcu
                            dui pulvinar massa, vel maximus ante justo nec nisl. Fusce dignissim porttitor
                            turpis, a vehicula magna pharetra et. Curabitur porttitor vel mi id rutrum. Nunc
                            aliquam elementum lacus eu dictum. Mauris scelerisque
                            ante vel sem eleifend, nec dictum orci porttitor. Nulla accumsan nec nisi
                            aliquet viverra.
                          </div>
                          <h5>
                            <Strong>Particpantes: </Strong>
                          </h5>
                          <div class="crew__linha">Sr. Paulo Guedes - Ministro da Economia General <br>
                            Floriano Peixoto - Ministro da Secretaria-Geral da Presidência da República<br>
                            Sra. Marcia Amorim - Secretária Especial de Modernização do Estado da
                            Secretaria-Geral
                            da Presidência da República<br> Sr. Paulo Uebel - Secretário Especial de
                            Desburocratização, Gestão e Governo Digital
                            <br> Sr. Guilherme Afif Domingos - Assessor Especial do Ministro da Economia<br>
                            Sr. José Levi - Procurador-Geral da Fazenda Nacional<br> Sr. Gleisson Rubin -
                            Secretário Especial Adjunto de Desburocratização, Gestão
                            e Governo Digital<br> Sr. Luís Felipe Salin Monteiro - Secretário de Governo
                            Digital;
                          </div>
                          <h5><strong>Local:</strong></h5>
                          <div class="place__linha"> STF, Salão Branco;</div>
                          <div class="calendar__linha">
                            <h5>
                                <a class="fa fa-calendar" href="" id="outlookcalendar"> <span
                                  class="detalhes">Adicionar ao meu
                                calendário</span></a>
                            </h5>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
          </div>
          <!-- Agendamento de compromisso #3 Cancelado -->
          <div class="panel-group">
              <div class="panel panel-default materia">
                <div class="panel-heading">
                    <h4 class="panel-title titulo-com">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"> Lorem
                      ipsum dolor sit amet,
                      consectetur adipiscing elit</a>
                    </h4>
                    <span class="agenda-mais-detalhes"> 
                    <span><i class="fa fa-calendar" aria-hidden="true"></i>13/03/2019 - 16/03/2019</span>                                
                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> 14:30 pm - 22:00 pm </span> <span><i
                      class="fa fa-map-marker" aria-hidden="true"></i> STF, Salão Branco
                    </span> </span>
                    <br /><span class="cancelado"><i class="fa fa-ban" aria-hidden="true"></i>
                    CANCELADO</span>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                      <div class="detalhes">
                          <h5><strong>Detalhes: </strong></h5>
                          <div class="details__linha">Nunc ipsum orci, laoreet mollis ex eu, ultricies
                            vulputate magna. Nulla
                            cursus velit a nisl dignissim efficitur. In dui nulla, suscipit ut justo
                            et, hendrerit fringilla
                            leo. In pretium, nulla non rutrum cursus, arcu
                            dui pulvinar massa, vel maximus ante justo nec nisl. Fusce dignissim
                            porttitor turpis, a
                            vehicula magna pharetra et. Curabitur porttitor vel mi id rutrum. Nunc
                            aliquam elementum lacus
                            eu dictum. Mauris scelerisque
                            ante vel sem eleifend, nec dictum orci porttitor. Nulla accumsan nec
                            nisi aliquet viverra.
                          </div>
                          <h5> <Strong>Particpantes: </Strong> </h5>
                          <div class="crew__linha">Sr. Paulo Guedes - Ministro da Economia General
                            <br>
                            Floriano Peixoto - Ministro da Secretaria-Geral da Presidência da
                            República<br>
                            Sra. Marcia Amorim - Secretária Especial de Modernização do Estado da
                            Secretaria-Geral
                            da Presidência da República<br>
                            Sr. Paulo Uebel - Secretário Especial de Desburocratização, Gestão e
                            Governo Digital <br>
                            Sr. Guilherme Afif Domingos - Assessor Especial do Ministro da
                            Economia<br>
                            Sr. José Levi - Procurador-Geral da Fazenda Nacional<br>
                            Sr. Gleisson Rubin - Secretário Especial Adjunto de Desburocratização,
                            Gestão
                            e Governo Digital<br>
                            Sr. Luís Felipe Salin Monteiro - Secretário de Governo Digital;
                          </div>
                          <h5><strong>Local:</strong></h5>
                          <div class="place__linha"> STF, Salão Branco; </div>
                          <div class="calendar__linha">
                            <h5> <a class="fa fa-calendar" href="" id="outlookcalendar"> <span
                                class="detalhes">Adicionar ao
                                meu
                                calendário</span></a> 
                            </h5>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
          </div>
          <div class="panel-group">
              <div class="panel panel-default materia">
                <div class="panel-heading">
                    <h4 class="panel-title titulo-com"> 
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Vivamus ligula nislasd faasdwe asdfa  qaera asdf asd asdfasdfasdfasdf easdaf asd qwerqwer </a>
                    </h4>
                    <span class="agenda-mais-detalhes"> <span><i class="fa fa-calendar" aria-hidden="true"></i>13/03/2019</span> <span> <i class="fa fa-clock-o" aria-hidden="true"></i> 10:00 am - 18:00 pm </span> <span class="local"> <i class="fa fa-map-marker" aria-hidden="true"></i> STF, Salão Branco </span> </span>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">
                      <div class="imagem__linha"> <img class="img-responsive img-custom" src="http://www.tse.jus.br/imagens/fotos/87-coisas-que-voce-nao-sabe-sobre-a-justica-eleitoral-13-03-2019/@@images/13a55821-7ff9-4aa8-b172-c08064a9492f.jpeg" alt="87 Coisas que você não sabe sobre a Justiça Eleitoral"></div>
                      <div class="detalhes">
                          <h5><strong>Detalhes: </strong></h5>
                          <div class="details__linha">Nunc ipsum orci, laoreet mollis ex eu, ultricies vulputate magna. Nulla cursus velit a nisl dignissim efficitur. In dui nulla, suscipit ut justo et, hendrerit fringilla leo. In pretium, nulla non rutrum cursus, arcu
                            dui pulvinar massa, vel maximus ante justo nec nisl. Fusce dignissim porttitor turpis, a vehicula magna pharetra et. Curabitur porttitor vel mi id rutrum. Nunc aliquam elementum lacus eu dictum. Mauris scelerisque
                            ante vel sem eleifend, nec dictum orci porttitor. Nulla accumsan nec nisi aliquet viverra.
                          </div>
                          <h5><strong>Local:</strong></h5>
                          <div class="place__linha"> STF, Salão Branco; </div>
                          <div class="calendar__linha">
                            <h5> <a class="fa fa-calendar" href="" id="outlookcalendar"> <span class="detalhes">Adicionar ao meu
                                calendário</span></a> 
                            </h5>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>
  <div class="agenda__linha">
    <div class="evento_proximo">
        <p>Eventos próximos</p>
        <p>
          <span class="evento-anterior"><a href="#"><< 08/05/2019</a></span>
          &nbsp;
          <span class="evento-proximo"><a href="#">16/05/2019 >></a></span>
        </p>
    </div>
  </div>
</div>
<?php include BASE_URL . '/includes/footer.inc.php';?>

