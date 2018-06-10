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
			<label for="txt_num-cart" class="field-label">Número do Cartão</label>
	        <input id="txt_num-cart" required class="android-input input-text" type="text" name="txt_num-cart">

	        <label for="txt_cvv" class="field-label">CVV</label>
	        <input id="txt_cvv" required class="android-input input-text" type="password" name="txt_cvv">

	        <label for="txt_venc" class="field-label">Vencimento (mm/aa)</label>
	        <input id="txt_venc" required class="android-input input-text" type="password" name="txt_venc">

	        <label for="txt_titular" class="field-label">Titular do cartão</label>
	        <input id="txt_titular" required class="android-input input-text" type="text" name="txt_titular">
		</div>

        <input type="submit" class="input-submit-frm-log" name="btnLogar" value="finalizar pagamento">

	</form>

	<script src="view/js/pac_framework.js"></script>

	<script>
		$('form[name="frmDadosLoginPag"]').submit(function(e){
			e.preventDefault();



			

		});
	</script>
</body>
</html>