<?php

class EntregaNormal 
{
	private $preco_km = 2;

	public function preco($km)
	{
		return $km * $this->preco_km;
	}
};

class EntregaExpressa extends EntregaNormal
{
	private $preco_km = 4;

	public function preco($km)
	{
		return $km * $this->preco_km;
	}
};
class EntregaVip 
{
	private $preco_km = 4;

	public function preco($km)
	{
		return $km * $this->preco_km;
	}
};
*/
$novoObjeto = new EntregaNormal();

$novoObjeto->preco();
