class Address
{
	// Default constructor
	constructor
	(
		street,
    	number,
    	city,
    	stateId,
    	zipCode,
    	neighborhood,
    	complement
	)
	{
		this.street = street,
		this.number = number,
		this.city = city,
		this.stateId = stateId,
		this.zipCode = zipCode,
		this.neighborhood = neighborhood,
		this.complement = complement
	}

	/**
	* Verify if exists the client in database
	* @param  userObj User object containing client's authentication data to find the client
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	getAddress(geolocationObj, dataObs, callbackSuccess, callbackFail)
	{
		new AddressDAO().getAddress(geolocationObj, dataObs, callbackSuccess, callbackFail);
	}

}