var rotas = {
  'inserirEndereco':'http://localhost/inf4m/Portal-Auto-Center/api/v1/endereco/?action=inserir'
}


function inserirEndereco(submitEvent)
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
      return respostaAPI['status'] > 1 ? true : false;
    },
    error: function(){
      return false;
    }
  });
}
