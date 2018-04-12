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

function modalAgendaRedeSocial(){
  $('.container_modal').fadeIn(1500);

  $.ajax({
    type: "POST",
    url: "modal_agenda.php",
    cache:false,
    contentType:false,
    processData:false,
    success:function(dadosPagina){
      $('.modal').html(dadosPagina);
    }
  });
}

function modalDetalhesVeiculos(){
  $('.container_modal').fadeIn(1500);

  $.ajax({
    type: "POST",
    url: "modal_detalhes_veiculos.php",
    cache:false,
    contentType:false,
    processData:false,
    success:function(dadosPagina){
      $('.modal').html(dadosPagina);
    }
  });
}
