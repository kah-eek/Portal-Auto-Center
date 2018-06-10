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
	<div class="titulo-lg">
		<h1>Auto Fast</h1>
	</div>

	<form class="container-form-lg" name="frmDadosLoginPag">
		
		<div class="caixa-entrada-frm-log">
			<label for="txt_usuario" class="field-label">Usuário</label>
	        <input id="txt_usuario" required class="android-input input-text" type="text" name="txt_usuario">

	        <label for="txt_senha" class="field-label">Senha</label>
	        <input id="txt_senha" required class="android-input input-text" type="password" name="txt_senha">
		</div>

        <input type="submit" class="input-submit-frm-log" name="btnLogar" value="entrar">

	</form>

	<script src="view/js/pac_framework.js"></script>

	<script>

		console.log();

		$('form[name="frmDadosLoginPag"]').submit(function(e){
			e.preventDefault();

			// Animação
			$('.modal').css({
				transition:'0.5s',
				height:'525px'
			});
			$('.caixa-entrada-frm-log').fadeOut(500);
			// ****************************************><

			// Descarregamento da tela de pagamento
			setTimeout(function(){

				$('.container-form-lg').css({
					paddingTop:'0'
				});

				$.ajax({
				  type:'POST',
		          url:'view/modal_dados_pagamento.php',
		          success:function(resp)
		          { 
		            // console.log(resp);
		            $('.container-form-lg').html(resp);
		          }
		        });
			},500);
			// ****************************************><
		});
	</script>
</body>
</html>