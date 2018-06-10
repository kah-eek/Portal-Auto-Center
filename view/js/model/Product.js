class Product
{
	// Default constructor
	constructor
	(
		idProduto, 
		idModeloProduto, 
		idParceiro, 
		idCor, 
		idCategoria_produto, 
		nome, 
		preco, 
		conteudoEmbalagem, 
		garantia, 
		descricao, 
		observacao
	)
	{
		this.idProduto = idProduto;
		this.idModeloProduto = idModeloProduto;
		this.idParceiro = idParceiro;
		this.idCor = idCor;
		this.idCategoria_produto = idCategoria_produto;
		this.nome = nome;
		this.preco = preco;
		this.conteudoEmbalagem = conteudoEmbalagem;
		this.garantia = garantia;
		this.descricao = descricao;
		this.observacao = observacao;
	}

	/**
	* Create a products list in local storage
	*/
	createProductList()
	{
		// Create a list with Product objectes
        localStorage.setItem('products',JSON.stringify([]));		
	}

	/**
	* Get the products list in local storage
	* @return JSON Product object
	*/
	static getProductList()
	{
		return JSON.parse(localStorage.getItem('products'));
	}

	/**
	* Get all sold products from database by client id
	* @param  productId Product id
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	getProductsByClientId(clientId, callbackSuccess,callbackFail)
	{
		new ProductDAO().getProductsByClientId(clientId, callbackSuccess,callbackFail);
	}

	/**
	* Add a new product to products list
	* @param productObj Products that will insert into products list
	*/
	addProductToList(productObj)
	{
		var products = JSON.parse(localStorage.getItem('products'));

        products.push({'product':productObj});

        localStorage.setItem('products',JSON.stringify(products));
	}

	/**
	* Get all product's minified information
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	static getProductsMinInfo(callbackSuccess,callbackFail)
	{
		new ProductDAO().getProductsMinInfo(callbackSuccess,callbackFail);
	}

	/**
	* Get product's basic informations
	* @param  productId Product id
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	getProductBasicInfoById(productId, callbackSuccess,callbackFail)
	{
		new ProductDAO().getProductBasicInfoById(productId, callbackSuccess,callbackFail);
	}




}