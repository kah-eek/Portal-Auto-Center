class AddressDAO 
{

	/**
	* Verify if exists the client in database
	* @param  userObj User object containing client's authentication data to find the client
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	getAddress(geolocationObj, dataObs, callbackSuccess, callbackFail)
	{
		$.ajax({
			type:"POST",
			url: `${api['google_geocode']}${geolocationObj.latitude},${geolocationObj.longitude}&key=AIzaSyD6MoQbD58d-CRFdNeefCXOpbpbTjG9kDQ`,
			dataType:'json',
			success:function(resp){
				// Success callback
				callbackSuccess(resp, dataObs);
			},
			error:function(a,error,c){
				// Fail callback
				if(callbackFail != null) {callbackFail(error)};
			}
		});
	}

}