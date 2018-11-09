<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	
</body>
<script type="text/javascript" charset="utf-8" async defer>
		document.addEventListener('DOMContentLoaded', function(){

			/** Irá verificar se tem ou não permissão**/
			if(Notification.permission !== 'granted'){
				Notification.requestPermission();
			}

		});

		/** nossa função que irá passar os parâmetros e irá verificar novamente se o navegador possui noifications**/
		function notificacao(icon, title, mensagem, link){
			
			if(!Notification){
				alert('Seu navegador não possui notifications');
				return;
			}

			if(Notification.permission !== 'granted'){
				Notification.requestPermission();
			}else{

				var notification = new Notification(title, {
					icon: icon,
					body: mensagem
				});

				/** Quando a notificação for clicada, irá enviar para um site**/
				notification.onclick = function(){
					window.open(link);
				}
			}

		}

		var icon = 'https://img-21.ccm2.net/1-NtiXuJNqGFChdD_IIpOnM9aOA=/200x/31027358c0f24fd3bd484a485b5a652c/ccm-faq/1538-9tLde1xY3nSyajQH-s-.png';
		var title = 'Teste';
		var mensagem = 'Primeira notificação';
		var link = 'http://www.avwlaser.com.br'
		notificacao(icon, title, mensagem, link);
	

</script>
</html>