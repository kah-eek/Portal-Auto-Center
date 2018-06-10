class ShoppingCart 
{
	/*
		Default constructor
	*/
	// Create a shopping cart in local storage
	constructor()
	{
		// Create shooping cart in local storage
		localStorage.setItem('shopping_cart',JSON.stringify([]));
	}

	/**
	* Get amount that one products exists in shopping cart
	* @param productId Product's id
	* @return int Amount the product exists in shopping cart
	*/
	static getProductsCount(productId)
	{
		shoppingCart = this.getShoppingCart();
		var amount = 0;

		for(var i = 0; i < shoppingCart.length; i++)
		{
			if (shoppingCart[i].order.productId == productId)
			{
				amount += 1;
			}
		}

		return amount;
	}

	/**
	* Get products' id existing in shopping cart
	* @return array List containing products's id existing in shopping cart
	* @return empty array Fail in attempt to get products's id list existing in shopping cart
	*/
	static getProductsId()
	{
		shoppingCart = this.getShoppingCart();
		var returnList = [];
		var productAmount = [];

		if (shoppingCart.length > 0)
		{

			for(var i = 0; i < shoppingCart.length; i++)
			{	
				var productId = shoppingCart[i].order.productId;			
				productAmount[productId] = 	ShoppingCart.getProductsCount(productId);			
			}

			for(var j = 0; j < shoppingCart.length; j++)
			{
				var id = shoppingCart[j].order.productId;

				if (ShoppingCart.getProductsCount(id) == productAmount[id])
				{
					returnList.push(id);
					productAmount[id] = -1;
				}

			}

			// console.log(returnList);

			return returnList;
		}

		return returnList;
	}

	/**
	* Get the shopping cart object
	* @return JSON Shopping cart object
	*/
	static getShoppingCart()
	{
		return JSON.parse(localStorage.getItem('shopping_cart'));
	}

	/**
	* Get full amount existent in shopping cart to user to pay
	* @return float Total amount to user to pay
	*/
	static getFullAmount()
	{
		var shoppingCart = ShoppingCart.getShoppingCart();
		var totalPay = 0;

		for(var i = 0; i < shoppingCart.length; i++)
		{
			totalPay += parseFloat(shoppingCart[i].order.price);
		}

		return totalPay;
	}

	/**
	* Add a new order into shopping cart
	* @param orderObj Order that will insert into shopping cart
	*/
	static addOrderToCart(orderObj)
	{
		var shoppingCart = JSON.parse(localStorage.getItem('shopping_cart'));

        shoppingCart.push({'order':orderObj});

        localStorage.setItem('shopping_cart',JSON.stringify(shoppingCart));
	}

	/**
	* Remove selected order from shopping cart 
	* @param orderId Order id
	* @return true Order removed form shopping cart
	* @return false Fail in to attempt remove order form shopping cart
	*/
	static removeOrder(orderId)
	{
		var shoppingCart = ShoppingCart.getShoppingCart();
		var newShoppingCart = [];

		// console.log(orderId);
		console.log(shoppingCart);

		for(var j = 0; j < shoppingCart.length; j++)
		{
			if (shoppingCart[j].order.productId != orderId) 
			{
				newShoppingCart.push(shoppingCart[j]);
			}
		}

		// Set in shopping cart the remaining orders
		localStorage.setItem('shopping_cart', JSON.stringify(newShoppingCart));		

		// Verify if shopping cart has changed
		if(ShoppingCart.getShoppingCart().length != shoppingCart.length)
		{
			return true;
		}

		return false;
	}

	/**
	* Add a new order into shopping cart
	* @param orderObj Order that will insert into shopping cart
	*/
	// removeOrderFromCart(orderObj)
	// {
	// 	var shoopingCart = JSON.parse(localStorage.getItem('shooping_cart'));

 //        shoopingCart.push({'order':order});

 //        localStorage.setItem('shooping_cart',JSON.stringify(shoopingCart));
	// }

}