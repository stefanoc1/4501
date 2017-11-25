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
		echo "O cafe custa R$ 1,20. <br>";
		return 1.2;
	}
}

class Leite extends IngredienteBase
{
	public function getPreco()
	{
		echo "O leite custa um adicional de R$ 0,45. <br>";
		return $this -> pai-> getPreco() + 0.45;
	}
}

class Chocolate extends IngredienteBase
{
	public function getPreco()
	{
		echo "O chocolate custa um adicional de R$ 0,35. <br>";
		return $this -> pai-> getPreco() + 0.35;
	}
}



$cafe = new Cafe();
$leite = new Leite($cafe);
$cafeFinal = new Chocolate($leite);
echo "Preco final cafe com leite e chocolate R$ " .$cafeFinal->getPreco().". <br>";
echo "<hr>";
