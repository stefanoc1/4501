<?php

interface Televisao
{

	public function aumentaVolume();
	public function diminuiVolume();
	public function trocaCanal($novoCanal);
	public function ligaDesliga();
}

class TV implements Televisao
{
	public $estado = 1;//TRUE 1 or FALSE 0 (ligada)
	public $volume = 5;
	public $canal = 10;

	public function aumentaVolume($volume)
	{
		$this->volume += $aumentaVolume;
			if($this->volume += $aumentaVolume>=100) {
			echo 'Limite do volume e 100<br>';
		} else {
			$this->volume += $aumentaVolume;
			echo "O volume esta em $aumentaVolume<br>";		
		}	
	}
	public function diminuiVolume($volume)
	{
		$this->volume -= $diminuiVolume;
			if($this->volume -= $diminuiVolume>=0) {
			echo 'Esta no mudo (sem audio)<br>';
		} else {
			$this->volume -= $diminuiVolume;
			echo "O volume esta em $diminuiVolume<br>";				
		}		
	}
	public function trocaCanal($novoCanal)
	{
		$this->canal += $novoCanal;
			if($this->canal -= $novoCanal<=0) {
			echo 'Nao existe canal menor que 0, verifique!<br>';
		} else if ($this->canal += $novoCanal>=100) {
			echo 'Nao existe canal maior que 100, verifique!<br>';		
		} else {
			echo "Esta sintonizado no canal $canal<br>";		
		}		
	}
	public function ligaDesliga($estado)
	{
		if($this->estado == 0) {
			echo 'Desligada';
		} else {
			echo 'Ligada';
		}	
	}
}

$tv->ligaDesliga(1);
$tv->trocaCanal();
$tv->aumentaVolume(10);
$tv->diminuiVolume();