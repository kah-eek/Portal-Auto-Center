class PaymentDAO
{

  /**
  * Make a payment  
  * @param paymentObj Object Payment that will transferred to payment
  * @param customerObj Object Customer that will inserted on payment
  * @param billingObj Object Billing that will inserted on payment
  * @param orderPaymentObj Object OrderPayment that will inserted on payment
  * @param callbackSuccess(data) Callback executed in success on get data 
  * @param [callbackFail(error)] Callback executed in fail on get data 
  */
  makePayment(paymentObj, customerObj, billingObj, orderPaymentObj, callbackSuccess, callbackFail)
  {
	$.ajax({
		type:"POST",
		url: api['payment'],
		data: {
			amount:paymentObj.amount,
			cardNumber:paymentObj.cardNumber,
			cardCvv:paymentObj.cardCvv,
			cardExpirationMonth:paymentObj.cardExpirationMonth,
			cardExpirationYear:paymentObj.cardExpirationYear,
			cardHolderName:paymentObj.cardHolderName,
			paymentMethod:'credit_card',
			name:customerObj.name,
			cpf:customerObj.cpf,
			phoneNumber:customerObj.phoneNumber,
			email:customerObj.email,
			country:'br',
			street:billingObj.street,
			street_number:billingObj.streetNumber,
			state:billingObj.state,
			city:billingObj.city,
			neighborhood:billingObj.neighborhood,
			zipcode:billingObj.zipcode,
			id:orderPaymentObj.id,
			title:orderPaymentObj.title,
			unitPrice:orderPaymentObj.unitPrice,
			tangible:orderPaymentObj.tangible,
			quantity:orderPaymentObj.quantity
		},
		// dataType:'json',
		success:function(response){
			// Full response
			// console.log(response);
			var jsonResponse = JSON.parse(response.substring(response.indexOf('END PUBLIC KEY-----')+24));
			// console.log(jsonResponse);
			// Success callback
			callbackSuccess(jsonResponse);
		},
		error:function(a,error,c){
			// Fail callback
			if(callbackFail != null) {callbackFail(error)};
		}
	});;
   }	

}