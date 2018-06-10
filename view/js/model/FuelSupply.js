class FuelSupply
{

	/**
	* Get all fuel supplies records existents into database by client id
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data
	*/
	static getFuelSuppliesByClientId(clientId, callbackSuccess, callbackFail)
	{
		new FuelSupplyDAO().getFuelSuppliesByClientId(clientId, callbackSuccess, callbackFail);
	}

}
