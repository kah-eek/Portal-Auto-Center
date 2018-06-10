class FuelDAO
{

	/**
	* Get all fuels existents in database
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	getFuels(callbackSuccess, callbackFail)
	{
		$.ajax({
			type:"GET",
			url: api['fuel'],
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