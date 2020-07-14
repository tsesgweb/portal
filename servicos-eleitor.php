<?php
   include __DIR__ . '/inc/config.inc.php';
   $titulo         = 'Situação Eleitoral';
   $asideinterna   = true;
   $tags           = true;
   $recaptcha      = true;
   $datepicker     = true;
   include __DIR__ . '/inc/header.inc.php';
   ?>
<section id="texto-conteudo">
   <form id="form-consulta-situacao-eleitoral">
      <fieldset>
         <legend>
            Situação eleitoral - permite a consulta à situação eleitoral
         </legend>
         <div class="form-group">
            <label for="SE_NomeTituloEleitor">Nome ou título de eleitor</label>
            <input onkeyup="checkNumber(this.value);" type="text" class="form-control" id="SE_NomeTituloEleitor" placeholder="Nome ou título de eleitor" name="nomeOuTitulo">
         </div>
         <div class="form-group campo-data">
            <label for="SE_DataNascimento">Data de nascimento</label>
            <button type="button" class="btn btn-link" data-toggle="popover" data-placement="right" data-content="<strong>Formato:</strong> DD/MM/AAAA">
            <i class="fa fa-question-circle-o"></i>
            </button>
            <div class="input-group">
               <input type="text" class="abrir-datepicker form-control" id="SE_DataNascimento" placeholder="Data de nascimento">               
            </div>
         </div>
         <div class="form-group">
            <div class="center-block">
               <div id="captcha-consulta-situacao"></div>
            </div>
            <p class="help-block">Esta informação ajuda o Tribunal Superior Eleitoral a evitar a consulta por programas automáticos, que dificultam a utilização deste aplicativo pelos demais usuários.</p>
         </div>
         <button type="submit" class="btn btn-primary">Consultar</button>
      </fieldset>
   </form>
   <hr>
   <form id="form-consultar-local-votacao">
      <fieldset>
         <legend>
            Título e local de votação - permite consulta a local de votação
         </legend>
         <div class="form-group">
            <label for="LV_NomeTituloEleitor">Nome ou título de eleitor</label>
            <input onkeyup="checkNumber(this.value);" type="text" class="form-control" id="LV_NomeTituloEleitor" placeholder="Nome ou título de eleitor">
         </div>
         <div class="form-group campo-data">
            <label for="LV_DataNascimento">Data de nascimento</label>
            <button type="button" class="btn btn-link" data-toggle="popover" data-placement="right" data-content="<strong>Formato:</strong> DD/MM/AAAA">
            <i class="fa fa-question-circle-o"></i>
            </button>
            <div class="input-group">
               <input type="text" class="abrir-datepicker form-control" id="LV_DataNascimento" placeholder="Data de nascimento">              
            </div>
         </div>
         <div class="form-group">
            <label for="LV_NomeMae">Nome da mãe</label>
            <div class="input-group">
               <input type="text" class="form-control" id="LV_NomeMae" placeholder="Nome da mãe">
               <span class="input-group-addon">
               <input type="checkbox" aria-label="Não consta" id="LV_NaoConstaMae">
               <label for="LV_NaoConstaMae" class="control-label">Não consta</label>
               </span>
            </div>
         </div>
         <div class="form-group">
            <label for="LV_NomePai">Nome do pai</label>
            <div class="input-group">
               <input type="text" class="form-control" id="LV_NomePai" placeholder="Nome do pai">
               <span class="input-group-addon">
               <input type="checkbox" aria-label="Não consta" id="LV_NaoConstapai">
               <label for="LV_NaoConstapai" class="control-label" style="position: relative; bottom: 0.1em">Não consta</label>
               </span>
            </div>
         </div>
         <div class="form-group">
            <div class="center-block">
               <div id="captcha-consulta-local"></div>
            </div>
            <p class="help-block">Esta informação ajuda o Tribunal Superior Eleitoral a evitar a consulta por programas automáticos, que dificultam a utilização deste aplicativo pelos demais usuários.</p>
         </div>
         <button type="submit" class="btn btn-primary">Consultar</button>
      </fieldset>
   </form>
   <hr>
   <ul class="nav nav-tabs abas-personalizadas" role="tablist">
      <li role="presentation" class="active">
         <a href="#ancora-1" aria-controls="ancora-1" role="tab" data-toggle="tab">Emissão de certidão</a>
      </li>
      <li role="presentation">
         <a href="#ancora-2" aria-controls="ancora-2" role="tab" data-toggle="tab">Validação de certidão</a>
      </li>
   </ul>
   <div class="tab-content sem-galeria">
      <div role="tabpanel" class="tab-pane active" id="ancora-1">
         <div class="conteudo-form-aba">
            <form id="form-consulta-quitacao-eleitoral">
               <fieldset>
                  <legend>Emissão de certidão</legend>
                  <div class="form-group">
                     <label for="QE_NomeEleitor">Nome do eleitor</label>
                     <input type="text" class="form-control" id="QE_NomeEleitor" name="nomeEleitor" placeholder="Nome ou título de eleitor" required>
                  </div>
                  <div class="form-group">
                     <label for="QE_NumeroTitulo">Número do título</label>
                     <input type="text" class="form-control" id="QE_NumeroTitulo" placeholder="Número do título">
                  </div>
                  <div class="form-group">
                     <label for="QE_DataNascimento">Data de nascimento</label>
                     <button type="button" class="btn btn-link" data-toggle="popover" data-placement="right" data-content="<strong>Formato:</strong> DD/MM/AAAA">
                     <i class="fa fa-question-circle-o"></i>
                     </button>
                     <div class="input-group">
                        <input type="text" class="abrir-datepicker form-control" id="QE_DataNascimento" placeholder="Data de nascimento" data-date-format="DD-MM-YYYY">                        
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="QE_NomeMae">Nome da mãe</label>
                     <div class="input-group">
                        <input type="text" class="form-control" id="QE_NomeMae" placeholder="Nome da mãe">
                        <span class="input-group-addon">
                        <input type="checkbox" aria-label="..." id="QE_NaoConstaMae">
                        <label for="QE_NaoConstaMae" class="control-label" style="position: relative; bottom: 0.1em">Não consta</label>
                        </span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="QE_NomePai">Nome da pai</label>
                     <div class="input-group">
                        <input type="text" class="form-control" id="QE_NomePai" placeholder="Nome da pai">
                        <span class="input-group-addon">
                        <input type="checkbox" aria-label="Não consta" id="LV_NaoConstaPai">
                        <label for="LV_NaoConstaPai" class="control-label" style="position: relative; bottom: 0.1em">Não consta</label>
                        </span>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="center-block">
                        <div id="captcha-consulta-quitacao"></div>
                     </div>
                     <p class="help-block">Esta informação ajuda o Tribunal Superior Eleitoral a evitar a consulta por programas automáticos, que dificultam a utilização deste aplicativo pelos demais usuários.</p>
                  </div>
                  <button type="submit" class="btn btn-primary">Emitir</button>
               </fieldset>
            </form>
         </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="ancora-2">
         <div class="conteudo-form-aba">
            <form id="form-validar-quitacao-eleitoral">
               <fieldset>
                  <legend>Validação de certidão</legend>
                  <div class="form-group">
                     <label for="VQE_NumeroTitulo">Nome do título</label>
                     <input type="text" class="form-control" id="VQE_NumeroTitulo" placeholder="Nome ou título de eleitor">
                  </div>
                  <div class="form-group">
                     <label for="VQE_DataEmissao">Data de emissão da certidão</label>
                     <button type="button" class="btn btn-link" data-toggle="popover" data-placement="right" data-content="Ex.: Certidão emitida às 11:45 de <strong>01/01/2018</strong>">
                     <i class="fa fa-question-circle-o"></i>
                     </button>
                     <div class="input-group">
                        <input type="text" class="abrir-datepicker form-control" id="VQE_DataEmissao" placeholder="Data de emissão da certidão">                       
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="VQE_HoraEmissao">Horário de emissão da certidão</label>
                     <button type="button" class="btn btn-link" data-toggle="popover" data-placement="right" data-content="Ex.: Certidão emitida às <strong>11:45</strong> de 01/01/2018">
                     <i class="fa fa-question-circle-o"></i>
                     </button>
                     <div class="input-group">
                        <input type="text" class="abrir-timepicker form-control" id="VQE_HoraEmissao" placeholder="Horario de emissão da certidão">                        
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="VQE_CodigoCertidao">Código da certidão</label>
                     <button type="button" class="btn btn-link" data-toggle="popover" data-placement="right" data-content="<strong>Atenção:</strong>   O código verificador diferencia letras dos números.">
                     <i class="fa fa-question-circle-o"></i>
                     </button>
                     <input type="text" class="form-control" id="VQE_CodigoCertidao" placeholder="Data de emissão da certidão">
                  </div>
                  <div class="form-group">
                     <div class="center-block">
                        <div id="captcha-valida-quitacao"></div>
                     </div>
                     <p class="help-block">Esta informação ajuda o Tribunal Superior Eleitoral a evitar a consulta por programas automáticos, que dificultam a utilização deste aplicativo pelos demais usuários.</p>
                  </div>
                  <button type="submit" class="btn btn-primary">Validar</button>
               </fieldset>
            </form>
         </div>
      </div>
   </div>
</section>
<?php include __DIR__ . '/inc/footer.inc.php';?>