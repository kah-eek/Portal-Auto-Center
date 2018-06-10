class Payment
{
	// Default constructor
	constructor
	(
		amount,
		cardNumber,
		cardCvv,
		cardExpirationMonth,
		cardExpirationYear,
		cardHolderName,
		paymentMethod
	)
	{
		this.amount = amount;
		this.cardNumber = cardNumber;
		this.cardCvv = cardCvv;
		this.cardExpirationMonth = cardExpirationMonth;
		this.cardExpirationYear = cardExpirationYear;
		this.cardHolderName = cardHolderName;
		this.paymentMethod = paymentMethod;
	}

	/**
	* Parse price to insert to payment payload
	* @param fullPrice Full price to parse it
	* @return String Price formatted
	*/
	parsePrice(fullPrice)
	{
		if (fullPrice.indexOf('.') == -1) 
		{
			return fullPrice+'00';
		}
		else
		{
			return fullPrice.substring(0,fullPrice.indexOf('.'))+fullPrice.substring(fullPrice.indexOf('.')+1);
		}
		// 300.00
	}

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
    	new PaymentDAO().makePayment(paymentObj, customerObj, billingObj, orderPaymentObj, callbackSuccess, callbackFail);
    }
}