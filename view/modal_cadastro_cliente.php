<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/modal_cadastro_cliente.css">
  </head>
  <body>
    <div class="container_principal_cp bg_cinza">
      <!-- TITULO -->
      <div class="container_titulo">
        <div class="item_titulo txt_sombra_1x1x1_preto float_right txt_preto titulo preenche_10 bg_branco align_center">
          Cadastro Clientes
        </div>
      </div>
      <!-- IMAGENS -->
      <div class="container_imagens centro_lr">
        <div class="item_imagens float_left">

        </div>
        <div class="item_imagens float_right">

        </div>
      </div>
      <!-- FORM -->
      <form class="form_cadastro_cliente float_left bg_branco" action="modal_cadastro_cliente.php" method="post">
        <div class="container_infs">

          <!-- INPUT NOME -->
          <div class="segura_input">
            <input class="input_text txt_preto margem_t_5" placeholder="Nome" type="text" name="txt_nome" value="">
          </div>

          <!-- TITULO DATA -->
          <div class="titulo_form">
            <div class="item_titulo_form titulo">
              Data de Nascimento
            </div>
          </div>

          <!-- INPUT CALENDÁRIO -->
          <div class="segura_input float_left">
            <input class="data_nasc" type="date" name="dt_nasc" value="">
          </div>

          <!-- INPUT CPF -->
          <div class="segura_input float_left">
            <input class="input_text txt_preto margem_t_5" placeholder="Cpf" type="text" name="txt_cpf" value="">
          </div>

          <!-- INPUT EMAIL -->
          <div class="segura_input float_left">
            <input class="input_text txt_preto margem_t_5" placeholder="Email Address" type="text" name="txt_email" value="">
          </div>

          <!-- INPUT CELULAR -->
          <div class="segura_input float_left">
            <input class="input_text txt_preto margem_t_5" placeholder="Celular" type="text" name="txt_celular" value="">
          </div>

          <!-- INPUT TELEFONE -->
          <div class="segura_input float_left">
            <input class="input_text txt_preto margem_t_5" placeholder="Telefone" type="text" name="txt_telefone" value="">
          </div>

          <!-- INPUT RADIO -->
          <div class="segura_input margem_t_5 float_left">
            <input type="radio" name="sexo" value="M"> Masculino
            <input type="radio" name="sexo" value="F"> Feminino
          </div>

          <!-- TITULO ENDEREÇO -->
          <div class="titulo_form">
            <div class="item_titulo_form titulo float_left">
              Endereço
            </div>
          </div>

          <!-- INPUT RUA -->
          <div class="segura_input float_left">
            <input class="input_text txt_preto margem_t_5" placeholder="Rua" type="text" name="txt_rua" value="">
          </div>

          <!-- INPUT NUMERO -->
          <div class="segura_input float_left">
            <input class="input_text txt_preto margem_t_5" placeholder="Número" type="text" name="txt_numero" value="">
          </div>

          <!-- INPUT CIDADE -->
          <div class="segura_input float_left">
            <input class="input_text txt_preto margem_t_5" placeholder="Cidade" type="text" name="txt_cidade" value="">
          </div>

          <!-- INPUT CEP -->
          <div class="segura_input float_left">
            <input class="input_text txt_preto margem_t_5" placeholder="Cep" type="text" name="txt_cep" value="">
          </div>

          <!-- INPUT BAIRRO -->
          <div class="segura_input float_left">
            <input class="input_text txt_preto margem_t_5" placeholder="Bairro" type="text" name="txt_bairro" value="">
          </div>

          <!-- INPUT COMPLEMENTO -->
          <div class="segura_input float_left">
            <input class="input_text txt_preto margem_t_5" placeholder="Complemento" type="text" name="txt_complemento" value="">
          </div>

          <!-- TITULO LOGIN -->
          <div class="titulo_form">
            <div class="item_titulo_form titulo float_left">
              Login
            </div>
          </div>

          <!-- INPUT USER -->
          <div class="segura_input float_left">
            <input class="input_text txt_preto margem_t_5" placeholder="Usuário" type="text" name="txt_use" value="">
          </div>

          <!-- INPUT SENHA -->
          <div class="segura_input float_left">
            <input class="input_text txt_preto margem_t_5" placeholder="Senha" type="text" name="txt_senha" value="">
          </div>
        </div>
      </form>
      <!-- FORM CADASTRO DE VEICULO -->
      <form class="form_cadastro_veiculo float_right bg_branco" action="modal_cadastro_cliente.php" method="post">

        <!-- TITULO VEICULO -->
        <div class="titulo_form">
          <div class="item_titulo_form align_center bg_verde titulo float_left">
            Veículo
          </div>
        </div>

        <!-- INPUT ANO DE FABRICACAO -->
        <div class="segura_input float_left">
          <input class="input_text txt_preto margem_t_5" placeholder="Ano De Fabricação" type="text" name="txt_ano_fabri" value="">
        </div>

        <!-- INPUT PLACA -->
        <div class="segura_input float_left">
          <input class="input_text txt_preto margem_t_5" placeholder="Placa" type="text" name="txt_placa" value="">
        </div>

        <!-- INPUT QUANTIDADE DE PORTAS -->
        <div class="segura_input float_left">
          <input class="input_text txt_preto margem_t_5" placeholder="Qtd de Portas" type="text" name="txt_portas" value="">
        </div>

        <!-- INPUT KILOMETRAGEM -->
        <div class="segura_input float_left">
          <input class="input_text txt_preto margem_t_5" placeholder="Kilometragem" type="text" name="txt_km" value="">
        </div>

        <!-- INPUT MODELO -->
        <div class="segura_input float_left">
          <input class="input_text txt_preto margem_t_5" placeholder="Modelo" type="text" name="txt_modelo" value="">
        </div>

        <!-- INPUT FABRICANTE -->
        <div class="segura_input float_left">
          <input class="input_text txt_preto margem_t_5" placeholder="Fabricante" type="text" name="txt_fabri" value="">
        </div>
        
      </form>
    </div>
  </body>
</html>
