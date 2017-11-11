<?php
echo "<pre>";

class CadastroCliente
{
	public $titular = 'Stefano';
	public function titular()
	{
		echo $this->titular;		
	}	
	public $agencia = '9876-5';
	public function agencia()
	{
		echo $this->agencia;
	}	
	public $conta = '12345-6';
	public function conta()
	{
		echo $this->conta;
	}
};

$cadastro = new CadastroCliente();

echo 'CADASTRO CORRENTISTA';
echo '<br>';
echo 'Nome do titular: ';
$cadastro ->titular(); 
echo '<br>';
echo 'Agencia: ';
$cadastro ->agencia(); 
echo '<br>';
echo 'Conta: ';
$cadastro ->conta();
echo "<hr>";

class ContaCorrente extends CadastroCliente
{
	public $saldoInicialCC = 1000;

	public function saldoInicialCC()
	{
//		echo $this->nome;
		echo $this->saldoInicialCC;
	}
};
$corrente = new ContaCorrente();

echo 'CONTA CORRENTE';
echo '<br>';
echo 'Nome do titular: ';
$corrente ->titular(); 
echo '<br>';
echo 'Agencia: ';
$corrente ->agencia(); 
echo '<br>';
echo 'Conta: ';
$corrente ->conta();
echo '<br>';
echo 'Saldo Inicial CC: ';
$corrente ->saldoInicialCC(); 

echo "<hr>";
class ContaPoupanca extends CadastroCliente
{
	public $saldoInicialCP = 500;

	public function saldoInicialCP()
	{
		echo $this->saldoInicialCP;
	}
};
$poupanca = new ContaPoupanca();

echo 'CONTA POUPANCA';
echo '<br>';
echo 'Nome do titular: ';
$poupanca ->titular(); 
echo '<br>';
echo 'Agencia: ';
$poupanca ->agencia(); 
echo '<br>';
echo 'Conta: ';
$poupanca ->conta();
echo '<br>';
echo 'Saldo Inicial CP: ';
$poupanca ->saldoInicialCP(); 
echo '<br>';
//-----------------------------------------------
echo "<hr>";
class MovContaCorrente extends ContaCorrente

{
	public function debitoCC($valor)
	{
	//	$this->saldo = $this->saldo - $valor;
		return $this->saldo =- $valor;
	}
	public function creditoCC($valor)
	{
	//	$this->saldo = $this->saldo + $valor;
		return $this->saldo =+ $valor;
	}
};
$movimentoCorrente = new MovContaCorrente();

echo 'EXTRATO CONTA CORRENTE';
echo '<br>';
echo 'Nome do titular: ';
$movimentoCorrente ->titular(); 
echo '<br>';
echo 'Agencia: ';
$movimentoCorrente ->agencia(); 
echo '<br>';
echo 'Conta: ';
$movimentoCorrente ->conta();
echo '<br>';
echo 'Saldo Inicial CC: ';
$movimentoCorrente ->saldoInicialCC(); 
echo '<br>';
echo 'Creditos CC: ';
//$movimentoCorrente ->creditoCC(); 
echo '<br>';
echo 'Debitos CC: ';
//$movimentoCorrente ->debitoCC(); 
echo '<br>';
echo 'Saldo Final CC: ';
//$movimentoCorrente ->saldoFinalCC(); 

echo "<hr>";
class MovContaPoupanca extends ContaPoupanca

{
	private $txJuros = 0.05;

	public function remuneracaoCP($saldoInicialCP)
	{
		return $saldoInicialCP * $this->txJuros;
	}
};
$movimentoPoupanca = new MovContaPoupanca();

echo 'EXTRATO CONTA POUPANCA';
echo '<br>';
echo 'Nome do titular: ';
$movimentoPoupanca ->titular(); 
echo '<br>';
echo 'Agencia: ';
$movimentoPoupanca ->agencia(); 
echo '<br>';
echo 'Conta: ';
$movimentoPoupanca ->conta();
echo '<br>';
echo 'Saldo Inicial CP: ';
$movimentoPoupanca ->saldoInicialCP(); 
echo '<br>';
echo 'Remuneracao CP: 25';
//$movimentoPoupanca ->remuneracaoCP(); 
echo '<br>';
echo 'Saldo Final CP: 525';
//$movimentoPoupanca ->saldoFinalCP(); 