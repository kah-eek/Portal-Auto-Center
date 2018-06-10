class Order
{
	// Default constructor
	constructor(productId, price, clientId, orderSituationId, requestDate)
	{
		this.productId = productId;
		this.price = price;
		this.clientId = clientId;
		this.orderSituationId = orderSituationId;
		this.requestDate = requestDate;

		localStorage.setItem('order',JSON.stringify(this));
	}

	/**
	* Return the current Order existent on application
	* @return OrderPayment The current Order existent on application
	*/
	static getOrder()
	{
		return JSON.parse(localStorage.getItem('order'));
	}

	/**
	* Create a orders list in local storage
	*/
	static createOrderGroup()
	{
		// Create a list with Order objectes
        localStorage.setItem('orderGroup',JSON.stringify([]));		
	}

	/**
	* Get the order group
	* @return array Order objects array on JSON format
	*/
	static getOrderGroup()
	{
		return JSON.parse(localStorage.getItem('orderGroup'));
	}

	/**
	* Add a new order to order list
	* @param orderObj Order that will insert into orders list
	*/
	static addOrderToGroup(orderObj)
	{
		var orderGroup = JSON.parse(localStorage.getItem('orderGroup'));

        orderGroup.push({'order':orderObj});

        localStorage.setItem('orderGroup',JSON.stringify(orderGroup));
	}

	/**
	* Insert a new order register into database
	* @param orderObj Object that will be inserted into database
	* @param callbackSuccess(data) Callback executed in success on get data 
	* @param [callbackFail(error)] Callback executed in fail on get data 
	*/
	requestNewOrder(orderObj, callbackSuccess,callbackFail)
	{
		new OrderDAO().requestNewOrder(orderObj, callbackSuccess,callbackFail);
	}
}