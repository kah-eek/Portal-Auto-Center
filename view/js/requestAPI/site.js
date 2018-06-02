var rotas = {
  'inserirEndereco':'http://caiqueoliveira.mysql.dbaas.com.br/inf4m/Portal-Auto-Center/api/v1/endereco/?action=inserir',
  'inserirUsuario':'http://caiqueoliveira.mysql.dbaas.com.br/inf4m/Portal-Auto-Center/api/v1/usuario/?action=inserir',
  'obterEstados':'http://127.0.0.1/inf4m/Portal-Auto-Center/api/v1/estado/',
  'verificarAutenticacao':'http://127.0.0.1/inf4m/Portal-Auto-Center/api/v1/autenticacao/',
  'nivelAutenticacao':'http://127.0.0.1/inf4m/Portal-Auto-Center/api/v1/usuario/?action=nivel'
}

/**
* Registra um novo endereço no banco de dados
* @param callbackSuccess Callback de sucesso da inserção dos dados
* @param callbackFail Callback de falha ao tentar inserir os dados
* @param submitEvent Evento de submit do formulario
*/
function inserirEndereco(submitEvent, callbackSuccess, callbackFail)
{

  // Remove o submit padrão da página
  submitEvent.preventDefault();

  // Obtendo os valores armazenados nas inputs
  var txt_numero = $('#txt_numero').val();
  var txt_cidade = $('#txt_cidade').val();
  var txt_cep = $('#txt_cep').val();
  var txt_bairro = $('#txt_bairro').val();
  var cbx_estado = $('#cbx_estado').val();
  var txt_complemento = $('#txt_complemento').val();
  var txt_logradouro = $('#txt_logradouro').val();
  // ################################################

  // Realiza a request
  $.ajax({
    type:"POST",
    url:rotas['inserirEndereco'],
    data: {numero:txt_numero, cidade:txt_cidade, cep:txt_cep, bairro:txt_bairro, idEstado:cbx_estado, complemento:txt_complemento, logradouro: txt_logradouro},
    dataType: 'json',
    success: function(respostaAPI){
      // Debbug
      console.log(respostaAPI);
      // *************************

      // Armazena o retorno da request - id do endereço ou null caso tenha ocorrido alguma falha
      var idEndereco = respostaAPI['status'] ? respostaAPI['id'] : null;
      // Executa o callback de sucesso apenas se existir
      if(callbackSuccess != undefined){callbackSuccess(idEndereco);}
    },
    error: function(){
      // Executa o callback de falha apenas se existir
      if(callbackFail != undefined){callbackFail();}
    }
  });
}

/**
* Registra um novo usuário no banco de dados
* @param callbackSuccess Callback de sucesso da inserção dos dados
* @param callbackFail Callback de falha ao tentar inserir os dados
* @param submitEvent Evento de submit do formulario
*/
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
      // Debbug
      console.log(respostaAPI);
      // *************************

      // Armazena o retorno da request - id do usuário ou null caso tenha ocorrido alguma falha
      var idUsuario = respostaAPI['status'] ? respostaAPI['id'] : null;
      // Executa o callback de sucesso
      // Executa o callback de sucesso apenas se existir
      if(callbackSuccess != undefined){callbackSuccess(idUsuario);}
    },
    error: function(){
      // Executa o callback de falha apenas se existir
      if(callbackFail != undefined){callbackFail();}
    }
  });
}

/**
* Obtém o nível de autenticação do usuário
* @param callbackSuccess Callback de sucesso da obtenção dos dados
* @param callbackFail Callback de falha ao tentar obter os dados
* @param submitEvent Evento de submit do formulario
*/
// function obterNivelAutenticacao(callbackSuccess, callbackFail)
// {
//   //REALIZA A REQUEST.
//   $.ajax({
//     type:"POST",
//     url:rotas['nivelAutenticacao'],
//     data:{nomeUsuario:txt_use,senha:txt_senha},
//     dataType:'json',
//     success: function(respostaAPI){
//       // Debbug
//       console.log(respostaAPI);
//       // *************************
//
//       // Executa o callback de sucesso apenas se existir
//       if(callbackSuccess != undefined){callbackSuccess(respostaAPI);}
//     },
//     error: function(){
//       // Executa o callback de falha apenas se existir
//       if(callbackFail != undefined){callbackFail();}
//     }
//   });
// }

/**
* Verifica a existência do usuário na base de dados
* @param callbackSuccess Callback de sucesso da obtenção dos dados
* @param callbackFail Callback de falha ao tentar obter os dados
* @param submitEvent Evento de submit do formulario
*/
function verificarAutenticacao(submitEvent, callbackSuccess, callbackFail)
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
    url:rotas['verificarAutenticacao'],
    data:{usuario:txt_use,senha:txt_senha},
    dataType:'json',
    success: function(respostaAPI){
      // Debbug
      console.log(respostaAPI);
      // *************************

      // Executa o callback de sucesso apenas se existir
      if(callbackSuccess != undefined){callbackSuccess(respostaAPI);}
    },
    error: function(){
      // Executa o callback de falha apenas se existir
      if(callbackFail != undefined){callbackFail();}
    }
  });
}

/**
* Obtém os Estados existente no banco de dados
* @param callbackSuccess Callback de sucesso da obtenção dos dados
* @param callbackFail Callback de falha ao tentar obter os dados
*/
function obterEstados(callbackSuccess, callbackFail)
{

  //REALIZA A REQUEST.
  $.ajax({
    type:"GET",
    url:rotas['obterEstados'],
    dataType:'json',
    success: function(respostaAPI){
      // Debbug
      console.log(respostaAPI);
      // *************************

      // Executa o callback de sucesso apenas se existir
      if(callbackSuccess != undefined){callbackSuccess(respostaAPI);}

    },
    error: function(){
      // Executa o callback de falha apenas se existir
      if(callbackFail != undefined){callbackFail();}
    }
  });
}
