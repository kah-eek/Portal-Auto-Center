class VehicleDAO
{

	/**
	* @param clientId CLient's id
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	getVehiclePlates(clientId, callbackSuccess,callbackFail)
	{
		$.ajax({
			type:"GET",
			url: `${api['vehicle']}?clientId=${clientId}`,
			dataType:'json',
			success:function(response){
				// Success callback
				callbackSuccess(response);
			},
			error:function(a,error,c){
				// Fail callback
				if(callbackFail != null) {callbackFail(error)};
			}
		});;
	}	


}