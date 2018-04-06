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
