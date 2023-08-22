<html>
	<head>
		<title> Calculadora </title>
			<style>
				.op-mat 
				{
					display: inline-block;
					background-color: #f5f5f5;
					color: black;
					border: 5px outset #daecee;
					border-radius: 5px; 
					font-size: 70px;
					position: absolute:
					cursor: pointer;
					width: 100px;
					height: 100px;
					line-height: 1.5;
				}
				.op-mat input[type="radio"] 
				{
					display: none;
				}
				
				.op-mat:active 
				{
					display: inline-block;
					background-color: #e0ffff;
					color: black;
					border: 5px outset #b0e0e6;
					border-radius: 5px;
					position: absolute:
					cursor: pointer;
					text-align: center;
					vertical-align: baseline;
					width: 100px;
					height: 100px;
					line-height: 1.5;
				}
				.op-mat input[type="radio"]:checked + label 
				{
					background-color: #f8f8ff ;
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
					bottom: 30px;
					right: 80px;
					width: 200px;
					height: 75px;
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
					bottom: 30px;
					right: 80px;
					width: 200px;
					height: 75px;
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
					bottom: 30px;
					right: 80px;
					width: 200px;
					height: 75px;
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
					cursor: pointer;
					text-align: center;
					width: 350px;
					height: 520px;
					left: 682px;
					line-height: 1.5;
				}
			</style>
	</head>
	<body style="background-color:Black;color:White;"> 
		<h1><ul><li>Soma</li></ul></h1> 
		<form class="calculadora" action="opoption.php" method="GET">
			Operador 1: <input style="width: 150px; margin-top: 15px; height: 40px;" type="text" name="op1">
			<br></br>
			Operador 2: <input style="width: 150px; height: 40px;" type="text" name="op2">
			<br></br>
			<label class="op-mat">
			<input type="radio" value="+" name="operacao">+
			</label>
			<label class="op-mat">
			<input type="radio" value="-" name="operacao">-
			</label>
			<br></br>
			<label class="op-mat">
			<input type="radio" value="*" name="operacao">*
			</label>
			<label class="op-mat">
			<input type="radio" value="/" name="operacao">/
			</label>
			<br></br>
			<br></br>
			<input class="resultado" type="submit" value="=">
		</form>
    </body>
</html>
