class Client
{

	// Default constructor
	constructor
	(
		idCliente,
		nome,
		dtNasc,
		cpf,
		email,
		celular,
		idEndereco,
		sexo,
		telefone,
		idUsuario,
		fotoPerfil
	)
	{
		this.idCliente = idCliente;
		this.nome = nome;
		this.dtNasc = dtNasc;
		this.cpf = cpf;
		this.email = email;
		this.celular = celular;
		this.idEndereco = idEndereco;
		this.sexo = sexo;
		this.telefone = telefone;
		this.idUsuario = idUsuario;
		this.fotoPerfil = fotoPerfil;
	}

	/**
	* Verify if exists the client in database
	* @param  userObj User object containing client's authentication data to find the client
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	existsClient(userObj, callbackSuccess, callbackFail)
	{
		new ClientDAO().existsClient(userObj, callbackSuccess, callbackFail);
	}

	/**
	* Get the current client logged on application
	* @return JSON Current client logged on application
	*/
	getClientFromApp()
	{
		return JSON.parse(localStorage.getItem('client'));
	}

	/**
	* Insert new client into database  
	* @param  addressObj Address object that will inserted into database
	* @param  userObj User object that will inserted into database
	* @param  clientObj Client object that will inserted into database
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	signUp(addressObj, userObj, clientObj, callbackSuccess, callbackFail)
	{
		new ClientDAO().signUp(addressObj, userObj, clientObj, callbackSuccess, callbackFail);	
	}


}