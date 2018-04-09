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

         <!-- IMAGEM -->
         <div class="container_imagem float_left">
           <div class="item_imagem centro_lr margem_t_20">

           </div>
         </div>

         <!-- TEXTAREA -->
         <div class="container_textarea float_left">
           <div class="item_textarea">
             <textarea class="textarea_cp float_left" name="name" style="resize: none" rows="11" cols="42"></textarea>
           </div>
         </div>
         <div class="container_btn float_left">
           <div class="segura_submit margem_t_100 centro_lr">
             <input type="submit" name="btn_enviar" class="input_submit_cp" value="Enviar">
           </div>
         </div>
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
