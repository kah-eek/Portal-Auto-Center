<?php

?>


<!-- Importando Cabeçalho CMS -->
<?php
  require_once('../component/cms_header.php');
 ?>


 <div class="container_central centro_lr">
   <!-- Importando Menu Lateral CMS -->
    <?php
      require_once('../component/cms_menu_lateral.php');
     ?>
   <div class="container_principal_cliente bg_cinza">
     <div class="container_sobre_cliente float_left">

       <!-- TITULOS -->
       <div class="container_titulos sombra_preta_b_15 bg_preto margem_t_20">
         <div class="item_titulo txt_branco align_center titulo preenche_10">
           Foto Cliente
         </div>
         <div class="item_titulo txt_branco align_center titulo preenche_10">
           Texto Cliente
         </div>
       </div>

       <div class="container_informacoes margem_t_10 sombra_preta_b_15">
         <form name="frmImagemCliente" method="POST" enctype="multipart/form-data">
           <!-- IMAGEM -->
           <div class="container_imagem float_left">
             <label for="btn_img_cliente">
               <div hidden id="pathImgCliente"></div>
               <div class="item_imagem centro_lr margem_t_20">
                 <img id="imgCliente" src="" alt="">
               </div>
             </label>
             <input class="display_none" id="btn_img_cliente" type="file" name="btn_img_cliente" value="">
           </div>
         </form>

         <form id="frmDescritivoCliente" name="frmDescritivoCliente" action="index.html" method="post">
             <!-- TEXTAREA -->
             <div class="container_textarea float_left">
               <div class="item_textarea">
                 <textarea placeholder="Digite Aqui!!!" class="textarea_cp float_left" name="name" style="resize: none" rows="11" cols="42"></textarea>
               </div>
             </div>

             <!-- BOTÃO -->
             <div class="container_btn float_left">
               <div class="segura_submit margem_t_100 centro_lr">
                 <input id="btnSalvarCliente" type="submit" name="btn_enviar" class="input_submit_cp" value="Enviar">
               </div>
             </div>
           </form>
        </div>
     </div>

     <div class="container_sobre_parceiro float_left margem_t_10">

       <!-- TITULOS -->
       <div class="container_titulos sombra_preta_b_15 bg_preto margem_t_20">
         <div class="item_titulo txt_branco align_center titulo preenche_10">
           Foto Parceiro
         </div>
         <div class="item_titulo txt_branco align_center titulo preenche_10">
           Texto Parceiro
         </div>
       </div>

       <div class="container_informacoes bg_branco margem_t_10 sombra_preta_b_15">

         <!-- IMAGEM -->
         <div class="container_imagem float_left">
           <div class="item_imagem centro_lr margem_t_20">

           </div>
         </div>

         <!-- TEXTAREA -->
         <div class="container_textarea float_left">
           <div class="item_textarea centro_lr">
             <textarea class="textarea_cp" name="name" style="resize: none" rows="11" cols="42"></textarea>
           </div>
         </div>

         <div class="container_btn float_left">
           <div class="segura_submit margem_t_100 centro_lr">
             <input type="submit" name="btn_enviar" class="input_submit_cp" value="Enviar">
           </div>
         </div>

       </div>
     </div>
   </div>
 </div>

 <script>

 // Armazena o caminho da imagem
 var caminhoImg = '';

 // ************************ MISSÃO **********************************
 // Carrega a imagem de forma dinâmica - Missão
  $('#btn_img_cliente').change(function(){
    $('#frmImagemCliente').ajaxForm({
      target:'#pathImgCliente',
      success:function(){ // Callback de sucesso
        // Armazena o caminho da imagem cortada para se adaptar ao atual diretório encontrado
        caminhoImg = $('#pathImgCliente').html().substring(7);

        // Define o src do componente img com o caminho da imagem recém carregada
        $('#imgCliente').attr('src','../'+caminhoImg);
      }
    }).submit();

  });

  // Submit do form contendo o texto descritivo do tópico de Missão
  $('#frmDescritivoCliente').submit(function(e){

    // Retira o submit do form
    e.preventDefault();

    // Armazena o form em um obj
    var formDescritivoCliente = new FormData($('#frmDescritivoCliente')[0]);

    // adiciona a imagem no form
    formDescritivoCliente.append('srcImg',caminhoImg);
    // adiciona o id do tópico no form
    formDescritivoCliente.append('idTopico',1);
    // adiciona o id do registro a ser atualizado no form
    formDescritivoCliente.append('id',1);

    // Debbug form
    // for (var i of formDescritivoCliente.entries()) {
    //   console.log(i[0]+" "+i[1]);
    // }

    // Envia a solicitação para a router
    $.ajax({
      type: 'POST',
      url: '../../router.php?controller=clienteParceiro&modo=atualizar',
      data: formDescritivoCliente,
      processData: false,
      // contentType: false,
      // cache:false,
      // dataType:'json',
      success:function(response){
        // if (response.status){alert('Dados atualizados com sucesso');}
        console.log(response);
      },
      error:function(jqXHR, textStatus, errorThrown){
        console.error(textStatus);
        console.error(jqXHR);
        console.error(errorThrown);
      }
    });

  });
 </script>
