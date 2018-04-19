var rotas = {
  'inserirEndereco':'http://localhost/inf4m/Portal-Auto-Center/api/v1/endereco/?action=inserir',
  'inserirUsuario':'http://localhost/inf4m/Portal-Auto-Center/api/v1/usuario/?action=inserir'
}


function inserirEndereco(submitEvent, callback)
{

  // Remove o submit padrão da página
  submitEvent.preventDefault();

  // Obtendo os valores armazenados nas inputs
  var txt_numero = $('#txt_numero').val();
  var txt_cidade = $('#txt_cidade').val();
  var txt_cep = $('#txt_cep').val();
  var txt_bairro = $('#txt_bairro').val();
  var txt_estado = $('#txt_estado').val();
  var txt_complemento = $('#txt_complemento').val();
  var txt_logradouro = $('#txt_logradouro').val();
  // ################################################

  // console.log(txt_numero);
  // console.log(txt_cidade);
  // console.log(txt_cep);
  // console.log(txt_bairro);
  // console.log(txt_estado);
  // console.log(txt_complemento);
  // console.log(txt_logradouro);

  // Realiza a request
  $.ajax({
    type:"POST",
    url:rotas['inserirEndereco'],
    data: {numero:txt_numero, cidade:txt_cidade, cep:txt_cep, bairro:txt_bairro, idEstado:txt_estado, complemento:txt_complemento, logradouro: txt_logradouro},
    dataType: 'json',
    success: function(respostaAPI){
      var idEndereco = respostaAPI['status'] ? respostaAPI['id'] : null;
      callback(idEndereco);
    },
    error: function(){
      return false;
    }
  });
}

function inserirUsuario(submitEvent)
{

  //REMOVE O SUBMIT PADRÃO DA PÁGINA.
  submitEvent.preventDefault();

  //OBTENDO OS VALORES ARMAZENADOS NAS INPUTS.
  var txt_use = $('#txt_use').val();
  var txt_senha = $('#txt_senha').val();
  // #############################################

  //REALIZA A REQUEST.
  $.ajax({
    type:"POST",
    url:rotas['inserirUsuario'],
    data: {nomeUsuario:txt_use, senha:txt_senha, idNivelUsuario:2, ativo:1},
    dataType:'json',
    success: function(respAPI){
      return respAPI['status'];
    },
    error: function(){
      return false;
    }
  });
}
