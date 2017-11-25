<?php
echo "<pre>";
//===> Incluir numero de canetas
//Classe caneta
class Caneta
{
	//Atributo privado estatico $durabilidade
	private static $durabilidade = "10";
	//Atributo privado estatico $durabilidade
	private static $getNumCanetas = "10";
	//Atributo privado cor
	private $cor;
	//metodo de contrucao ($cor)
	public function __construct($cor)
	{
		$this->cor = $cor;
		self::
	}
	//Setar a variavel privada com a cor passada
	//metodo getCor()
	public function getCor()
	{
		//retorna a cor da caneta
		return $this->cor;
	}
	//metodo getDurabilidade();
	public function getDurabilidade()
	{
		return self::$durabilidade;
	}
	//metodo setDurabilidade ($durabilidade);
	public function setDurabilidade($durabilidade)
	{
		self::$durabilidade = $durabilidade;
	}
	//metodo getNumCanetas();
	public function getNumCanetas()
	{
		return self::$durabilidade;
	}
}

//Teste:
$canetaAzul = new Caneta('azul');
echo $canetaAzul->getCor();
echo "<br>";
echo $canetaAzul->getDurabilidade();
echo "<br>";

$canetaVermelha = new Caneta('vermelha');
echo $canetaVermelha->getCor();
echo "<br>";
echo $canetaVermelha->getDurabilidade();
echo "<br>";
echo $canetaVermelha->setDurabilidade(12);
echo "<br>";
echo "<br>";
echo $canetaAzul->getDurabilidade();
echo "<br>";
echo $canetaVermelha->getDurabilidade();