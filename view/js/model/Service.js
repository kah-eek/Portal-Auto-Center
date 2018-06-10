class Service
{

	/**
	* Get all services records existents into database
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	static getServices(callbackSuccess, callbackFail)
	{
		new ServiceDAO().getServices(callbackSuccess, callbackFail);
	}

	/**
	* Get service's details existents into database by partner id
	* @param  partnerId Partner's id 
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	getServiceDetailsByPartner(partnerId, callbackSuccess, callbackFail)
	{
		new ServiceDAO().getServiceDetailsByPartner(partnerId, callbackSuccess, callbackFail);
	}

	/**
	* Get all service providers existents into database
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	static getServiceProviders(callbackSuccess, callbackFail)
	{
		new ServiceDAO().getServiceProviders(callbackSuccess, callbackFail);
	}

	/**
	* Get all accomplished service existents into database by client id
	* @param callbackSuccess(data) Callback executed in success on get data 
	* @param [callbackFail(error)] Callback executed in fail on get data 
	*/
	getAccomplishedServiceByClientId(clientId, callbackSuccess, callbackFail)
	{
		new ServiceDAO().getAccomplishedServiceByClientId(clientId, callbackSuccess, callbackFail);
	}

}