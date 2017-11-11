<?php
echo "<pre>";

class PrimeiraClasse
{
	public $nome = 'Stefano';

	public function nome()
	{
		echo $this->nome; //Cria uma instäncia
	}
};

//$objeto = new PrimeiraClasse();

//$objeto->nome();
/*
echo "<br>";
class SegundaClasse
{
	private $turma = '4501-PHP';

	public function turma()
	{
		echo $this->turma;
	}
};

$novoObjeto = new SegundaClasse();

$novoObjeto->turma(); 
*/

class SegundaClasse extends PrimeiraClasse
{
	public $sobrenome = 'Cordeiro';

	public function sobrenome()
	{
//		echo $this->nome;
		echo $this->sobrenome;
	}
};

$novoObjeto = new SegundaClasse();

$novoObjeto->nome(); 
echo ' ';
$novoObjeto->sobrenome(); 
