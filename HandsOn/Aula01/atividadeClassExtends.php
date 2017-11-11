<?php

echo "<pre>";
echo "Calculo de Frete";

class BaseFrete
{
	public $distancia = $km;

	public function distancia()

};


class FreteNormal extends BaseFrete
{
	public $taxaNormal = 1;

	public function taxaNormal()
	{
		echo $this->taxaNormal;
	}
};

$km = 10;
$FreteA = new FreteNormal()*$km;

$novoObjeto->FreteA(); 



