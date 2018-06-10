<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Portal Auto Fast - Login cliente</title>
	<link rel="stylesheet" type="text/css" href="view/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="view/css/padroes.css">
	<link rel="stylesheet" type="text/css" href="view/css/modal_login_cliente.css">
</head>
<body>

	<form class="container-form-lg" name="frmDadosPag">
		
		<div class="caixa-entrada-frm-log">
			<label for="txtNumeroCartao" class="field-label">Número do Cartão</label>
	        <input id="txtNumeroCartao" required maxlength="19" class="android-input input-text" type="text" name="txtNumeroCartao">

	        <label for="txtCvv" class="field-label">CVV</label>
	        <input id="txtCvv" required class="android-input input-text" maxlength="3" type="text" name="txtCvv">

	        <label for="txtExpirateMY" class="field-label">Vencimento (mm/aa)</label>
	        <input id="txtExpirateMY" maxlength="5" required class="android-input input-text" type="text" name="txtExpirateMY">

	        <label for="txtHolderName" class="field-label">Titular do cartão</label>
	        <input id="txtHolderName" required maxlength="40" class="android-input input-text" type="text" name="txtHolderName">
		</div>

        <input type="submit" class="input-submit-frm-log" name="btnLogar" value="finalizar pagamento">

	</form>

	<script src="view/js/pac_framework.js"></script>

	<script>

		// Set masks on fields
      // $('#txtNumeroCartao').mask('0000-0000-0000-0000');

      $('#txtNumeroCartao').keydown(function(e){

        var txt = $(this).val();
        var key = e.keyCode;

        if(txt.length == 4 || txt.length == 9 || txt.length == 14 && key != 8)
        {
          $('#txtNumeroCartao').val($('#txtNumeroCartao').val()+'-');
        }
      });
      
      // Mask - expiretion
      $('#txtExpirateMY').keydown(function(e){

        var txt = $(this).val();
        var key = e.keyCode;

        if(txt.length == 2 && key != 8)
        {
          $('#txtExpirateMY').val($('#txtExpirateMY').val()+'/');
        }
      });


		$('form[name="frmDadosPag"]').submit(function(e){
			e.preventDefault();

	        var cardNumber = $('#txtNumeroCartao').val();
	        var cardCvv = $('#txtCvv').val();
	        var cardExpirationMonth = $('#txtExpirateMY').val().substring(0,2);
	        var cardExpirationYear = $('#txtExpirateMY').val().substring(3);
	        var cardHolderName = $('#txtHolderName').val();

	        var payment = new Payment(
	          10000,
	          cardNumber,
	          cardCvv,
	          cardExpirationMonth,
	          cardExpirationYear,
	          cardHolderName,
	          'credit_card'
	        );  

	        console.log(payment);

	        var client = new Client(
	        	345,
				'Otremba',
				'1998-05-23',
				'42757114085',
				'otemba.hick@hotmail.com',
				'11998084331',
				1,
				'M',
				'1135997659',
				'4',
				null
	        );

	        var billing = new Billing(
	          client.nome,
	          'br',
	          'Rua Fausto Bueno',
	          '564',
	          'São Paulo',
	          'Itapevi',
	          'Parque das Serras',
	          '06387619'
	        );

	        console.log(billing);

	        var customer = new Customer(
	          client.nome,
	          client.cpf,
	          client.celular,
	          client.email
	        );		

	        console.log(customer);

	        var orderPayment = JSON.parse(localStorage.getItem('orderPayment'));

	   //      var orderPayment = new OrderPayment(
	   //      	id,
				// title,
				// unitPrice,
				// 1,
				// true
	   //      );

	        payment.makePayment(
	            payment, 
	            customer, 
	            billing, 
	            orderPayment, 
	            function(resp)  
	            {
	              console.log(resp);
	              console.log(resp.tid);
	              console.log(resp.status);
	              if (resp.status === "paid")
	              {
	                // $('.toast').css({marginRight:'-132.38px'});
	                // Show a toast to user about the payment
	                alert('Compra efetuada com sucesso!');
	              }
	              else 
	              {
	                // $('.toast').css({marginRight:'-100px'});
	                alert('Cartão inválido');
	              }
	            }, 
	            function(error)
	            {
	              console.error(error);
	              alert('Falha na conexão do recurso !');
	            }
	          );

	          // Get the order existent on application
	          var order = Order.getOrder();

	          new Order().requestNewOrder(
	            order, 
	            function(resp) // callback de sucesso 
	            {
	              console.log(resp);
	              if (resp.status)
	              {
	                // setTimeout(function(){
	                  alert(resp.mensagem);
	                // },4000);

	                // Redirect user to home page
	                setTimeout(function(){
	                  $('.container_modal').slideToggle(500);
	                },2500);
	              }
	              else
	              {
	                alert(resp.error);
	              }
	            },
	            function(error) // callback de falha 
	            {
	              console.error(error);
	            }
	          );

		});
	</script>
</body>
</html>