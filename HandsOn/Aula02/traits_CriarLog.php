<?php
echo "<pre>";
session_start();

//criar trait log
trait log
{
	//	funcao salvarLog
	private function salvarLog($log_line)
	{
		if (!isset($_SESSION['log']))
		{
			$_SESSION['log'] = '';
		}
		$_SESSION['log'] . $log_line . '<br>';
	}
	//funcao exibirLog
	public function exibirLog()
	{
		return $_SESSION['log'];
	}	
}

//classe math
class Math
{
	
}

//classe conta extend math
class Conta extends Math
{
	use log;	
	//criar classe soma
	public function somar($a, $b)
	{
		$log_line = "$a + $b'<br>'";
		$this->salvarLog($log_line);
		return $a + $b;
	}

	public function subtracao($a, $b)
	{
		$log_line = "$a - $b'<br>'";
		$this->salvarLog($log_line);
		return $a - $b;
	}
}

$contas = new Conta();

echo $contas->somar(5, 5);
echo "<br>";
echo $contas->subtracao(10, 5);
echo "<br>";
echo $contas->exibirLog();

session_destroy();