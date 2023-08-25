<?PHP
	include 'soma.php';
	include 'subtracao.php';
	include 'multiplicacao.php';
	include 'divisao.php';
	include 'cosseno.php';
	include 'seno.php';
	include 'tangente.php';
	include 'potencia.php';
	
	$v1 = $_GET["op1"];
	$v2 = $_GET["op2"];
	if ($_SERVER["REQUEST_METHOD"] == "GET")
	{	
		if(isset($_GET["operacao"]))
		{
			$operacao= $_GET["operacao"];
			if (isset($_GET["op1"]) && empty($_GET["op2"]) && isset($_GET["operacao"])) {
				switch ($operacao)
				{
					case "cos":
					$result = cosseno($v1);
					header("Location: calculadora.php?result=$result");
					break;
					
					case "sen":
					$result = seno($v1);
					header("Location: calculadora.php?result=$result");
					break;
					
					case "tan":
					$result = tangente($v1);
					header("Location: calculadora.php?result=$result");
					break;
					
					default:
					$result = "error";
					header("Location: calculadora.php?result=$result");
					break;
				}	
			} else if(isset($_GET["op1"]) && isset($_GET["op2"]) && isset($_GET["operacao"])) { 
				if (!is_numeric($v1) || !is_numeric($v2)) 
				{
					$result = "notnum";
					header("Location: calculadora.php?result=$result");
				} else {
					switch ($operacao)
					{
						case "+":
						$result = soma($v1, $v2);
						header("Location: calculadora.php?result=$result");
						break;
						
						case "-":
						$result = subtracao($v1, $v2);
						header("Location: calculadora.php?result=$result");
						break;
						
						case "*":
						$result = multiplicacao($v1, $v2);
						header("Location: calculadora.php?result=$result");
						break;
						
						case "/":
						$result = divisao($v1, $v2);
						header("Location: calculadora.php?result=$result");
						break;
						
						case "potencia":
						$result = potencia($v1, $v2);
						header("Location: calculadora.php?result=$result");
						break;
					}	
				}
			}
		} else {
			$result = "error";
			header("Location: calculadora.php?result=$result");
		}
	}
    ?>
