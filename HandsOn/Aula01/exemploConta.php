<?php
echo "<pre>";
abstract class Conta
{
	private $saldo = 0;
	public $numConta  =null;

	public function __construct ($saldo = 1500, $numConta = '12345-6')
	{
		$this->numConta = $numConta;
		$this->saldo = $saldo;
	}

	public function sacar ($valor)
	{
		return $this->saldo -= $valor;		
		echo "<p>Saque no valor de R$ {$valor} reais</p>";	
	}

	public function depositar ($valor)
	{
		return $this->saldo += $valor;
		echo "<p>Deposito no valor de R$ {$valor} reais</p>";	
	}

	public function verSaldo ()
	{
		echo "<p>Saldo atual de R$ {$valor} reais</p>";	
	}

	public function numConta ()
	{
		echo "<p>Numero da conta: {$numConta}</p>";	
	}
}

class Corrente extends Conta
{
	private $rendimento = 1.00;
	public function depositar $valor()	
	{
		return $this->saldo += $valor * $this->rendimento;
	}
}

class Poupanca extends Conta
{
	private $rendimento = 1.05;
	public function depositar $valor()	
	{
		return $this->saldo += $valor * $this->rendimento;
	}
}

//final class ClasseFinal{}
























}