class ServiceDAO
{	
	/**
	* Get all services records existents into database
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	getServices(callbackSuccess, callbackFail)
	{
		$.ajax({
			type:"GET",
			url: api['service'],
			dataType:'json',
			success:function(response){
				// console.log(response);
				// Success callback
				callbackSuccess(response);
			},
			error:function(a,error,c){
				// Fail callback
				if(callbackFail != null) {callbackFail(error)};
			}
		});
	}

	/**
	* Get service's details existents into database by partner id
	* @param  partnerId Partner's id 
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	getServiceDetailsByPartner(partnerId, callbackSuccess, callbackFail)
	{
		$.ajax({
			type:"GET",
			url: `${api['service_details']}?partnerId=${partnerId}`,
			dataType:'json',
			success:function(response){
				// console.log(response);
				// Success callback
				callbackSuccess(response);
			},
			error:function(a,error,c){
				// Fail callback
				if(callbackFail != null) {callbackFail(error)};
			}
		});
	}

	/**
	* Get all service providers existents into database by service name
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	getServiceProviders(serviceName, callbackSuccess, callbackFail)
	{
		$.ajax({
			type:"GET",
			url: `${api['service_provider']}?service=${serviceName}`,
			dataType:'json',
			success:function(response){
				// console.log(response);
				// Success callback
				callbackSuccess(response);
			},
			error:function(a,error,c){
				// Fail callback
				if(callbackFail != null) {callbackFail(error)};
			}
		});
	}

	/**
	* Get all accomplished service existents into database by client id
	* @param callbackSuccess(data) Callback executed in success on get data 
	* @param [callbackFail(error)] Callback executed in fail on get data 
	*/
	getAccomplishedServiceByClientId(clientId, callbackSuccess, callbackFail)
	{
		$.ajax({
			type:"GET",
			url: `${api['service']}?id=${clientId}`,
			dataType:'json',
			success:function(response){
				// console.log(response);
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