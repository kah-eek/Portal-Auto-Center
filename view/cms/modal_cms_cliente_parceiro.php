<?php
  // Imports
  require_once('../../controller/cliente_class.php');
  require_once('../../controller/Parceiro_class.php');
  require_once('../../controller/MySql_class.php');
  require_once('../../model/ClienteDAO.php');
  require_once('../../model/ParceiroDAO.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/parceiro/cms_modal_cliente_parceiro.css">
    <link rel="stylesheet" href="../css/padroes.css">
  </head>
  <body>

    <div class="container_principal_cp_cadastrados">
      <!-- TITULO CLIENTE -->
      <div class="container_titulo_cp float_left margem_l_80 margem_t_50 borda_preta_1 bg_verde_vivo sombra_preta_20">
        <div class="item_titulo_cp preenche_t_20 margem_l_30 fs_25 negrito">
          Clientes
        </div>
      </div>
      <!-- VISUALIZAÇÃO DE CLIENTE -->
      <div class=" float_left container_visualiza_cp margem_t_10 margem_l_80">
        <div class="container_topicos">
          <div class="item_titulo_topicos float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
            Nome
          </div>

          <div class="item_titulo_topicos float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
            Telefone
          </div>

          <div class="item_titulo_topicos float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
            E-mail
          </div>

          <div class="ativo_ver float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
            Ativo
          </div>

          <div class="ativo_ver float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
            Ver
          </div>
        </div>

        <?php

          // Obtém os clientes existentes no DB
          $clientes = Cliente::obterClientes();

          for ($i=0; $i < sizeof($clientes)-1; $i++) {
        ?>

          <!-- DADOS QUE VIRÃO DO BANCO -->
          <div class="container_dados_topicos margem_t_5">
            <div class="item_dados_topicos float_left preenche_t_15 margem_l_10 align_center borda_preta_1 sombra_preta_20">
              <?=$clientes[$i]->nome?>
            </div>

            <div class="item_dados_topicos float_left preenche_t_15 margem_l_10 align_center borda_preta_1 sombra_preta_20">
              <?=$clientes[$i]->telefone?>
            </div>

            <div class="item_dados_topicos float_left preenche_t_15 margem_l_10 align_center borda_preta_1 sombra_preta_20">
              <?=$clientes[$i]->email?>
            </div>

            <div class="ativo_ver_dados float_left preenche_t_15 margem_l_10 align_center borda_preta_1 sombra_preta_20">
              <?php
                echo $clientes[$i]->ativo == 1 ? '<input onclick="ativarDesativar(this,'.$clientes[$i]->idUsuario.', '."'usuario'".')" class="ckb_ativo tamanho_ckb" type="checkbox" checked name="ckb_ativo">' : '<input onclick="ativarDesativar(this,'.$clientes[$i]->idUsuario.', '."'usuario'".')" class="ckb_ativo tamanho_ckb" type="checkbox" name="ckb_ativo">';
              ?>
            </div>

            <div onclick="modalCmsDadosDetalheCliente(<?=$clientes[$i]->idCliente?>)" class="ativo_ver_dados float_left preenche_t_10 margem_l_10 align_center borda_preta_1 sombra_preta_20">
              <a class="visualizarCliente" href="#">
                <i class="material-icons" style="font-size:30px;">visibility</i>
              </a>
            </div>
          </div>

        <?php
          }
        ?>
      </div>

      <!-- PARTE PARCEIRO -->

      <div class="container_titulo_cp float_left margem_l_80 margem_t_50 borda_preta_1 bg_verde_vivo sombra_preta_20">
        <div class="item_titulo_cp preenche_t_20 margem_l_30 fs_25 negrito">
          Parceiros
        </div>
      </div>
      <!-- VISUALIZAÇÃO DE PARCEIRO -->
      <div class=" float_left container_visualiza_cp margem_t_10 margem_l_80">
        <div class="container_topicos">
          <div class="item_titulo_topicos float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
            Nome
          </div>

          <div class="item_titulo_topicos float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
            CNPJ
          </div>

          <div class="item_titulo_topicos float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
            E-mail
          </div>

          <div class="ativo_ver float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo">
            Ativo
          </div>

          <div class="ativo_ver float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
            Ver
          </div>
        </div>

        <!-- DADOS QUE VIRÃO DO BANCO -->

        <?php

          // Obtém os parceiros existentes no DB
          $parceiros = Parceiro::obterParceiros();

          for ($i=0; $i < sizeof($parceiros)-1; $i++)
          {
        ?>

          <div class="container_dados_topicos margem_t_5">
            <div class="item_dados_topicos float_left preenche_t_15 margem_l_10 align_center borda_preta_1 sombra_preta_20">
              <?=$parceiros[$i]->nome_fantasia?>
            </div>

            <div class="item_dados_topicos float_left preenche_t_15 margem_l_10 align_center borda_preta_1 sombra_preta_20">
              <?=$parceiros[$i]->telefone?>
            </div>

            <div class="item_dados_topicos float_left preenche_t_15 margem_l_10 align_center borda_preta_1 sombra_preta_20">
              <?=$parceiros[$i]->email?>
            </div>

            <div class="ativo_ver_dados float_left preenche_t_15 margem_l_10 align_center borda_preta_1 sombra_preta_20">
              <?php
                echo $parceiros[$i]->ativo == 1 ? '<input onclick="ativarDesativar(this,'.$parceiros[$i]->id_parceiro.', '."'parceiro'".')" class="ckb_ativo tamanho_ckb" type="checkbox" checked name="ckb_ativo">' : '<input onclick="ativarDesativar(this,'.$parceiros[$i]->id_parceiro.', '."'parceiro'".')" class="ckb_ativo tamanho_ckb" type="checkbox" name="ckb_ativo">';
              ?>
            </div>

            <div onclick="modalCmsDadosDetalheParceiro(<?=$parceiros[$i]->id_parceiro?>);" class="ativo_ver_dados float_left preenche_t_10 margem_l_10 align_center borda_preta_1 sombra_preta_20">
              <a class="visualizarParceiro" href="#">
                <i class="material-icons" style="font-size:30px;">visibility</i>
              </a>
            </div>
          </div>

        <?php
          }
        ?>

      </div>
    </div>

    <script>

      /**
      * Ativa e desativa o usuário do cliente no banco de dados
      * @param e Evento do click para saber qual cliente da lista foi clicado
      * @param idUsuario Id do usuário a ser atualizado no DB
      */
      function ativarDesativar(e,id, atualizar)
      {

        // Verifica qual controller será acionada para atualizar o registro - Parceiro ou Cliente
        var controller = atualizar == 'usuario' ? 'usuario' : 'parceiro';

        // Armazena o status do usuário (se ele está ativo ou não - 0 ou 1)
        var statusUsuario = $(e).is(':checked') ? 1 : 0;

        // Envia a solicitação de atualização do status do usuário para a router
        $.ajax({
          type:"POST",
          url:'../../router.php?controller='+controller+'&modo=atualizarStatus',
          dataType:'json',
          data:{'id':id,'ativo':statusUsuario},
          success:function(respostaRouter){
            console.log(respostaRouter);
          },
          error: function(a,b,c){
            console.log(a);
            console.log(b);
            console.log(c);
          }
        });
      }

    </script>

  </body>
</html>
