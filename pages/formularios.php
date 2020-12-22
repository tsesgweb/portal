<?php
include 'config.inc.php';
$subnivel = 'galeria';
$titulo = 'Pré-Inscrição';
$asideinterna = true;
include BASE_URL . '/includes/header.inc.php';
?>
<div id="inserir-css-formulario">
  <div id="formulario">
      <div id="conteudo">
          <div id="textoConteudo"></div>
      </div>
      <form method="POST" name="formulario" id="formulario" enctype="multipart/form-data" action="https://www.justicaeleitoral.jus.br/tse/eleicoes/urna-eletronica/seguranca-da-urna/pre-inscricao">
          <div class="row">
              <div class="col-sm-12">
                  <div class="form-group">
                      <div class="field">
                          <label for="nome">
                              Nome
                              
                                  <span class="fieldRequired">(Obrigatório)</span></label>
                          <div class="formHelp"></div>
                          <div class="input-group"><input type="text" class="form-control" id="nome" name="nome"></div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <div class="field">
                          <label for="cpf">
                              CPF
                              
                                  <span class="fieldRequired">(Obrigatório)</span></label>
                          <div class="formHelp"></div>
                          <div class="input-group"><input type="text" class="form-control" id="cpf" name="cpf"></div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="form-group">
                      <div class="field">
                          <label for="rg">
                              RG
                              
                                  <span class="fieldRequired">(Obrigatório)</span></label>
                          <div class="formHelp"></div>
                          <div class="input-group"><input type="text" class="form-control" id="rg" name="rg"></div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="form-group">
                      <div class="field">
                          <label for="orgao-expedidor">
                              Órgão expedidor
                              
                                  <span class="fieldRequired">(Obrigatório)</span></label>
                          <div class="formHelp"></div>
                          <div class="input-group"><input type="text" class="form-control" id="orgao-expedidor" name="orgao-expedidor"></div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="form-group">
                      <div class="field">
                          <label for="titulo-eleitoral">
                              Título eleitoral
                              
                                  <span class="fieldRequired">(Obrigatório)</span></label>
                          <div class="formHelp"></div>
                          <div class="input-group"><input type="text" class="form-control" id="titulo-eleitoral" name="titulo-eleitoral"></div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-7">
                  <div class="form-group">
                      <div class="field">
                          <label for="nacionalidade">
                              Nacionalidade
                              
                                  <span class="fieldRequired">(Obrigatório)</span></label>
                          <div class="formHelp"></div>
                          <div class="input-group"><input type="text" class="form-control" id="nacionalidade" name="nacionalidade"></div>
                      </div>
                  </div>
              </div>
              <div class="row"></div>
              <div class="col-sm-2">
                  <div class="form-group">
                      <div class="field">
                          <label for="data-de-nascimento">
                              Data de Nascimento
                              
                                  <span class="fieldRequired">(Obrigatório)</span></label>
                          <div class="formHelp"></div>
                          <div class="form-group campo-data">
                              <div class="input-group date" id="datepicker">
                                  <div role="wrapper" class="gj-datepicker gj-datepicker-md gj-unselectable"><input type="text" size="15" data-date-format="dd/mm/yyyy" class="abrir-datepicker form-control gj-textbox-md" style="width:100%;" id="data-de-nascimento" name="data-de-nascimento" data-type="datepicker" data-guid="12c25224-660d-0acc-89ff-af2999830ace"
                                          data-datepicker="true" role="input"><i class="gj-icon" role="right-icon">event</i></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <div class="field">
                          <label for="anexar-copia-de-documento-de-identificacao-com-os-dados-de-nascimento-e-nacionalidade">
                              Anexar cópia de documento de identificação com os dados de nascimento e nacionalidade
                              
                                  <span class="fieldRequired">(Obrigatório)</span></label>
                          <div class="formHelp"></div>
                          <input type="file" class="form-control-file" id="anexar-copia-de-documento-de-identificacao-com-os-dados-de-nascimento-e-nacionalidade" name="anexar-copia-de-documento-de-identificacao-com-os-dados-de-nascimento-e-nacionalidade">
                      </div>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <div class="field">
                          <label for="telefone">
                              Telefone
                              
                                  <span class="fieldRequired">(Obrigatório)</span></label>
                          <div class="formHelp"></div>
                          <div class="input-group"><input type="text" class="form-control" id="telefone" name="telefone"></div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <div class="field">
                          <label for="celular">
                              Celular
                              
                                  <span class="fieldRequired">(Obrigatório)</span></label>
                          <div class="formHelp"></div>
                          <div class="input-group"><input type="text" class="form-control" id="celular" name="celular"></div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <div class="field">
                          <label for="e-mail">
                              E-mail
                              
                                  <span class="fieldRequired">(Obrigatório)</span></label>
                          <div class="formHelp"></div>
                          <div class="input-group"><input type="text" class="form-control" id="e-mail" name="e-mail"></div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <div class="field">
                          <label for="representa-alguma-instituicao">
                              Representa alguma instituição?
                              
                                  <span class="fieldRequired">(Obrigatório)</span></label>
                          <div class="formHelp"></div>
                          <div class="form-check form-check-inline">
                              <input type="radio" class="form-check-input" name="representa-alguma-instituicao" value="Sim" id="sim-representa-alguma-instituicao"><label class="form-check-label" for="sim-representa-alguma-instituicao">Sim</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input type="radio" class="form-check-input" name="representa-alguma-instituicao" value="Não" id="nao-representa-alguma-instituicao"><label class="form-check-label" for="nao-representa-alguma-instituicao">Não</label>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <div class="field">
                          <label for="caso-a-resposta-anterior-seja-sim-anexe-a-declaracao-emitida-pela-instituicao">
                              Caso represente alguma instituição, anexe a declaração emitida pela instituição
                              
                          </label>
                          <div class="formHelp"></div>
                          <input type="file" class="form-control-file" id="caso-a-resposta-anterior-seja-sim-anexe-a-declaracao-emitida-pela-instituicao" name="caso-a-resposta-anterior-seja-sim-anexe-a-declaracao-emitida-pela-instituicao">
                      </div>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <div class="field">
                          <label for="caso-represente-alguma-instituicao-informe-o-nome">
                              Caso represente alguma instituição, informe o nome
                              
                          </label>
                          <div class="formHelp"></div>
                          <div class="input-group"><input type="text" class="form-control" id="caso-represente-alguma-instituicao-informe-o-nome" name="caso-represente-alguma-instituicao-informe-o-nome"></div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <div class="field">
                          <label for="caso-represente-alguma-instituicao-anexe-o-cnpj">
                              Caso represente alguma instituição, informe o CNPJ
                              
                          </label>
                          <div class="formHelp"></div>
                          <div class="input-group"><input type="text" class="form-control" id="caso-represente-alguma-instituicao-anexe-o-cnpj" name="caso-represente-alguma-instituicao-anexe-o-cnpj"></div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <div class="field">
                          <label for="por-qual-meio-tomou-conhecimento-do-teste">
                              Por qual meio tomou conhecimento do teste?
                              
                                  <span class="fieldRequired">(Obrigatório)</span></label>
                          <div class="formHelp"></div>
                          <div class="input-group"><input type="text" class="form-control" id="por-qual-meio-tomou-conhecimento-do-teste" name="por-qual-meio-tomou-conhecimento-do-teste"></div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <div class="field">
                          <label for="grau-de-escolaridade">
                              Grau de escolaridade
                              
                                  <span class="fieldRequired">(Obrigatório)</span></label>
                          <div class="formHelp"></div>
                          <div class="form-check form-check-inline">
                              <input type="radio" class="form-check-input" name="grau-de-escolaridade" value="Doutor" id="doutor-grau-de-escolaridade"><label class="form-check-label" for="doutor-grau-de-escolaridade">Doutor</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input type="radio" class="form-check-input" name="grau-de-escolaridade" value="Mestre" id="mestre-grau-de-escolaridade"><label class="form-check-label" for="mestre-grau-de-escolaridade">Mestre</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input type="radio" class="form-check-input" name="grau-de-escolaridade" value="Especialista" id="especialista-grau-de-escolaridade"><label class="form-check-label" for="especialista-grau-de-escolaridade">Especialista</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input type="radio" class="form-check-input" name="grau-de-escolaridade" value="Graduado" id="graduado-grau-de-escolaridade"><label class="form-check-label" for="graduado-grau-de-escolaridade">Graduado</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input type="radio" class="form-check-input" name="grau-de-escolaridade" value="Outro" id="outro-grau-de-escolaridade"><label class="form-check-label" for="outro-grau-de-escolaridade">Outro</label>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <div class="field">
                          <label for="anexar-documento-que-comprove-o-grau-de-escolaridade">
                              Anexar documento que comprove o grau de escolaridade
                              
                          </label>
                          <div class="formHelp"></div>
                          <input type="file" class="form-control-file" id="anexar-documento-que-comprove-o-grau-de-escolaridade" name="anexar-documento-que-comprove-o-grau-de-escolaridade">
                      </div>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <div class="field">
                          <label for="caso-possua-formacao-em-tecnologia-da-informacao-ou-area-correlata-informe-o-nome-da-area">
                              Caso possua formação em Tecnologia da Informação ou área correlata, informe o nome da área
                              
                          </label>
                          <div class="formHelp"></div>
                          <div class="input-group"><input type="text" class="form-control" id="caso-possua-formacao-em-tecnologia-da-informacao-ou-area-correlata-informe-o-nome-da-area" name="caso-possua-formacao-em-tecnologia-da-informacao-ou-area-correlata-informe-o-nome-da-area"></div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <div class="field">
                          <label for="necessita-de-passagens-e-diarias-custeadas-pelo-tse-pois-reside-fora-do-distrito-federal-ou-do-entorno-caso-afirmatiovo-anexe-o-comprovante-de-residencia">
                              Necessita de passagens e diárias custeadas pelo TSE, pois reside fora do Distrito Federal ou do entorno? Caso afirmativo, anexe o comprovante de residência
                              
                          </label>
                          <div class="formHelp"></div>
                          <input type="file" class="form-control-file" id="necessita-de-passagens-e-diarias-custeadas-pelo-tse-pois-reside-fora-do-distrito-federal-ou-do-entorno-caso-afirmatiovo-anexe-o-comprovante-de-residencia" name="necessita-de-passagens-e-diarias-custeadas-pelo-tse-pois-reside-fora-do-distrito-federal-ou-do-entorno-caso-afirmatiovo-anexe-o-comprovante-de-residencia">
                      </div>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <div class="field">
                          <label for="anexe-seu-curriculo">
                              Anexe seu curriculo
                              
                                  <span class="fieldRequired">(Obrigatório)</span></label>
                          <div class="formHelp"></div>
                          <input type="file" class="form-control-file" id="anexe-seu-curriculo" name="anexe-seu-curriculo">
                      </div>
                  </div>
              </div>
          </div>
          <br><input type="submit" name="form.enviar" value="Enviar" style="padding:5px;">
      </form>
      <div id="textoConteudo"></div>
  </div>
</div>
<?php include BASE_URL . '/includes/footer.inc.php';?>