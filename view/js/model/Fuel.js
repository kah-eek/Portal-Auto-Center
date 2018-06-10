class Fuel 
{

	/**
	* Get all fuels existents in database
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	static getFuels(callbackSuccess, callbackFail)
	{
		new FuelDAO().getFuels(callbackSuccess, callbackFail);
	}

}