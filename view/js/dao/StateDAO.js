class StateDAO
{
	/**
	* Verify if exists the client in database
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	getStates(callbackSuccess, callbackFail)
	{
		$.ajax({
			type:"GET",
			url: api['state'],
			dataType:'json',
			success:function(response){
				// Success callback
				callbackSuccess(response.estados);
			},
			error:function(a,error,c){
				// Fail callback
				if(callbackFail != null) {callbackFail(error)};
			}
		});
	}
}