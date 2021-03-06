<!-- ######################################

AUTOR: MATHEUS LIMA
INSTAGRAM: @tidazueira

###################################### -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>PHP QUASE DO JEITO CERTO - MATHEUS LIMA</title>
	
	<!-- JQUERY -->
	<script type="text/javascript" src="jquery.js"></script>
	
	<!-- url do seu projeto -->
	<script type="text/javascript">
		var URL_PROJETO = '<?= "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>';
	</script>
	
	<!-- ARQUIVO JS QUE FAZ A REQUISIÇÃO PARA PEGA OS DADOS DO ARQUIVO PHP/URL DE OUTRO SITE QUE RETORNA UM ARQUIVO JSON -->
	<script type="text/javascript" src="app.js"></script>
</head>
<body>
	
	<!-- DIV APENAS PARA EXEMPLO -->
	<div id="app">
		<ul id="lista"></ul>
	</div>

	<!-- FORMULÁRIO PARA ENVIO DE DADOS -->
	<form method="POST" accept-charset="UTF-8">
		<label for="nome">Nos diga o seu nome?</label>
		<input type="text" name="nome" id="nome" />
		<button type="submit">Enviar</button>
	</form>

	<h1></h1>
	
</body>
</html>