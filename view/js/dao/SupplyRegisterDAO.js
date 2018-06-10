class SupplyRegisterDAO
{

	/**
	* Insert a new supply register into database
	* @param SupplyRegisterObj Object that will be inserted into database
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	setSupplyRegister(supplyRegisterObj, callbackSuccess, callbackFail)
	{
		$.ajax({
			type:"POST",
			url: api['supply_register'],
			data:{
				idTipoCombustivel: supplyRegisterObj.idTipoCombustivel,
				idVeiculoCliente: supplyRegisterObj.idVeiculoCliente,
				quilometroRodado: supplyRegisterObj.quilometroRodado,
				valorAbastecimento: supplyRegisterObj.valorAbastecimento,
				latitude: supplyRegisterObj.latitude,
				longitude: supplyRegisterObj.longitude,
				logControleAbastecimento : supplyRegisterObj.logControleAbastecimento
			},
			dataType:'json',
			success:function(response){
				// Success callback
				callbackSuccess(response);
			},
			error:function(a,error,c){
				console.error(error);
				// Fail callback
				if(callbackFail != null) {callbackFail(error)};
			}
		});
	}

}