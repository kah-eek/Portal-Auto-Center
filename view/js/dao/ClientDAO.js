class ClientDAO
{
	/**
	* Verify if exists the client in database
	* @param  userObj User object containing client's authentication data to find the client
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	existsClient(userObj, callbackSuccess, callbackFail)
	{
		$.ajax({
			type:"POST",
			url: api['authentication'],
			dataType:'json',
			data:
			{
				usuario:userObj.username,
				senha:userObj.password
			},
			success:function(response){
				// Success callback
				callbackSuccess(response);
			},
			error:function(a,error,c){
				// Fail callback
				if(callbackFail != null) {callbackFail(error)};
			}
		});
	}

	/**
	* Insert new client into database  
	* @param  addressObj Address object that will inserted into database
	* @param  userObj User object that will inserted into database
	* @param  clientObj Client object that will inserted into database
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	signUp(formDataObj, callbackSuccess, callbackFail)
	{
		$.ajax({
			type:"POST",
			url: api['client_add'],
			processData: false,
			cache: false,
			contentType:false,
			dataType:'json',
			data: formDataObj,
			// {

				// street: addressObj.street,
				// number: addressObj.number,
				// city: addressObj.city,
				// stateId: addressObj.stateId,
				// zipCode: addressObj.zipCode,
				// neighborhood: addressObj.neighborhood,
				// complement: addressObj.complement,
				// usuario: userObj.usuario,
				// senha: userObj.senha,
				// idNivelUsuario: userObj.idNivelUsuario,
				// nome: clientObj.nome,
				// dtNasc: clientObj.dtNasc,
				// cpf: clientObj.cpf,
				// email: clientObj.email,
				// celular: clientObj.celular,
				// sexo: clientObj.sexo,
				// telefone: clientObj.telefone,
				// fotoPerfil: clientObj.fotoPerfil,
				// uploadPath: '../../../../'
			// }
			// ,
			success:function(response){
				// Success callback
				callbackSuccess(response);
			},
			error:function(a,error,c){
				// Fail callback
				if(callbackFail != null) {callbackFail(error)};
			}
		});
	}
}