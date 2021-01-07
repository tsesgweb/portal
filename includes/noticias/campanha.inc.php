

<?php
   $campanhas = [
     [
       'title' => 'Prazo Final',
       'img'   => 'https://placeimg.com/360/288/tech',
       'description' => 'Campanha destinada ao prazo final para regularizar, débitos com a Justiça Eleitoral.',    
     ],
     [
       'title' => 'Jovem eleitor',
       'img'   => 'https://placeimg.com/360/572/tech',
       'description' => 'Campanha Mesário Voluntário Eu quero ser um voluntário.',    
     ],
     [
       'title' => 'Mulheres na Política 2020',
       'img'   => 'https://placeimg.com/360/288/tech',
       'description' => 'Campanha mulheres na política 2020, mostrando a força da mulher!',    
     ],
     [
       'title' => 'Mesário Voluntário',
       'img'   => 'https://placeimg.com/360/288/people',
       'description' => 'Campanha Mesário Voluntário - Eu quero ser um voluntário.',    
     ],
     [
       'title' => 'Eleições 2020',
       'img'   => 'https://placeimg.com/360/288/people',
       'description' => 'Campanha Eleições 2020, seu voto tem poder!',    
     ],
   ];
   ?>
<section id="campaigns" class="campaigns">
   <div class="campaigns__conteudo">
      <div class="campaigns__linha">
         <div class="campaigns__detail">
            <h2>Campanha prazo final</h2>
            <div class="campaigns__spot">
               <img src="https://placeimg.com/403/395/tech" alt="">         
               <small class="muted-text">Filme 30x 16x6 - sem claquete | formato MP4</small>
            </div>
            <div class="campaigns__tab">
               <ul class="nav nav-tabs campaigns__tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#ancora-1" aria-controls="ancora-1" role="tab" data-toggle="tab" id="ui-tab-161" tabindex="0" aria-selected="true">
                     Filmes
                     </a>
                  </li>
                  <li role="presentation"><a href="#ancora-2" aria-controls="ancora-2" role="tab" data-toggle="tab" id="ui-tab-638" tabindex="-1" aria-selected="false">
                     Stops
                     </a>
                  </li>
                  <li role="presentation"><a href="#ancora-3" aria-controls="ancora-3" role="tab" data-toggle="tab" id="ui-tab-134" tabindex="-1" aria-selected="false">
                     Planos de mídia
                     </a>
                  </li>
                  <li role="presentation"><a href="#ancora-4" aria-controls="ancora-4" role="tab" data-toggle="tab" id="ui-tab-688" tabindex="-1" aria-selected="false">
                     Anúncios impressos
                     </a>
                  </li>
               </ul>
               <div class="tab-content sem-galeria">
                  <div role="tabpanel" class="tab-pane active" id="ancora-1" tabindex="0" aria-hidden="false" aria-labelledby="ui-tab-161">
                     <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-secondary"><i class="fa fa-exclamation" aria-hidden="true"></i> FILME H – 60”</li>
                        <li class="list-group-item"><i class="fa fa-audio-description" aria-hidden="true"></i> Audiodescrição - MP3 <button type="button" class="btn btn-link"><span class="badge bg-cinza-claro">baixar</span></button></li>
                        <li class="list-group-item list-group-item-secondary"><i class="fa fa-exclamation" aria-hidden="true"></i> ARQUIVOS MP4</li>
                        <li class="list-group-item"><i class="fa fa-play-circle" aria-hidden="true"></i> 1x1 - Com Legendas - Com Libras <button type="button" class="btn btn-link"><span class="badge bg-cinza-claro">baixar <i class="fa fa-download" aria-hidden="true"></i></span></button></li>
                        <li class="list-group-item"><i class="fa fa-play-circle" aria-hidden="true"></i> Filme 30s 16x9 - com claquete - MP4 <button type="button" class="btn btn-link"><span class="badge bg-cinza-claro">baixar <i class="fa fa-download" aria-hidden="true"></i></span></button></li>                        
                     </ul>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="ancora-2" tabindex="-1" aria-hidden="true" aria-labelledby="ui-tab-638">
                     <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fa fa-music" aria-hidden="true"></i> SPOT Voto Consciente 2020 - 60 <button type="button" class="btn btn-link"><span class="badge bg-cinza-claro">baixar <i class="fa fa-download" aria-hidden="true"></i></span></button></li>                        
                     </ul>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="ancora-3" tabindex="-1" aria-hidden="true" aria-labelledby="ui-tab-134">                    
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-secondary"><i class="fa fa-exclamation" aria-hidden="true"></i> Veiculação: de 5 de outubro a 29 de novembro de 2020</li>
                        <li class="list-group-item"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Plano de Mídia para TV <button type="button" class="btn btn-link"><span class="badge bg-cinza-claro">baixar <i class="fa fa-download" aria-hidden="true"></i></span></button></li>                        
                     </ul>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="ancora-4" tabindex="-1" aria-hidden="true" aria-labelledby="ui-tab-688">
                  </div>
               </div>
            </div>
         </div>
         <div class="campaigns__cards campaigns__cards-detail">
            <h5>Outras campanhas</h5>
            <div class="campaigns__card-columns">
               <?php include BASE_URL.'/includes/components/card-campanhas.inc.php'; ?>
            </div>
         </div>
      </div>
   </div>
</section>

