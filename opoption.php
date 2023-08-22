<?PHP
	$v1 = $_GET["op1"];
	$v2 = $_GET["op2"];
	if (isset($_GET["op1"]) && isset($_GET["op2"]) && isset($_GET["operacao"])) 
	{
		$operacao= $_GET["operacao"];
		if (!is_numeric($v1) || !is_numeric($v2)) 
		{
			echo "<h1>Por favor, digite somente números.</h1>";
			echo "<br></br>";
			echo "<h3>Ps:Caso queira calcular números decimais utilize '.' e não ','.</h3>";
		} else {
			switch ($operacao)
			{
				case "+":
                function soma($v1,$v2)
                {
    				$result = $v1 + $v2;
    				echo "<h1>Resultado: $result</h1>";
                }
				break;
				
				case "-":
                function subtracao($v1,$v2)
                {
				    $result = $v1 - $v2;
				    echo "<h1>Resultado: $result</h1>";
                }
				break;
				
				case "*":
                function($v1,$v2)
                {
    				$result = $v1 * $v2;
    				echo "<h1>Resultado: $result</h1>";
                }
				break;
				
				case "/":
                function divisao($v1,$v2)
                {
    				$result = $v1 / $v2;
    				echo "<h1>Resultado: $result</h1>";
                }
				break;
			}
		}
	} else {
		echo "<h1>Por favor, selecione uma operação, verifique se preencheu os campos corretamente e tente novamente.</h1>";
		echo "<br></br>";
		echo "<h3>Ps:Caso queira calcular números decimais utilize '.' e não ','.</h3>";
	}
    ?>
