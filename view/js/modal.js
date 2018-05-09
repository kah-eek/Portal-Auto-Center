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
  $('.container_modal').slideToggle(500);

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
      $('#agenda_central_rs').html(dadosPagina);
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

function modalCmsEmpresa(){
  // $('.container_modal').fadeIn(1500);

  $.ajax({
    type: "POST",
    url: "modal_cms_empresa.php",
    cache:false,
    contentType:false,
    processData:false,
    success:function(dadosPagina){
      $('#conteudo_central_cms').html(dadosPagina);
    }
  });
}

function modalCmsCadastroParceiros(){
  // $('.container_modal').fadeIn(1500);

  $.ajax({
    type: "POST",
    url: "modal_cad_parceiro.php",
    cache:false,
    contentType:false,
    processData:false,
    success:function(dadosPagina){
      $('#conteudo_central_cms').html(dadosPagina)
    }
  });
}

function modalCmsClienteParceiro(){
  // $('.container_modal').fadeIn(1500);

  $.ajax({
    type: "POST",
    url: "modal_cms_cliente_parceiro.php",
    cache:false,
    contentType:false,
    processData:false,
    success:function(dadosPagina){
      $('#conteudo_central_cms').html(dadosPagina)
    }
  });
}

function modalCmsFaleConosco(){
  // $('.container_modal').fadeIn(1500);

  $.ajax({
    type: "POST",
    url: "modal_cms_fale_conosco.php",
    cache:false,
    contentType:false,
    processData:false,
    success:function(dadosPagina){
      $('#conteudo_central_cms').html(dadosPagina)
    }
  });
}

function modalCmsProdutosCadastrados(){
  // $('.container_modal').fadeIn(1500);

  $.ajax({
    type: "POST",
    url: "modal_cms_produtos_home.php",
    cache:false,
    contentType:false,
    processData:false,
    success:function(dadosPagina){
      $('#conteudo_central_cms').html(dadosPagina)
    }
  });
}

function modalCmsCadastrarProdutos(){
  // $('.container_modal').fadeIn(1500);

  $.ajax({
    type: "POST",
    url: "modal_cms_cadastrar_produtos.php",
    cache:false,
    contentType:false,
    processData:false,
    success:function(dadosPagina){
      $('#conteudo_central_cms').html(dadosPagina)
    }
  });
}

function modalCmsDadosDetalheCliente(idCliente){
  $('.container_modal').slideToggle(1500);

  $.ajax({
    type: "GET",
    url: "modal_cms_exibir_dados_cliente.php?id="+idCliente,
    cache:false,
    contentType:false,
    processData:false,
    success:function(dadosPagina){
      $('.modal').html(dadosPagina)
    }
  });
}

function modalCmsDadosDetalheParceiro(idCliente){
  $('.container_modal').slideToggle(1500);

  $.ajax({
    type: "GET",
    url: "modal_cms_exibir_dados_parceiro.php?id="+idCliente,
    cache:false,
    contentType:false,
    processData:false,
    success:function(dadosPagina){
      $('.modal').html(dadosPagina)
    }
  });
}

function modalCadCategoria(){
  // $('.container_modal').fadeIn(1500);

  $.ajax({
    type: "POST",
    url: "modal_cad_categoria.php",
    cache:false,
    contentType:false,
    processData:false,
    success:function(dadosPagina){
      $('#conteudo_central_cms').html(dadosPagina)
    }
  });
}

function modalCadUsuario(){
  // $('.container_modal').fadeIn(1500);

  $.ajax({
    type: "POST",
    url: "modal_cad_acao_usuario.php",
    cache:false,
    contentType:false,
    processData:false,
    success:function(dadosPagina){
      $('#conteudo_central_cms').html(dadosPagina)
    }
  });
}

function modalCadCor(){
  // $('.container_modal').fadeIn(1500);

  $.ajax({
    type: "POST",
    url: "modal_cad_cor.php",
    cache:false,
    contentType:false,
    processData:false,
    success:function(dadosPagina){
      $('#conteudo_central_cms').html(dadosPagina)
    }
  });
}

function modalCadUsuario(){
  // $('.container_modal').fadeIn(1500);

  $.ajax({
    type: "POST",
    url: "modal_cad_usuario.php",
    cache:false,
    contentType:false,
    processData:false,
    success:function(dadosPagina){
      $('#conteudo_central_cms').html(dadosPagina)
    }
  });
}
