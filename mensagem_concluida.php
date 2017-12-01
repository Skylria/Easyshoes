<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">	
		<style type="text/css">
			.f{
				background-color:  #ff8c00;
			}
			.ee{  font-family: Comic Sans, Comic Sans MS, cursive;
			    font-size: 3em;
			    font-weight: 300;
			    line-height: 55px;
			    margin-bottom: 25px;
			    text-align: center;
			    text-transform: none;
			}
			.zs{
				font-family: Andale Mono, monospace;
				font-size: 2em;
			}
			.ii{
				cursor: pointer;
			    text-align: center;
			    background-color:#ff8c00;
			    width: 10em;
			}
			.enviar {
				  -webkit-border-radius: 28;
				  -moz-border-radius: 28;
				  border-radius: 28px;
				  font-family: Georgia;
				  color: #ffffff;
				  font-size: 26px;
				  background: #e38532;
				  padding: 10px 20px 10px 20px;
				  text-decoration: none;
}
			.enviar:hover {
				  background: #101214;
				  background-image: -webkit-linear-gradient(top, #101214, #d99734);
				  background-image: -moz-linear-gradient(top, #101214, #d99734);
				  background-image: -ms-linear-gradient(top, #101214, #d99734);
				  background-image: -o-linear-gradient(top, #101214, #d99734);
				  background-image: linear-gradient(to bottom, #101214, #d99734);
				  text-decoration: none;
			}
		</style>
	</head>
		    <body>
		    	<center>
			    	<p class="ii">
	      				<i class="chevron-goodies chevron fa fa-chevron-down"></i>
	    			</p>
				    	<div class="f">
				    		<br><br>
							<p class="ee">Olá <?= $_SESSION['usuario']?>!</p><br> <br>
							<h3 class="zs">Sua mensagem foi enviada com sucesso. Deseja enviar outra?</h3><br> <br>
							<a href="pagina_funcionario.php"><button class="enviar">Enviar</button></a>
								
							
						</div>
			    </center>
			</body>
</html>
