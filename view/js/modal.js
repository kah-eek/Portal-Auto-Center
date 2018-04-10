function modalCadastroCliente(){
  $('.container_modal').fadeIn(1500);

  $.ajax({
    type: "POST",
    url: "modal_cadastro_cliente.php",
    cache:false,
    contentType:false,
    processData:false,
    success:function(dadosPagina){
      $('.modal').html(dadosPagina);
    }
  });
}

function modalCadastroParceiro(){
  $('.container_modal').fadeIn(1500);

  $.ajax({
    type: "POST",
    url: "modal_cadastro_parceiro.php",
    cache:false,
    contentType:false,
    processData:false,
    success:function(dadosPagina){
      $('.modal').html(dadosPagina);
    }
  });
}

function modalLoginRedeSocial(){
  $('.container_modal').fadeIn(1500);

  $.ajax({
    type: "POST",
    url: "modal_login_rede_social.php",
    cache:false,
    contentType:false,
    processData:false,
    success:function(dadosPagina){
      $('.modal').html(dadosPagina);
    }
  });
}

function modalRedefinirSenha(){
  $('.container_modal').fadeIn(1500);

  $.ajax({
    type: "POST",
    url: "modal_redefinir_senha.php",
    cache:false,
    contentType:false,
    processData:false,
    success:function(dadosPagina){
      $('.modal').html(dadosPagina);
    }
  });
}

function modalRedeSocial(){
  $('.container_modal').fadeIn(1500);

  $.ajax({
    type: "POST",
    url: "modal_rede_social.php",
    cache:false,
    contentType:false,
    processData:false,
    success:function(dadosPagina){
      $('.modal').html(dadosPagina);
    }
  });
}
