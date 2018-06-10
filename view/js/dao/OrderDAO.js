class OrderDAO
{

	/**
	* Insert a new order register into database
	* @param orderObj Object that will be inserted into database
	* @param callbackSuccess(data) Callback executed in success on get data 
	* @param [callbackFail(error)] Callback executed in fail on get data 
	*/
	requestNewOrder(orderObj, callbackSuccess,callbackFail)
	{
		$.ajax({
			type:"POST",
			url: api['order'],
			data:{
				'idCliente':orderObj.clientId,
				'idProduto':orderObj.productId,
				'dataAgendada':orderObj.requestDate,
			},
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