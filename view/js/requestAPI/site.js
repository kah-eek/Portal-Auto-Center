var rotas = {
  'inserirEndereco':'http://localhost/site/Portal-Auto-Center/api/v1/endereco/?action=inserir',
  'inserirUsuario':'http://localhost/site/Portal-Auto-Center/api/v1/usuario/?action=inserir'
}


function inserirEndereco(submitEvent, callbackSuccess, callbackFail)
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

  // Realiza a request
  $.ajax({
    type:"POST",
    url:rotas['inserirEndereco'],
    data: {numero:txt_numero, cidade:txt_cidade, cep:txt_cep, bairro:txt_bairro, idEstado:txt_estado, complemento:txt_complemento, logradouro: txt_logradouro},
    dataType: 'json',
    success: function(respostaAPI){
      var idEndereco = respostaAPI['status'] ? respostaAPI['id'] : null;
      callbackSuccess(idEndereco);
    },
    error: function(){
      callbackFail();
    }
  });
}

function inserirUsuario(submitEvent, callbackSuccess, callbackFail)
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
    success: function(respostaAPI){
      // Armazena o retorno da request - id do usuário ou null caso tenha ocorrido alguma falha
      var idUsuario = respostaAPI['status'] ? respostaAPI['id'] : null;
      // Executa o callback de sucesso
      callbackSuccess(idUsuario);
    },
    error: function(){
      // Executa o callback de falha
      callbackFail();
    }
  });
}
