<?php
echo "<pre>";
interface Ingrediente 
{
	//visibilidade (function) nomedafuncao (parametros)
	public function getPreco();
}

abstract class IngredienteBase implements Ingrediente
{
	protected $pai;

	public function __construct(Ingrediente $pai)
	{
		$this->pai = $pai;
	}
}

class Cafe implements Ingrediente
{
	public function getPreco()
	{
		echo "O cafe custa R$ 1,50. <br>";
		return 1.50;
	}
}

class Leite implements Ingrediente
{
	public function getPreco()
	{
		echo "O cafe custa R$ 1,00. <br>";
		return 1.00;
	}
}

class Chocolate extends IngredienteBase
{
	public function getPreco()
	{
		echo "O chocolate custa um adicional de R$ 0,50. <br>";
		return $this -> pai-> getPreco() + 0.50;
	}
}

$cafe = new Cafe();
$cafeFinal = new Leite($cafe);
echo "Preco final cafe com leite R$ " .$cafeFinal->getPreco().". <br>";
echo "<hr>";
