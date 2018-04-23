<div class="container_geral bg_cinza">
     <!-- TITULO -->
     <div class="container_titulo margem_t_5">
       <div class="item_titulo align_center txt_sombra_1x1x1_preto negrito fs_20 titulo">
         Missão
       </div>
     </div>

     <!-- INAÇÕES -->
     <div class="container_infs bg_branco borda_preta_1 sombra_preta_b_15">
       <form id="frmImagemMissao" name="frmImagemMissao" method="POST" action="../../assets/refreshPic.php?path=../view/pictures/sobre_empresa/" enctype="multipart/form-data">
         <!-- IMAGEM -->
         <div class="segura_imagem float_left">
           <label for="btn_img_missao">
             <!-- Armazena o caminho da imagem enviado pelo ajaxForm -->
             <div hidden id="pathImgMissao"></div>
             <div class="item_img margem_t_10 borda_preta_1 margem_t_5">
               <img id="imgMissao" src="" alt="">
             </div>
           </label>
           <input class="display_none" id="btn_img_missao" type="file" name="img_refresh_pic" value="">
         </div>
       </form>

       <form id="frmDescritivoMissao" name="frmDescritivoMissao" action="index.html" method="post">
         <!-- TEXTAREA -->
         <div class="container_segura_textarea float_left">
           <div class="segura_textarea">
             <textarea placeholder="Digite Aqui!!!" required name="textoDescritivo" rows="9" style="resize: none" cols="61"></textarea>
           </div>
         </div>
         <!-- BOTÃO -->
         <div class="container_salvar margem_t_40 float_left">
           <div class="segura_salvar_foto margem_t_20 centro_lr">
             <label for="btnSubmitDescritivoMissao">
               <i class="material-icons semSelecao" style="font-size:35px;">save</i>
             </label>
             <input id="btnSubmitDescritivoMissao" type="submit" name="btnSubmitDescritivoMissao" value="" hidden>
           </div>
         </div>
       </form>

     </div>
   </div>

   <!-- PARTE VISAO -->

   <!-- *************************************************************** -->

   <div class="container_geral bg_cinza">
     <!-- TITULO -->
     <div class="container_titulo margem_t_5">
       <div class="item_titulo align_center txt_sombra_1x1x1_preto negrito fs_20 titulo">
         Visão
       </div>
     </div>

     <!-- INAÇÕES -->
     <div class="container_infs bg_branco borda_preta_1 sombra_preta_b_15">
       <form id="frmImagemVisao" name="frmImagemVisao" method="POST" action="../../assets/refreshPic.php?path=../view/pictures/sobre_empresa/" enctype="multipart/form-data">
         <!-- IMAGEM -->
         <div class="segura_imagem float_left">
           <label for="btn_img_visao">
             <!-- Armazena o caminho da imagem enviado pelo ajaxForm -->
             <div hidden id="pathImgVisao"></div>
             <div class="item_img margem_t_10 borda_preta_1 margem_t_5">
               <img id="imgVisao" src="" alt="">
             </div>
           </label>
           <input id="btn_img_visao" class="display_none" type="file" name="img_refresh_pic" value="">
         </div>
       </form>

       <form id="frmDescritivoVisao" name="frmDescritivoVisao" action="index.html" method="post">
         <!-- TEXTAREA -->
         <div class="container_segura_textarea float_left">
           <div class="segura_textarea">
             <textarea placeholder="Digite Aqui!!!" required name="textoDescritivo" rows="9" style="resize: none" cols="61"></textarea>
           </div>
         </div>
         <!-- BOTÃO -->
         <div class="container_salvar margem_t_40 float_left">
           <div class="segura_salvar_foto margem_t_20 centro_lr">
             <label for="btnSubmitDescritivoVisao">
               <i class="material-icons" style="font-size:35px;">save</i>
             </label>
             <input id="btnSubmitDescritivoVisao" type="submit" name="btnSubmitDescritivoVisao" value="" hidden>
           </div>
         </div>
       </form>

     </div>
   </div>

   <!-- PARTE VALORES -->

   <!-- *************************************************************** -->

   <div class="container_geral bg_cinza">
     <!-- TITULO -->
     <div class="container_titulo margem_t_5">
       <div class="item_titulo align_center txt_sombra_1x1x1_preto negrito fs_20 titulo">
         Valores
       </div>
     </div>

     <!-- INAÇÕES -->
     <div class="container_infs bg_branco borda_preta_1 sombra_preta_b_15">
       <form id="frmImagemValores" name="frmImagemValores" method="POST" enctype="multipart/form-data" action="../../assets/refreshPic.php?path=../view/pictures/sobre_empresa/">
         <!-- IMAGEM -->
         <div class="segura_imagem float_left">
           <label for="btn_img_valores">
             <!-- Armazena o caminho da imagem enviado pelo ajaxForm -->
             <div hidden id="pathImgValores"></div>
             <div class="item_img margem_t_10 borda_preta_1 margem_t_5">
               <img id="imgValores" src="" alt="">
             </div>
             <input class="display_none" id="btn_img_valores" type="file" name="img_refresh_pic" value="">
           </label>
         </div>
       </form>

       <form id="frmDescritivoValores" name="frmDescritivoValores" action="index.html" method="post">
         <!-- TEXTAREA -->
         <div class="container_segura_textarea float_left">
           <div class="segura_textarea">
             <textarea placeholder="Digite Aqui!!!" name="textoDescritivo" rows="9" style="resize: none" cols="61"></textarea>
           </div>
         </div>
         <!-- BOTÃO -->
         <div class="container_salvar margem_t_40 float_left">
           <div class="segura_salvar_foto margem_t_20 centro_lr">
             <label for="btnSubmitDescritivoValores">
               <i class="material-icons" style="font-size:35px;">save</i>
             </label>
             <input id="btnSubmitDescritivoValores" type="submit" name="btnSubmitDescritivoValores" value="" hidden>
           </div>
         </div>
       </form>

     </div>
   </div>

   <!-- PARTE EMPRESA -->

   <!-- *************************************************************** -->

   <div class="container_geral bg_cinza">
     <!-- TITULO -->
     <div class="container_titulo margem_t_5">
       <div class="item_titulo align_center  txt_sombra_1x1x1_preto negrito fs_20 titulo">
         Empresa
       </div>
     </div>

     <!-- INAÇÕES -->
     <div class="container_infs bg_branco borda_preta_1 sombra_preta_b_15">
       <form id="frmImagemEmpresa" name="frmImagemEmpresa" method="POST" enctype="multipart/form-data" action="../../assets/refreshPic.php?path=../view/pictures/sobre_empresa/">
         <!-- IMAGEM -->
         <div class="segura_imagem float_left">
           <label for="btn_img_empresa">
             <!-- Armazena o caminho da imagem enviado pelo ajaxForm -->
             <div hidden id="pathImgEmpresa"></div>
             <div class="item_img margem_t_10 borda_preta_1 margem_t_5">
               <img id="imgEmpresa" src="" alt="">
             </div>
             <input class="display_none" id="btn_img_empresa" type="file" name="img_refresh_pic" value="">
           </label>
         </div>
       </form>

       <form id="frmDescritivoEmpresa" name="frmDescritivoEmpresa" action="index.html" method="POST">
         <!-- TEXTAREA -->
         <div class="container_segura_textarea float_left">
           <div class="segura_textarea">
             <textarea placeholder="Digite Aqui!!!" required name="textoDescritivo" rows="9" style="resize: none" cols="61"></textarea>
           </div>
         </div>
         <!-- BOTÃO -->
         <div class="container_salvar margem_t_40 float_left">
           <div class="segura_salvar_foto margem_t_20 centro_lr">
             <label for="btnSubmitDescritivoEmpresa">
               <i class="material-icons" style="font-size:35px;">save</i>
             </label>
             <input id="btnSubmitDescritivoEmpresa" type="submit" name="btnSubmitDescritivoEmpresa" value="" hidden>
           </div>
         </div>
       </form>

     </div>
   </div>
   <!-- FINALIZA -->
   </div>
   </div>

   <script>

   // Armazena o caminho da imagem
   var caminhoImg = '';

   // ************************ MISSÃO **********************************
   // Carrega a imagem de forma dinâmica - Missão
    $('#btn_img_missao').change(function(){
      $('#frmImagemMissao').ajaxForm({
        target:'#pathImgMissao',
        success:function(){ // Callback de sucesso
          // Armazena o caminho da imagem cortada para se adaptar ao atual diretório encontrado
          caminhoImg = $('#pathImgMissao').html().substring(7);

          // Define o src do componente img com o caminho da imagem recém carregada
          $('#imgMissao').attr('src','../'+caminhoImg);
        }
      }).submit();

    });

    // Submit do form contendo o texto descritivo do tópico de Missão
    $('#frmDescritivoMissao').submit(function(e){

      // Retira o submit do form
      e.preventDefault();

      // Armazena o form em um obj
      var formDescritivoMissao = new FormData($('#frmDescritivoMissao')[0]);

      // adiciona a imagem no form
      formDescritivoMissao.append('srcImg',caminhoImg);
      // adiciona o id do tópico no form
      formDescritivoMissao.append('idTopico',1);
      // adiciona o id do registro a ser atualizado no form
      formDescritivoMissao.append('id',1);

      // Debbug form
      // for (var i of formDescritivoMissao.entries()) {
      //   console.log(i[0]+" "+i[1]);
      // }

      // Envia a solicitação para a router
      $.ajax({
        type: 'POST',
        url: '../../router.php?controller=sobreEmpresa&modo=atualizar',
        data: formDescritivoMissao,
        processData: false,
        contentType: false,
        cache:false,
        dataType:'json',
        success:function(response){
          if (response.status){alert('Dados atualizados com sucesso');}
        },
        error:function(jqXHR, textStatus, errorThrown){
          console.error(textStatus);
          console.error(jqXHR);
          console.error(errorThrown);
        }
      });

    });
    // ******************************************************************

    // ************************ VISÃO **********************************
    // Carrega a imagem de forma dinâmica - Missão
     $('#btn_img_visao').change(function(){
       $('#frmImagemVisao').ajaxForm({
         target:'#pathImgVisao',
         success:function(){ // Callback de sucesso
           // Armazena o caminho da imagem cortada para se adaptar ao atual diretório encontrado
           caminhoImg = $('#pathImgVisao').html().substring(7);

           // Define o src do componente img com o caminho da imagem recém carregada
           $('#imgVisao').attr('src','../'+caminhoImg);
         }
       }).submit();

     });

     // Submit do form contendo o texto descritivo do tópico de Missão
     $('#frmDescritivoVisao').submit(function(e){

       // Retira o submit do form
       e.preventDefault();

       // Armazena o form em um obj
       var formDescritivoMissao = new FormData($('#frmDescritivoVisao')[0]);

       // adiciona a imagem no form
       formDescritivoMissao.append('srcImg',caminhoImg);
       // adiciona o id do tópico no form
       formDescritivoMissao.append('idTopico',2);
       // adiciona o id do registro a ser atualizado no form
       formDescritivoMissao.append('id',2);

       // Debbug form
       // for (var i of formDescritivoMissao.entries()) {
       //   console.log(i[0]+" "+i[1]);
       // }

       // Envia a solicitação para a router
       $.ajax({
         type: 'POST',
         url: '../../router.php?controller=sobreEmpresa&modo=atualizar',
         data: formDescritivoMissao,
         processData: false,
         contentType: false,
         dataType:'json',
         cache:false,
         success:function(response){
           if (response.status){alert('Dados atualizados com sucesso');}
         },
         error:function(jqXHR, textStatus, errorThrown){
           console.error(textStatus);
           console.error(jqXHR);
           console.error(errorThrown);
         }
       });

     });
     // ******************************************************************

     // ************************ VALORES **********************************
     // Carrega a imagem de forma dinâmica - Missão
      $('#btn_img_valores').change(function(){
        $('#frmImagemValores').ajaxForm({
          target:'#pathImgValores',
          success:function(response){ // Callback de sucesso
            // Armazena o caminho da imagem cortada para se adaptar ao atual diretório encontrado
            caminhoImg = $('#pathImgValores').html().substring(7);

            // Define o src do componente img com o caminho da imagem recém carregada
            $('#imgValores').attr('src','../'+caminhoImg);
          }
        }).submit();

      });

      // Submit do form contendo o texto descritivo do tópico de Missão
      $('#frmDescritivoValores').submit(function(e){

        // Retira o submit do form
        e.preventDefault();

        // Armazena o form em um obj
        var formDescritivoMissao = new FormData($('#frmDescritivoValores')[0]);

        // adiciona a imagem no form
        formDescritivoMissao.append('srcImg',caminhoImg);
        // adiciona o id do tópico no form
        formDescritivoMissao.append('idTopico',3);
        // adiciona o id do registro a ser atualizado no form
        formDescritivoMissao.append('id',3);

        // Debbug form
        // for (var i of formDescritivoMissao.entries()) {
        //   console.log(i[0]+" "+i[1]);
        // }

        // Envia a solicitação para a router
        $.ajax({
          type: 'POST',
          url: '../../router.php?controller=sobreEmpresa&modo=atualizar',
          data: formDescritivoMissao,
          processData: false,
          contentType: false,
          dataType:'json',
          cache:false,
          success:function(response){
            if (response.status){alert('Dados atualizados com sucesso');}
          },
          error:function(jqXHR, textStatus, errorThrown){
            console.error(textStatus);
            console.error(jqXHR);
            console.error(errorThrown);
          }
        });

      });
      // ******************************************************************

      // ************************ EMPRESA **********************************
      // Carrega a imagem de forma dinâmica - Missão
       $('#btn_img_empresa').change(function(){
         $('#frmImagemEmpresa').ajaxForm({
           target:'#pathImgEmpresa',
           success:function(response){ // Callback de sucesso
             // Armazena o caminho da imagem cortada para se adaptar ao atual diretório encontrado
             caminhoImg = $('#pathImgEmpresa').html().substring(7);

             // Define o src do componente img com o caminho da imagem recém carregada
             $('#imgEmpresa').attr('src','../'+caminhoImg);
           }
         }).submit();

       });

       // Submit do form contendo o texto descritivo do tópico de Missão
       $('#frmDescritivoEmpresa').submit(function(e){

         // Retira o submit do form
         e.preventDefault();

         // Armazena o form em um obj
         var formDescritivoMissao = new FormData($('#frmDescritivoEmpresa')[0]);

         // adiciona a imagem no form
         formDescritivoMissao.append('srcImg',caminhoImg);
         // adiciona o id do tópico no form
         formDescritivoMissao.append('idTopico',4);
         // adiciona o id do registro a ser atualizado no form
         formDescritivoMissao.append('id',4);

         // Debbug form
         // for (var i of formDescritivoMissao.entries()) {
         //   console.log(i[0]+" "+i[1]);
         // }

         // Envia a solicitação para a router
         $.ajax({
           type: 'POST',
           url: '../../router.php?controller=sobreEmpresa&modo=atualizar',
           data: formDescritivoMissao,
           processData: false,
           contentType: false,
           dataType:'json',
           cache:false,
           success:function(response){
             if (response.status){alert('Dados atualizados com sucesso');}
           },
           error:function(jqXHR, textStatus, errorThrown){
             console.error(textStatus);
             console.error(jqXHR);
             console.error(errorThrown);
           }
         });

       });
       // ******************************************************************
   </script>
