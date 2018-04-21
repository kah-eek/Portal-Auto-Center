/**
* Realiza uma chamada assíncrona utilizando AJAX
* @param protocolo Protoco da request - POST, GET, etc.
* @param urlAddress Endereço da url de destino
* @param callbackSuccess Callback de sucesso da realização da request (PODE SER NULLO)
* @param callbackFail Callback de falha da realização da request (PODE SER NULLO)
* @param dados Array de dados a serem passados para a página destino (urlAddress) (PODE SER NULLO)
* @param tipoDados Tipo de dados qual será obtido através da response (PODE SER NULLO)
*/
function getResponse(protocolo, urlAddress,callbackSuccess, callbackFail,dados,tipoDados)
{
  $.ajax({
    type: protocolo,
    url: urlAddress,
    data: dados,
    dataType: tipoDados,
    processData: false,
    contentType: false,
    cache:false,
    success: function(response){
      // Executa a callback de sucesso
      callbackSuccess(response);
    },
    error: function(){
      // Executa o callback de falha
      callbackFail();
    }

  });
}
