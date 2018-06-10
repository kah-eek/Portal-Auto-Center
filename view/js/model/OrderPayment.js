class OrderPayment
{
	// Default constructor
	constructor
	(
		id,
		title,
		unitPrice,
		quantity,
		tangible
	)
	{
		this.id = id;
		this.title = title;
		this.unitPrice = unitPrice;
		this.quantity = quantity;
		this.tangible = tangible;

		localStorage.setItem('orderPayment',JSON.stringify(this));
	}

	/**
	* Return the current OrderPaymentGroup existent on application
	* @return Array OrderPayment objects existent on application
	*/
	static getOrderPayment()
	{
		return JSON.parse(localStorage.getItem('orderPayment'));
	}

	/**
	* Get the order payment group
	* @return array OrderPayment Objects array on JSON format
	*/
	static getOrderPaymentGroup()
	{
		return JSON.parse(localStorage.getItem('orderPaymentGroup'));
	}

	/**
	* Add a new product to products list
	* @param productObj Products that will insert into products list
	*/
	static addOrderPaymentToGroup(orderPaymentObj)
	{
		var orderPaymentGroup = JSON.parse(localStorage.getItem('orderPaymentGroup'));

        orderPaymentGroup.push({'orderPayment':orderPaymentObj});

        localStorage.setItem('orderPaymentGroup',JSON.stringify(orderPaymentGroup));
	}

	/**
	* Create a products list in local storage
	*/
	static createOrderPaymentGroup()
	{
		// Create a list with Product objectes
        localStorage.setItem('orderPaymentGroup',JSON.stringify([]));		
	}
}
