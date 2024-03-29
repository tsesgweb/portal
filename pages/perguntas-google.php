<?php
include 'config.inc.php';
$subnivel= 'Legislação Compilada';
$titulo= 'Perguntas frequentes sobre as eleições';
$legislacao= true;
$asideinterna= true;
$compartilhar= false;
$maisvisitados= false;
include BASE_URL . '/includes/header.inc.php';
?>
<style>
.leg-compilada .panel-title [aria-expanded="false"]:after {
  content: "\f107"
}

.leg-compilada .panel-title [aria-expanded="true"]:after {
  content: "\f106"
}

.leg-compilada h4 {
  border-bottom: 1px #CCC solid;
  padding-bottom: 10px;
  margin-top: 20px;
  font-size: 16px;
}
#texto-conteudo h3 {
font-size: 2rem;
margin: 45px 0 30px 0;
}
</style>
<section id="texto-conteudo" class="leg-compilada">
<br>
<p>Conheça as dúvidas mais frequentes dos eleitores sobre as eleições.</p>
<div itemscope​ itemtype​="http://schema.org/HowTo">

  <h3>Serviços eleitorais</h3>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-certidao" itemprop​="name">Como faço pra receber certidão de quitação eleitoral?
          </a>
        </h4>
      </div>
      <div id="collapse-certidao" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>Eu posso ajudar você a solicitar sua certidão de quitação eleitoral. Para isso, clique no botão abaixo e
quando solicitado digite o número do seu Título de Eleitor. Se preferir, acesse o Portal do TSE
(<a href="https://goo.gl/YLrGH6">https://goo.gl/YLrGH6</a>) e faça sua solicitação.
</p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-situacao" itemprop​="name">Qual é a minha situação eleitoral?</a>
        </h4>
      </div>
      <div id="collapse-situacao" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>A consulta à situação eleitoral pode ser feita por meio do nome do eleitor ou do número do título eleitoral.
            Clique aqui:
            <a href="https://goo.gl/QFSdQG">https://goo.gl/QFSdQG</a>
            e faça sua pesquisa.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-prazo" itemprop​="name">Perdi o prazo de regularização e preciso comprovar/regularizar minha situação eleitoral</a>
        </h4>
      </div>
      <div id="collapse-prazo" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p> A regularização, alteração de dados, atualização de cadastro e o alistamento eleitoral (1° via do título) só
            poderão ser realizados após as Eleições 2018 - novembro. Isso porque o cadastro eleitoral está fechado desde
            o dia 9 de maio de 2018.</p>
          <p>Se algum órgão ou organização estiver impedindo o prosseguimento de uma determinada solicitação sua, por conta
            de irregularidades no título eleitoral, você pode procurar um cartório ou posto do TRE na sua cidade, e solicitar
            uma Certidão Circunstanciada; esse documento possibilita o exercício de alguns direitos, mas não habilita
            o cidadão para votar.</p>
          <p>Essa certidão atesta que o eleitor procurou a Justiça Eleitoral para regularizar a sua situação, e não pôde
            porque o cadastro eleitoral encontra-se fechado. A aceitação ou não do documento, fica a critério de cada
            órgão ou organização.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-especial" itemprop​="name">Como faço para pedir atendimento especial no dia das eleições?</a>
        </h4>
      </div>
      <div id="collapse-especial" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>Compareça pessoalmente ao cartório eleitoral de sua inscrição. Se não for possível, deve entrar em contato
            com o cartório para orientações sobre como proceder. Na ocasião, devem ser informadas as necessidades que
            afetem o exercício do voto, tais como as relacionadas à locomoção e à visão, para que a seção seja preparada
            para receber o eleitor. Mas cuidado com o prazo! Para solicitar transferência para seção especial ou solicitar
            algum atendimento especial você precisa procurar o cartório até o dia 09 de maio (151 dias antes das eleições).
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-cartorio" itemprop​="name">Onde fica o cartório eleitoral mais próximo?</a>
        </h4>
      </div>
      <div id="collapse-cartorio" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            Pra encontrar o endereço do cartório eleitoral mais perto de você acesse
            <a href="http://goo.gl/A8k4pf">goo.gl/A8k4pf</a>. Você também pode consultar a relação de portais dos Tribunais Regionais Eleitorais (TREs),
            acessando
            <a href="http://goo.gl/M9HqNu">goo.gl/M9HqNu.</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-candidato" itemprop​="name">Sou candidato. O que é preciso pra ficar com a situação eleitoral regular?</a>
        </h4>
      </div>
      <div id="collapse-candidato" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            Para ser um candidato, além de estar com o voto em dia, ter justificado sua ausência e atendido todas as convocações da Justiça
            Eleitoral (pra trabalhar como mesário, por exemplo) ou ter pago as multas que você tomou, você precisa ter
            prestado as contas de campanha eleitoral.
          </p>
        </div>
      </div>
    </div>
  </div>

  <h3>Título de Eleitor</h3>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-titulo" itemprop​="name">Como faço pra tirar meu título de eleitor? E a segunda via?</a>
        </h4>
      </div>
      <div id="collapse-titulo" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            Ansioso para a primeira eleição? Para tirar o título você precisa procurar o cartório eleitoral mais próximo de onde mora
            levando, documento oficial com foto e comprovante de residência atualizado (últimos 3 meses). Agora, se você
            precisa de uma segunda via, pode utilizar a versão digital do seu título baixando o aplicativo "eTítulo"
            para seu celular (disponível para Android ou IOS) ou tirar uma nova via impressa, indo até o cartório eleitoral.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-titulo-cancelado" itemprop​="name">Como saber se meu título foi cancelado?</a>
        </h4>
      </div>
      <div id="collapse-titulo-cancelado" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            Você pode consultar sua situação eleitoral no site do TSE (
            <a href="http://www.tse.jus.br">www.tse.jus.br</a>). A consulta pode ser feita através do nome completo e data de nascimento ou número do
            título. Se sua situação não estiver regular, vá ao cartório eleitoral com documento oficial (com foto) e
            comprovante de residência. Se você tiver também título eleitoral e comprovantes de votação, de justificação
            ou de quitação de multa, melhor ainda. Leve também!
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-titulo-perdido" itemprop​="name">Perdi o meu título, posso votar?</a>
        </h4>
      </div>
      <div id="collapse-titulo-perdido" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            O eleitor que souber seu local de votação pode votar sem título de eleitor, levando apenas um documento de identificação
            original com foto. Quem não souber o seu local de votação pode consultar no Portal do TSE, pelo app e-Título
            ou nos assistentes virtuais no Twitter e Facebook.
          </p>
        </div>
      </div>
    </div>
  </div>

  <h3>Mesário</h3>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-mesario" itemprop​="name">Como faço pra trabalhar como mesário?</a>
        </h4>
      </div>
      <div id="collapse-mesario" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            Que bom que você decidiu unir-se aos mais de dois milhões de mesários! Se você é eleitor e tem idade mínima de 18 anos pode
            ser mesário. Para ter mais informações acesse o site do TRE do seu estado ou o site do TSE em
            <a
              href="http://www.tse.jus.br/eleitor/mesario/programa-mesario-voluntario">https://goo.gl/Wzgajc</a>.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-nao-mesario" itemprop​="name">Fui convocado, mas não quero ser mesário. O que fazer?
          </a>
        </h4>
      </div>
      <div id="collapse-nao-mesario" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            O eleitor convocado que não quiser ser mesário pode se dirigir ao cartório eleitoral até 5 dias após a convocação e alegar
            alguma justifica que o impeça de exercer a função. O pedido será analisado por um juiz, que pode negá-lo
            ou acatá-lo. Se após esse prazo surgir um motivo que impeça o eleitor de atuar como mesário, ele também pode
            se dirigir ao cartório eleitoral e pedir dispensa. Se o juiz não aceitar o pedido, o eleitor é obrigado a
            trabalhar como mesário nos dias de votações. Se faltar, deve justificar a ausência em até 30 dias. Se não
            apresentar justificativa, passa a dever multa igual a 50% do valor do salário mínimo.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-beneficios-mesarios" itemprop​="name">Quais os benefícios de ser mesário?</a>
        </h4>
      </div>
      <div id="collapse-beneficios-mesarios" class="panel-collapse
        collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            Além de prestar um serviço à democracia e ao país, há benefícios, apesar de o serviço de mesário não ser remunerado. Eleitores
            que o desempenham recebem algumas compensações pelo serviço prestado. No dia da eleição, eles ganham auxílio-alimentação
            da Justiça Eleitoral, no valor de R$ 30,00. Também têm direito a dois dias de folga a cada dia trabalhado
            como mesário, sem perder salário. Os dias de treinamento também contam como dia trabalhado. Mesários podem
            ter vantagem em caso de empate em concurso público (se o edital prever esse critério). Por fim, se o mesário
            está na universidade, pode validar o serviço como horas complementares.
          </p>
        </div>
      </div>
    </div>
  </div>

  <h3>Dia da votação</h3>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-local-votacao" itemprop​="name">Qual é o meu local de votação?</a>
        </h4>
      </div>
      <div id="collapse-local-votacao" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            A consulta ao local de votação pode ser feita por meio do nome do eleitor ou do número do título eleitoral. Por meio da opção
            Consulta por nome é possível verificar o número do título. Você pode consultar pelo Portal do TSE (www.tse.jus.br),
            pelo
            <em>link</em>
            :
            <a href="https://goo.gl/ZvYsre">https://goo.gl/ZvYsre</a>, pelo app e-Título ou por meio dos assistentes virtuais no Twitter e Facebook do
            TSE.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-documentos-votacao" itemprop​="name">Quais documentos devo/preciso levar pra votar?</a>
        </h4>
      </div>
      <div id="collapse-documentos-votacao" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            No dia da eleição, leve um documento com foto que comprove sua identidade, podendo ser carteira de identidade, passaporte
            ou algum documento oficial com foto com mesmo valor legal, até mesmo carteira de categoria profissional reconhecida
            por lei; certificado de reservista; carteira de trabalho; ou carteira nacional de habilitação.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-horario-votacao" itemprop​="name">Qual é o horário da votação?</a>
        </h4>
      </div>
      <div id="collapse-horario-votacao" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            O primeiro turno das Eleições 2018 ocorrerá no dia 7 de outubro e o segundo turno no dia 28 de outubro. Os eleitores podem
            votar entre 8 horas e 17 horas. O segundo turno só acontecerá para os cargos em que a eleição não for decidida
            no primeiro turno.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-comprovante-votacao" itemprop​="name">Como consigo o comprovante de votação?</a>
        </h4>
      </div>
      <div id="collapse-comprovante-votacao" class="panel-collapse
        collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            O comprovante de votação é o documento que prova que o eleitor votou no turno e na eleição indicada no documento. Depois
            de votar o eleitor recebe o comprovante de um mesário da sua seção eleitoral. O comprovante só é entregue
            no dia da votação, não é possível conseguir um comprovante pela internet. Também não existe uma segunda via
            do comprovante de votação. Se o eleitor precisar provar que está em dia com as obrigações eleitorais pode
            pedir uma certidão de quitação em um cartório eleitoral.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-multa-nao-votar" itemprop​="name">Como pagar a multa por não votar?</a>
        </h4>
      </div>
      <div id="collapse-multa-nao-votar" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            Quem não votou e não justificou sua ausência em até 60 dias após a eleição pode pagar a multa em qualquer agência bancária,
            nos correios ou nas casas lotéricas. Antes de pagar é necessário solicitar a Guia de Recolhimento da União
            (GRU) no site do TSE. A multa pode variar de R$ 1,05 até R$ 3,51 por cada turno ausente.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-biometria-votar" itemprop​="name">Quem não fez a biometria pode votar?</a>
        </h4>
      </div>
      <div id="collapse-biometria-votar" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            Depende. O eleitor que mora em uma cidade onde a biometria é obrigatória e não fizer o recadastramento corre o risco de ter
            o seu título cancelado e de não conseguir votar nas eleições. Se a realização da biometria ainda não estiver
            finalizada no seu estado, é possível votar sem ter feito o recadastramento.

          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-voto-transito" itemprop​="name">Como é o voto em trânsito?</a>
        </h4>
      </div>
      <div id="collapse-voto-transito" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            O voto em trânsito é uma oportunidade dada ao eleitor para votar fora do seu domicílio eleitoral, em uma seção especial para
            isso. Para ter acesso a esse direito nas eleições de 2018 o eleitor deve se cadastrar em qualquer cartório
            eleitoral entre os dias 17 de julho e 23 de agosto. Basta apresentar um documento de identificação oficial
            com foto e indicar o local onde pretende votar. Para poder votar em trânsito é preciso estar com a situação
            eleitoral regular. É importante lembrar

          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-voto-exterior" itemprop​="name">Como votar no exterior/fora do Brasil?</a>
        </h4>
      </div>
      <div id="collapse-voto-exterior" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            Cidadãos brasileiros que moram e têm inscrição eleitoral no exterior só precisam votar nas eleições presidenciais. Em 2018
            o eleitor que está inscrito em uma zona eleitoral no exterior deve votar para presidente da República. Caso
            o eleitor more fora do país e o seu domicílio eleitoral seja em território brasileiro, ele é obrigado a votar
            em todas as eleições. Se não fizer isso deverá justificar a ausência do voto. O TSE recomenda aos eleitores
            que residem no exterior solicitar a transferência do título de acordo com o seu local atual de residência.
            Mais informações podem ser obtidas no link :
            <a href="https://goo.gl/7buWJZ">https://goo.gl/7buWJZ </a>

          </p>
        </div>
      </div>
    </div>
  </div>

  <h3>Voto</h3>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-voto-obrigatorio" itemprop​="name">Por que o voto é obrigatório?</a>
        </h4>
      </div>
      <div id="collapse-voto-obrigatorio" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            Se você completou 16 anos já pode votar, mas seu voto não é obrigatório. No Brasil, o voto é obrigatório para brasileiros
            alfabetizados, maiores de 18 anos e menores de 70 anos.

          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-justificar-exterior" itemprop​="name">Como faço pra justificar meu voto no exterior/em outro país?</a>
        </h4>
      </div>
      <div id="collapse-justificar-exterior" class="panel-collapse
        collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            Se você é eleitor inscrito no Brasil, continua obrigado a votar aqui. Se não conseguir votar, precisa justificar sua ausência
            em todas as eleições, lembrando que cada turno é uma eleição diferente!
          </p>
          <p>O Requerimento de Justificativa Eleitoral (RJE), que você acessa no link goo.gl/f4bAJZ, tem que estar acompanhado
            de cópia de documento oficial brasileiro de identidade e de comprovante dos motivos alegados para justificar
            a ausência (cópia do passaporte, cartão de embarque, matrícula em instituição de ensino, contrato de trabalho,
            etc).
          </p>
          <p>Também vale lembrar que é possível votar para presidente e vice-presidente mesmo estando no exterior, bastando
            para isso solicitar transferência para seção eleitoral específica. Para mais informações, acesse
            <a href="http://goo.gl/X5WUjA">http://goo.gl/X5WUjA</a>.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-valor-multa" itemprop​="name">Qual é o valor da multa para quem não votar e não fizer a justificativa?</a>
        </h4>
      </div>
      <div id="collapse-valor-multa" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            Caso tenha deixado de votar e também não realizou a justificativa no prazo estipulado (60 dias, em caso de doença ou motivo
            de força maior. Se não pôde votar por estar em outro país, pode justificar em até 30 dias depois do retorno),
            o eleitor recebe uma multa de R$ 3,51 por turno perdido.</p>
          <p>O eleitor que não pagar a multa fica em débito com a Justiça Eleitoral e não poderá solicitar a Certidão de
            Quitação Eleitoral.</p>
          <p>Para verificar se você tem algum débito e emitir a guia para pagamento, utilize o serviço disponível no portal
            do TSE:
            <a href="https://goo.gl/7nXyqS">https://goo.gl/7nXyqS</a>.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-voto-justificativa" itemprop​="name">Não votei na eleição passada e não justifiquei. O que devo fazer?</a>
        </h4>
      </div>
      <div id="collapse-voto-justificativa" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            Quem não votou e não apresentou justificativa no prazo de até 60 dias após pleito deve procurar o cartório eleitoral mais
            próximo de sua residência levando:
            <ul>
              <li>Documento oficial com foto,</li>
              <li>Título de eleitor (se tiver),</li>
              <li>Requerimento de Justificativa Eleitoral (mais informações e preenchimento online disponível em <a herf="https://goo.gl/Lpwef8">https://goo.gl/Lpwef8 </a>
              </li>
              <li>Comprovante de recolhimento de multa (sistema para verificação de débitos e emissão de guia de recolhimento
                disponível em <a herf="https://goo.gl/9FTgGc"> https://goo.gl/9FTgGc</a></li>
            </ul>
            <p>O eleitor que não votar nem justificar ausência e/ou pagar multas correspondentes por três pleitos terá o
              título cancelado.</p>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-justificar-voto" itemprop​="name">Como faço pra justificar meu voto?</a>
        </h4>
      </div>
      <div id="collapse-justificar-voto" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            Para justificar seu voto você precisa preencher o formulário Requerimento de Justificativa Eleitoral (RJE), disponível nos
            cartórios eleitorais, nos postos de atendimento ao eleitor, na página do TSE, nas páginas dos tribunais regionais
            eleitorais (TREs) e, no dia da eleição, nos locais de votação ou de justificativa. Mais informações:
            <a
              href="https://goo.gl/f4bAJZ">https://goo.gl/f4bAJZ</a>.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-voto-branco-nulo" itemprop​="name">Qual a diferença entre voto em branco e voto nulo?
          </a>
        </h4>
      </div>
      <div id="collapse-voto-branco-nulo" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            São muitos os mitos sobre os votos brancos e nulos, mas é importante lembrar que nenhum deles é utilizado pela Justiça Eleitoral
            na hora de calcular o candidato eleito. A diferença está apenas na forma como o eleitor decide registrar
            seu voto. O voto branco é registrado quando o eleitor pressiona o botão "branco" na urna eletrônica. Já o
            voto nulo é registrado quando o eleitor digita um número que não pertence a nenhum candidato ou partido e
            aperta o botão "confirma".
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-voto-nulo-anula" itemprop​="name">Voto nulo anula a eleição?</a>
        </h4>
      </div>
      <div id="collapse-voto-nulo-anula" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>
            Cuidado com esse boato! Apenas os votos válidos são considerados na contagem final. Se a maioria dos eleitores votar nulo,
            todos esses votos serão descartados e ganhará o candidato com o maior número de votos válidos. </p>
          <p> Mesmo se mais de 50% dos eleitores votarem nulo, a eleição não é anulada. A confusão ocorre devido a uma interpretação
            equivocada de um artigo do Código Eleitoral. A “nulidade” a que a legislação se refere diz respeito a votos
            tornados nulos por decisão judicial apenas.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-preso-vota" itemprop​="name">Quem está preso pode votar?</a>
        </h4>
      </div>
      <div id="collapse-preso-vota" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>Os presos que tiverem condenação criminal transitada em julgado (sem hipótese de recurso) não podem votar.
            No entanto, os presos provisórios que estão esperando uma decisão judicial mantêm o direito ao voto.</p>
          <p>As pessoas que perderam os direitos políticos não podem votar.</p>
        </div>
      </div>
    </div>
  </div>

  <h3>Urna Eletrônica</h3>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-preso-vota" itemprop​="name">Por que outros países não usam urna eletrônica?</a>
        </h4>
      </div>
      <div id="collapse-preso-vota" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>Cada país é independente para decidir qual sistema de votação é melhor pra sua realidade legal, política, territorial,
            social, etc. No Brasil, o voto é obrigatório pra maiores de 18 e menores de 70 anos, o que significa um número
            bem grande de eleitores, espalhados num país continental. O sistema eletrônico de votação é rápido e seguro
            pra cumprir esse trabalho da Justiça Eleitoral e passa por melhorias a cada ano, pra ficar cada vez mais
            veloz e protegido.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-mostrar-voto" itemprop​="name">A urna pode mostrar em quem o eleitor votou?</a>
        </h4>
      </div>
      <div id="collapse-mostrar-voto" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>A urna eletrônica utiliza criptografia (linguagem codificada) e não está conectada à internet. Além disso,
            ela somente grava a indicação de que o eleitor já votou. Com o embaralhamento interno dos dados e outros
            mecanismos de segurança, não há nenhuma possibilidade de se verificar em quais candidatos um eleitor votou.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-mostrar-voto" itemprop​="name">As urnas são fabricadas na Venezuela?</a>
        </h4>
      </div>
      <div id="collapse-mostrar-voto" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>Não, isso é lenda!</p>
          <p> Dizem por aí que as urnas usadas no Brasil são da Smartmatic, fabricadas na Venezuela, mas isso é tudo bobagem.</p>
          <p> Tanto as urnas (hardware) como todos os sistemas (softwares) são desenvolvidos pelo próprio TSE.</p>
          <p> As máquinas (urnas) são montadas por empresas contratadas pra executar o projeto, mas com total fiscalização
            de servidores da Justiça Eleitoral.</p>
          <p> Dá uma olhada nesse vídeo e ajude a acabar com esse mito eleitoral!
            <a href="https://youtu.be/0coPnvkwsUc ">https://youtu.be/0coPnvkwsUc </a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <h3>Biometria</h3>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-cadastro-biometrico" itemprop​="name">Como faço pra realizar meu cadastro biométrico?</a>
        </h4>
      </div>
      <div id="collapse-cadastro-biometrico" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>No recadastramento biométrico, a gente faz a inclusão de impressão e assinatura digitais, inclusive da sua
            foto, pra serem usados na votação e impedir que outras pessoas votem por você.</p>
          <p>Pra fazer o cadastro, vá a um cartório eleitoral com documento de identificação oficial (com foto), comprovante
            de residência atual e título de eleitor. Mas atenção! Tem cartórios que só atendem com agendamento prévio.</p>
          <p>Se tiver dúvidas, é só pedir informação pro TRE da sua região, consulte a lista de TREs pelo link:
            <a href="http://goo.gl/M9HqNu">goo.gl/M9HqNu</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-titulo-biometria" itemprop​="name">O meu título de eleitor vai ser cancelado se eu não fizer o recadastramento biométrico?</a>
        </h4>
      </div>
      <div id="collapse-titulo-biometria" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>Sim, o cadastramento biométrico é obrigatório. Caso você não procure a Justiça Eleitoral pra refazer seu cadastramento
            biométrico, seu título será cancelado.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-biometria-novo" itemprop​="name">Quem já fez a biometria precisa fazer de novo?</a>
        </h4>
      </div>
      <div id="collapse-biometria-novo" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>Fique tranquilo! Se você já fez o cadastro biométrico, não precisa fazê-lo novamente. Para confirmar, verifique
            se no seu título de eleitor está escrito "Identificação Biométrica".</p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-cadastro-biometrico" itemprop​="name">Quais documentos são necessários pra fazer o cadastro biométrico?</a>
        </h4>
      </div>
      <div id="collapse-cadastro-biometrico" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>Os documentos que você deve levar ao cartório eleitoral para fazer o seu cadastro biométrico são: documento
            de identificação oficial (com foto), comprovante de residência atual e título de eleitor. Mas fique atento,
            pois alguns cartórios só atendem com agendamento prévio!</p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-digital-reconhecida" itemprop​="name">Se a minha digital não for reconhecida na biometria, como poderei votar?</a>
        </h4>
      </div>
      <div id="collapse-digital-reconhecida" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>Após algumas tentativas, caso a digital de nenhum dos dedos seja reconhecida, o mesário realizará a identificação
            do eleitor por meio de um documento oficial com foto e pode fazer algumas perguntas para a confirmação da
            identidade.</p>
          <p>Os documentos podem ser: carteira de identidade, passaporte ou algum documento oficial com foto com mesmo valor
            legal, até mesmo carteira de categoria profissional reconhecida por lei; certificado de reservista; carteira
            de trabalho; ou carteira nacional de habilitação. Não valem certidões de nascimento ou de casamento como
            prova de identidade na hora de votar.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-multa-biometria" itemprop​="name">É preciso pagar multa se não fizer a biometria?</a>
        </h4>
      </div>
      <div id="collapse-multa-biometria" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>Cuidado! A mensagem sobre o pagamento de multa para quem não fizer biometria é falsa.</p>
          <p>E ainda, a legislação eleitoral não prevê, em nenhum momento, o cancelamento de outros documentos - a não ser
            o título de eleitor - no caso de o eleitor ficar três eleições consecutivas sem votar ou sem justificar ou
            não comparecer ao cadastramento biométrico obrigatório, que serve como uma atualização do cadastro de eleitores.</p>
          <p>Ainda assim, caso o eleitor não compareça às eleições e não justifique a sua ausência, ele apenas estará sujeito
            a uma multa em torno de R$ 3,50. Após comparecer ao cartório eleitoral mais próximo e regularizar a situação,
            o título volta a ficar ativo imediatamente.</p>
          <p>Saiba se a sua cidade está passando pelo recadastramento biométrico! Confira a lista dos municípios no seu
            estado em que a revisão é obrigatória:
            <a href="https://goo.gl/DTyT1g">https://goo.gl/DTyT1g </a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-biometria-cidade" itemprop​="name">A biometria é obrigatória na minha cidade?</a>
        </h4>
      </div>
      <div id="collapse-biometria-cidade" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>Para saber sobre a biometria na sua cidade acesse
            <a href="https://goo.gl/M5BXv4">https://goo.gl/M5BXv4</a>, selecione o seu estado e o seu município. As situações são:</p>
          <p>- Ordinário: revisão ordinária não é obrigatória, mas o serviço está disponível para o eleitor que desejar.
            Aproveite para fazer seu cadastro e fuja das filas e correria de última hora!</p>
          <p>- Em revisão: significa que é obrigatório o cadastramento biométrico e os prazos podem ser obtidos em
            <a href="https://goo.gl/DTyT1g">https://goo.gl/DTyT1g</a>. Procure fazer logo o seu cadastramento e evite filas no final do prazo.</p>
          <p>- Revisado: nesse caso o município já concluiu o cadastramento biométrico de seus eleitores (se você não fez
            ainda e é eleitor nesse local, deve procurar o cartório para regularizar sua situação).</p>
          <p>- Sem biometria: ainda não começou o recadastramento biométrico.</p>
        </div>
      </div>
    </div>
  </div>

  <h3>Informações eleitorais</h3>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-acompanhar-processo" itemprop​="name">Como posso acompanhar um processo?</a>
        </h4>
      </div>
      <div id="collapse-acompanhar-processo" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>Você pode acompanhar os processos pelo link
            <a href="http://goo.gl/agTD9X">goo.gl/agTD9X</a>
          </p>
        </div>
      </div>
    </div>
  </div>


  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-pauta-sessao" itemprop​="name">Como acesso a pauta da sessão de julgamento?</a>
        </h4>
      </div>
      <div id="collapse-pauta-sessao" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>Para consultar uma pauta de julgamento você pode acessar o site do TSE, ir para a opção "Área Jurídica" e clicar
            em "Pautas de julgamento" ou, simplesmente, acessar
            <a href="http://goo.gl/c1p8YZ">goo.gl/c1p8YZ</a>. Mas não se</p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-estatisticas-eleitorais" itemprop​="name">Onde posso achar os dados e estatísticas eleitorais?</a>
        </h4>
      </div>
      <div id="collapse-estatisticas-eleitorais" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>Você pode consultar dados estatísticos sobre eleições anteriores, números do eleitorado, candidaturas, resultados
            e prestações de contas no link:
            <a href="http://goo.gl/eDyoGR">goo.gl/eDyoGR</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <h3>E-Título</h3>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-e-titulo" itemprop​="name">E-Título</a>
        </h4>
      </div>
      <div id="collapse-e-titulo" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>Olá, o e-Título é um aplicativo móvel para obtenção da via digital do título de eleitor, e permitirá o acesso
            rápido e fácil às suas informações junto à Justiça Eleitoral, tais como: titulo de eleitor totalmente digital,
            informações sobre sua situação eleitoral e o seu local de votação. É importante lembrar: se você ainda não
            fez a biometria, seu e-Título precisa ser usado junto com um documento oficial com foto. É a Justiça Eleitoral
            inovando e modernizando. Como sempre! Baixe agora o e-Título, disponível para IOS e Android. Clique nos botões
            abaixo:</p>
          <p>
            <a target="_blank" href="https://itunes.apple.com/br/app/e-t%C3%ADtulo/id1320338088?mt=8">Download para iOS</a>
          </p>
          <p>
            <a target="_blank" href="https://play.google.com/store/apps/details?id=br.jus.tse.eleitoral.etitulo&hl=pt_BR">Download para Android</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <h3>Outras questões</h3>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-candidatos-eleitos" itemprop​="name">Por que o TSE não fiscaliza os candidatos eleitos?</a>
        </h4>
      </div>
      <div id="collapse-candidatos-eleitos" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>Justiça Eleitoral é responsável por organizar as eleições e garantir a lisura do pleito.</p>
          <p>Quem fiscaliza a atuação dos eleitos e denuncia eventuais irregularidades cometidas são os órgãos de controle,
            como Tribunal de Contas da União (TCU) e dos Estados (TCE) e Municípios (TCM) e o Ministério Público.</p>
          <p>Tudo que se refere às eleições pode ser noticiado à Procuradoria Geral Eleitoral (PGE), responsável por investigar
            e, se for o caso, apresentar denúncias. Importante lembrar que os tribunais não agem de oficio, ou seja,
            por iniciativa própria e precisam, antes, serem provocados pelo Ministério Público, que investiga, para depois
            denunciar à Justiça, que irá julgar os processos.</p>
          <p>Para apresentar denúncias à PGE, acesse:
            <a href="http://www.mpf.mp.br/pge/denuncie">http://www.mpf.mp.br/pge/denuncie</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-crime-eleitoral" itemprop​="name">Como posso denunciar um crime eleitoral?</a>
        </h4>
      </div>
      <div id="collapse-crime-eleitoral" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>Ao ficar sabendo de qualquer crime ou irregularidade eleitoral, o cidadão deve denunciar o fato ao Ministério
            Público Eleitoral de sua cidade ou região.</p>
          <p>Isso porque é por meio deste órgão que a denúncia é protocolada e, caso existam indícios suficientes caracterizando
            a conduta criminosa, pode ser encaminhada para o Tribunal Regional Eleitoral para possível abertura de processo
            e tomada das medidas cabíveis (aplicação de multa, impugnação de candidatura, entre outras punições previstas
            em lei).</p>
          <p>Para facilitar a vida do cidadão, serviços para denúncias de desrespeito à lei eleitoral estão disponíveis
            pela internet estão disponíveis nos sites das Procuradorias e dos Tribunais Regionais Eleitorais, acesse
            a lista pelo link:
            <a href="https://goo.gl/Xi7HRw">https://goo.gl/Xi7HRw</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group" itemprop​="step" itemscope​ itemtype​="http://schema.org/HowToSection">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 itemprop="name" class="panel-title">
          <a data-toggle="collapse" href="#collapse-auditar-eleicao" itemprop​="name">É possível auditar uma eleição?</a>
        </h4>
      </div>
      <div id="collapse-auditar-eleicao" class="panel-collapse collapse">
        <div class="panel-body" itemprop​="itemListElement">
          <p>Sim! Qualquer cidadão brasileiro pode solicitar uma auditoria do voto eletrônico, devendo apenas apresentar
            pedido fundamentado, com indicação dos locais a serem auditados. É possível realizar auditoria do processo
            eleitoral sob diversos aspectos:</p>

          <ul>
            <li>verificação do resumo digital (hash);</li>
            <li>reimpressão do boletim de urna;</li>
            <li>comparação entre o boletim impresso e o boletim recebido pelo sistema de totalização;</li>
            <li>verificação de assinatura digital;</li>
            <li>comparação dos relatórios e das atas das seções eleitorais com os arquivos digitais da urna;</li>
            <li>auditoria do código-fonte lacrado e armazenado no cofre do TSE;</li>
            <li>recontagem dos votos por meio do Registro Digital do Voto (RDV);</li>
            <li>comparação da recontagem do RDV com o boletim de urna (formato PDF).</li>
          </ul>

        </div>
      </div>
    </div>
  </div>


</div>

</section>
<?php include BASE_URL . '/includes/footer.inc.php';?>