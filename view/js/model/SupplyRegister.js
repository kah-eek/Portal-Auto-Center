class SupplyRegister
{
	// Default constructor
	constructor
	(
		idTipoCombustivel, 
		idVeiculoCliente, 
		quilometroRodado,
		valorAbastecimento,  
		geolocationObj,
		logControleAbastecimento,
		idControleAbastecimento
	)
	{
		this.idTipoCombustivel = idTipoCombustivel; 
		this.idVeiculoCliente = idVeiculoCliente;
		this.quilometroRodado = quilometroRodado;
		this.valorAbastecimento = valorAbastecimento;
		this.logControleAbastecimento = logControleAbastecimento;
		this.latitude = geolocationObj.latitude;
		this.longitude = geolocationObj.longitude; 
		this.idControleAbastecimento = idControleAbastecimento;
	}

	/**
	* Insert a new supply register into database
	* @param SupplyRegisterObj Object that will be inserted into database
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	setSupplyRegister(supplyRegisterObj, callbackSuccess, callbackFail)
	{
		new SupplyRegisterDAO().setSupplyRegister(supplyRegisterObj, callbackSuccess, callbackFail);
	}
}