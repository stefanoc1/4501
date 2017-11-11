<?php
echo "<pre>";

/*
class NomeDaClasse
{
	public $propriedade = 10;

	public function nome()
	{
		echo 'teste';
	}

};

$objeto = new NomeDaClasse();

var_dump($objeto);

echo $objeto->propriedade;
echo "<br>";
echo $objeto->nome();
*/

class Classe
{
	private $nome = 'Stefano';

	public function nome()
	{
		echo $this->nome; //Cria uma instäncia
	}
};

$objeto = new Classe();

$objeto->nome();