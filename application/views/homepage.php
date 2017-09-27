<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>	
	<style type="text/css">


	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	#tipos-news {
		width: 100%;
		margin-bottom: 20px;
		display: flex;
		justify-content: space-around;

	}

	#holder-previa {
		margin: 40px;
		display: flex;
		justify-content: center;
	}
	</style>
	
</head>
<body>

<div id="container">
	<h1>Controle de newsletter</h1>

	<div id="body">
		<p>Escolha as categorias de newsletter:</p>

		<div id="tipos-news">
			
			<span>
				<label for="Esporte">Esporte</label>
				<input type="checkbox" checked id="Esporte" onclick="verificar_input('Esporte');"/>			
			</span>
				
			<span>
				<label for="Tecnologia">Tecnologia</label>
				<input type="checkbox" checked id="Tecnologia" onclick="verificar_input('Tecnologia');"/>
			</span>

			<span>
				<label for="Alimentação">Alimentação</label>
				<input type="checkbox" checked id="Alimentação" onclick="verificar_input('Alimentação');"/>
			</span>

			<span>
				<label for="Segurança">Segurança</label>
				<input type="checkbox" checked id="Segurança" onclick="verificar_input('Segurança');"/>
			</span>

			<span>
				<label for="Ciencia">Ciencia</label>
				<input type="checkbox" checked id="Ciencia" onclick="verificar_input('Ciencia');"/>
			</span>
		</div>		
	</div>
</div>

<div id="container">	
	<h1>Prévia da newsletter</h1>
	<div id="holder-previa">
		<div id="previa" style="width: 500px;">
			<div style="width: 100%;	">
				<h1 style="font-size: 3em; height: 40px; text-align: center;">CORPO DO EMAIL</h1>
				<p style="width: 100%; text-align: center;">Sistema gerencial de newsletters</p>
			</div>

			<div>
				<img src="https://www.infobell.com.br/update/teste/newsletter.jpg" alt="Imagem da empresa" width="100%" height="200px">
			</div>

			<div>
				<span style="width: 500px; margin: 30px 0; text-align: left;">Olá, mundo!<br />
				Estou participando do teste de desenvolvedor PHP<br><br><br></span>
				
				<?php

					function remove_t($data) {
						$data = explode("-", $data);
						return $data[2]."/".$data[1]."/".$data[0];
					}
					
					foreach ($resultado as $key => $value) {						
						echo '<div class="news" style="width: 500px; height: 100px; display: flex; margin-bottom: 20px; overflow: hidden;" data-categoria="'.$value->titulo.'">					
										<div style="width: 150px; height: 100px;">
											<div style="width: 100%;">
												<img src="'.$value->imagem.'" alt="'.$value->titulo.'" width="100%">
											</div>
										</div>
									
										<div style="width: 350px; display: flex; margin-left: 20px; flex-wrap: wrap;">
											<div style="width: 50%;"><p>'.$value->titulo.'</p></div>
											<div style="width: 48%;"><p style="text-align: right">'.remove_t($value->data).'</p></div>						
											
											<div style="width: 100%;"><p>'.$value->resumo.'</p></div>
										</div>					
									</div>';
					}						
					
				?>
				

				
			</div>

			<div style="height: 30px;">
				<h6>Copyright paulo marques</h6>
			</div>
		</div>
	</div>

	
</div>

<div id="container" style="display: flex; justify-content: space-between;">
	<input type="email" id="mail" placeholder="Insira seu email" style="padding: 15px; width: 500px; font-size: 18px;"/>
	<input type="submit" value="Enviar" style="padding: 15px; font-size: 18px;" onclick="enviar();"/>
</div>

</body>
</html>

<script>
		function _(caminho) {
			return document.getElementById(caminho);
		}

		function __(caminho) {
			return document.getElementsByClassName(caminho);
		}

		
		function verificar_input(valor) {

			if(_(valor).checked == true) {
				
				check_news(valor, "ativar");
			} else {
				check_news(valor, "desati");				
			}
		}

		function check_news(valor, ativar) {
			
			for(var i=0; i < __("news").length; i++) {
				
				if(valor === __("news")[i].dataset.categoria) {

					if(ativar == "ativar") {						
						__("news")[i].style = "display: flex";
					} else {
						__("news")[i].style = "display: none";
					}
				}
			}
		}

		function enviar() {

			var mail = _("mail").value;
			var html = _("previa").innerHTML;

			var dataPost = new FormData();
			dataPost.append("mail", mail);
			dataPost.append("dados", html);

			var ajax = new XMLHttpRequest();
			ajax.addEventListener("load", mailSend, false);
			ajax.open("POST", "<?php echo base_url(''); ?>index.php/welcome/ajax", true);
			ajax.send(dataPost);

			function mailSend(e) {
				console.log(e.target.responseText);
				if(e.target.responseText) {

				} else {
					
				}
			}
		}


		
				
			
		
	</script>