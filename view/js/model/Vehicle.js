class Vehicle
{

	/**
	* @param clientId CLient's id
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	static getVehiclePlates(clientId, callbackSuccess,callbackFail)
	{
		new VehicleDAO().getVehiclePlates(clientId, callbackSuccess,callbackFail);
	}



}