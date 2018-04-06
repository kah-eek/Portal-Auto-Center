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
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. enim pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>

      <!-- Área de cadastro do Cliente -->
      <div class="area_cadastrese float_left preenche_r_30 align_right link">
        <a id="cadastrarCliente" href="#">Cadastrar-se como cliente</a>
      </div>

    </div>
  </div>

  <!-- Divisor de conteúdo -->
  <div class="divisor "></div>
  <!-- ******************* -->

  <!-- Container principal do conteúdo sobre o Parceiro -->
  <div class="container_principal_conteudo_cliente_cp">
    <!-- Container centralizado do conteúdo sobre o Parcieor -->
    <div class="container_conteudo_centro_cliente_cp centro_lr bg_cinza sombra_preta_20">

      <!-- Conatiner do texto sobre a explicacao do Parceiro -->
      <div class="txt_explicativo_cliente_parceiro_cp conteudo justificado  espacamento_linha_25 preenche_l_20 preenche_t_25 txt_preto ">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. enim pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>

      <!-- Foto ilustrando a explicação sobre o Parceiro -->
      <div class="img_explicativo_cliente_parceiro_cp float_right sombra_preta_5">
        <img src="pictures/cliente_parceiro/partners.jpg" alt="Junte-se a nós. Torne um de nossos parceiros!">
      </div>


      <!-- Área de cadastro do Parceiro -->
      <div class="area_cadastrese float_right align_left preenche_l_20 preenche_b_30 link">
        <a id="cadastrarParceiro" href="#">Cadastrar-se como parceiro</a>
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
