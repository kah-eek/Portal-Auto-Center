class FuelSupplyDAO
{

	/**
	* Get all fuel supplies records existents into database by client id
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data
	*/
	getFuelSuppliesByClientId(clientId, callbackSuccess, callbackFail)
	{
		$.ajax({
			type:"GET",
			url: `${api['fuel_supply']}?clientId=${clientId}`,
			dataType:'json',
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