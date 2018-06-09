<?php
  // Importando o cabeçalho
  require_once("component/header.php");
?>

  <!--
  @autor Caique M. Oliveira
  @data 25/03/2018
  @descricao Página informativa sobre o Parceiro e o Cliente

  @autor Allan Alves
  @data 02/04/2018
  @Edição da pagina
  -->

  <!-- Container principal do conteúdo sobre o Cliente -->
  <div class="container_principal_conteudo_cliente_cp margem_t_80">
    <!-- Container centralizado do conteúdo sobre o Cliente -->
    <div class="container_conteudo_centro_cliente_cp centro_lr bg_cinza sombra_preta_20">

      <!-- Foto ilustrando a explicação sobre o Clinete -->
      <div class="img_explicativo_cliente_parceiro_cp float_left sombra_preta_5">
        <img src="pictures/cliente_parceiro/client.jpeg" alt="Junte-se a nós. Torne um de nossos parceiros!">
      </div>

      <!-- Conatiner do texto sobre a explicacao do Clinete -->
      <div class="txt_explicativo_cliente_parceiro_c conteudo justificado preenche_l_20 preenche_t_25 espacamento_linha_25 txt_preto">
        Quem gosta do mundo automotivo sabe as dificuldades de encontrar um lugar confiável

bom e barato para cuidar do seu carro, e os donos das famosas relíquias como opala Comodoro e Maverick e até mesmo os famosos fuscas sabem que é muito difícil substituir as peças dos valiosos tesouros.

Imagine se existisse um lugar onde você pode encontrar os mais diversos serviços, desde higienização a revisão. Imagine também que nesse mesmo lugar você encontraria aas mais variadas revendedoras de peças, que atendem desde de motos e triciclos até os potentes muscle car, se sem deixar de lado os carros de passeio. Bom senhoras e senhores esse lugar agora existe, lhes apresento a autofast.

Um lugar que reúne pessoas de todos os tipos desde os aficionados por velocidade ate os motorista mais típicos lá você encontra as mais diversas prestadoras de serviço e pode escolher aquela que melhor se adequa a você e a seu bolso, além de poder tirar duvidas  no nosso fórum com outros  donos de veículos e conhecer gente nova que possui os mesmos gostos automotivos que você.
      </div>

      <!-- Área de cadastro do Cliente -->
      <div class="area_cadastrese float_left preenche_r_30 align_right link">
        <span id="cadastrarCliente">Cadastrar-se como cliente</span>
      </div>

    </div>
  </div>

  <!-- Divisor de conteúdo -->
  <div class="divisor centro_lr"></div>
  <!-- ******************* -->

  <!-- Container principal do conteúdo sobre o Parceiro -->
  <div class="container_principal_conteudo_cliente_cp">
    <!-- Container centralizado do conteúdo sobre o Parcieor -->
    <div class="container_conteudo_centro_cliente_cp centro_lr bg_cinza sombra_preta_20">

      <!-- Conatiner do texto sobre a explicacao do Parceiro -->
      <div class="txt_explicativo_cliente_parceiro_cp conteudo justificado  espacamento_linha_25 preenche_l_20 preenche_t_25 txt_preto ">
        "Se você é bom em algo não faça de graça". Porem não basta ser o melhor tem que mostrar que é, e a autofast é o lugar perfeito para isso. Na autofast você será mostrado ao lado dos melhores com a confiança que a autofast possui você elevara o seu negócio a outro patamar com nossa credibilidade você alcançara desde usuários convencionais até usuários comerciais podendo atingir empresas e frotas sem deixa de lado carros de passeio e outros. Quer subir de nível com a gente? Inscreva-se.  
      </div>

      <!-- Foto ilustrando a explicação sobre o Parceiro -->
      <div class="img_explicativo_cliente_parceiro_cp float_right sombra_preta_5">
        <img src="pictures/cliente_parceiro/partners.jpg" alt="Junte-se a nós. Torne um de nossos parceiros!">
      </div>


      <!-- Área de cadastro do Parceiro -->
      <div class="area_cadastrese float_right align_left preenche_l_20 preenche_b_30 link">
        <span id="cadastrarParceiro">Cadastrar-se como parceiro</span>
      </div>

    </div>
  </div>

  <script>
    $('#cadastrarCliente').click(function(){
      modalCadastroCliente();
    })

    $('#cadastrarParceiro').click(function(){
      modalCadastroParceiro();
    })
  </script>

<?php
  // Importando o rodapé
  require_once("component/footer.php");
?>
