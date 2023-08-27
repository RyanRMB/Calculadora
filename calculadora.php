<html>
	<head>
		<title> Calculadora </title>
			<style>
				.opbas-mat 
				{
					display: inline-block;
					background-color: #f5f5f5;
					color: black;
					border: 5px outset #daecee;
					background-image: linear-gradient(to right, 
					rgba(218, 236, 238, 3),
					rgba(218, 236, 238, 0.25),
					rgba(218, 236, 238, 0.2),
					rgba(218, 236, 238, 0.15),
					rgba(218, 236, 238, 0.1),
					rgba(218, 236, 238, 0),
					#f5f5f5,
					rgba(141, 153, 154, 0),
					rgba(141, 153, 154, 0.05),
					rgba(141, 153, 154, 0.1),
					rgba(141, 153, 154, 0.15),
					rgba(141, 153, 154, 0.2),
					rgba(141, 153, 154, 0.25)
					);
					border-radius: 5px; 
					font-size: 70px;
					position: relative;
					cursor: pointer;
					margin-top: 10px;
					margin-left: 5px;
					top: 0px;
					right: 240px;
					width: 100px;
					height: 100px;
					line-height: 1.5;
				}
				.opbas-mat input[type="radio"] 
				{
					display: none;
				}
				
				.opbas-mat:active 
				{
					display: inline-block;
					background-color: #e0ffff;
					color: black;
					border: 5px outset #b0e0e6;
					background-image: linear-gradient(to right, #b0e0e6,  #e0ffff, #b0e0e6);
					font-size: 70px;
					position: relative;
					cursor: pointer;
					margin-top: 10px;
					margin-left: 5px;
					top: 0px;
					right: 240px;
					width: 100px;
					height: 100px;
					line-height: 1.5;
				}
				.opbas-mat input[type="radio"]:checked + label 
				{
					background-color: #f8f8ff;
					color: black;
				}
				.optrig-mat 
				{
					display: inline-block;
					background-color: #f5f5f5;
					color: black;
					border: 5px outset #daecee;
					border-radius: 5px; 
					font-size: 70px;
					position: relative;
					cursor: pointer;
					margin-top: 10px;
					margin-left: 5px;
					bottom: 240px;
					left: 115px;
					width: 100px;
					height: 100px;
				}
				.optrig-mat input[type="radio"] 
				{
					display: none;
				}
				
				.optrig-mat:active 
				{
					display: inline-block;
					background-color: #e0ffff;
					color: black;
					border: 5px outset #b0e0e6;
					font-size: 70px;
					position: relative;
					cursor: pointer;
					margin-top: 10px;
					margin-left: 5px;
					bottom: 240px;
					left: 115px;
					width: 100px;
					height: 100px;
					line-height: 1.5;
				}
				.optrig-mat input[type="radio"]:checked + label 
				{
					background-color: #f8f8ff;
					color: black;
					content: " Aviso: Você selecionou uma operação trigonométrica.";
					color: white;
					display: block;
				}
				
				.oplog-mat 
				{
					display: inline-block;
					background-color: #f5f5f5;
					color: black;
					border: 5px outset #daecee;
					border-radius: 5px; 
					font-size: 70px;
					position: relative;
					cursor: pointer;
					margin-top: 10px;
					margin-left: 5px;
					bottom: 240px;
					right: 62px;
					width: 100px;
					height: 100px;
					line-height: 1.5;
				}
				.oplog-mat input[type="radio"] 
				{
					display: none;
				}
				
				.oplog-mat:active 
				{
					display: inline-block;
					background-color: #e0ffff;
					color: black;
					border: 5px outset #b0e0e6;
					font-size: 70px;
					position: relative;
					cursor: pointer;
					margin-top: 10px;
					margin-left: 5px;
					bottom: 240px;
					right: 62px;
					width: 100px;
					height: 100px;
					line-height: 1.5;
				}
				.oplog-mat input[type="radio"]:checked + label 
				{
					background-color: #f8f8ff;
					color: black;
				}
				
				.resultado 
				{
					display: inline-block;
					background-color: #f5f5f5;
					color: black;
					border: 5px outset #daecee;
					border-radius: 5px;
					font-size: 50px;
					position: absolute;
					cursor: pointer;
					bottom: 17px;
					left: 372px;
					width: 350px;
					height: 108px;
					line-height: 1.5;
				}
				
				.resultado input[type="submit"] 
				{
					display: none;
				}
				.resultado:active 
				{
					display: inline-block;
					background-color: #e0ffff;
					color: black;
					border: 5px outset #b0e0e6;
					border-radius: 5px;
					font-size: 50px;
					position: absolute;
					cursor: pointer;
					bottom: 17px;
					left: 372px;
					width: 350px;
					height: 108px;
					line-height: 1.5;
				}
				.resultado input[type="submit"]
				{
					display: inline-block;
					background-color: #f5f5f5;
					color: black;
					border: 5px outset #daecee;
					border-radius: 5px;
					position: absolute;
					cursor: pointer;
					bottom: 15px;
					right: 10px;
					width: 75px;
					height: 230px;
					line-height: 1.5;
				}
				
				.resultado input[type="submit"]:checked + label 
				{
					background-color: #f8f8ff;
					color: black;
				}
				
				.calculadora
				{
					background-color: #f5f5dc;
					color: black;
					display: inline-block;
					position: relative;
					border-radius: 5px;
					text-align: center;
					width: 740px;
					height: 400px;
					left: 682px;
					line-height: 1.5;
				}
				
				br.a {
					line-height: 0.5em;
				}
			</style>
	</head>
	<body style="background-color:Black;color:White;"> 
		<h1><ul><li>CALCULADORA</li></ul></h1> 
		<form class="calculadora" action="opoption.php" method="GET">
			Operador 1: <input style="width: 150px; margin-top: 15px; height: 40px;" type="text" name="op1">
			<br></br>
			Operador 2: <input style="width: 150px; height: 40px;" type="text" name="op2">
			<br></br>
			<label class="opbas-mat">
			<input type="radio" style="right: 150px;" value="+" name="operacao">+
			</label>
			<label class="opbas-mat">
			<input type="radio" value="-" name="operacao">-
			</label>
			<div></div>
			<label class="opbas-mat">
			<input type="radio" value="*" name="operacao">*
			</label>
			<label class="opbas-mat">
			<input type="radio" value="/" name="operacao">/
			</label>
			<div></div>
			<label class="optrig-mat">
			<input type="radio" value="cos" name="operacao">cos
			</label>
			<label class="optrig-mat">
			<input type="radio" value="sen" name="operacao">sen
			</label>
			<label class="optrig-mat">
			<input type="radio" value="tan" name="operacao">tan
			</label>
			<label class="optrig-mat">
			<input type="radio" value="potencia" name="operacao">x^y
			</label>
			<div></div>
			<label class="oplog-mat">
			<input type="radio" value="log" name="operacao">log
			</label>
			<input class="resultado" type="submit" value="=">
		</form>
		<pre style="position: relative; left: 1350px; bottom:430px;"> 
		Sen, Cos e Tan apenas funciona com o operador 1.
		</pre>
		<pre style="position: relative; left: 1350px; bottom:430px;">
		Se for elevar um número o operador 1 é o número 
		a ser elevado, e o operador 2 o expoente.
		</pre>
		<pre style="position: relative; left: 1350px; bottom:430px;">
		Se for calcular um logaritmo o operador 2 será a 
		base, e caso deixe o operador 2 vazio será 
		retornado o Log de base 10.
		</pre>
		<?PHP 
		$result = $_GET["result"];
		echo "<h1>Resultado: $result</h1>";
		if(isset($result))
		{
			if(is_numeric($result))
			{
				echo "<h1>Resultado: $result</h1>";
			} else {
				if($result=="error")
				{
					echo "<h1>Por favor, selecione uma operação, verifique se preencheu os campos corretamente e tente novamente.</h1>";
					echo "<br></br>";
					echo "<h3>Ps:Caso queira calcular números decimais utilize '.' e não ','.</h3>";
				} 
				if ($result=="notnum")
				{
					echo "<h1>Por favor, digite somente números.</h1>";
					echo "<br></br>";
					echo "<h3>Ps:Caso queira calcular números decimais utilize '.' e não ','.</h3>";
				}
			}
		} else {
			echo "<h1>Erro!</h1>";
		}
		?>
    </body>
</html>
