<?php
echo "<pre>";
//colocar array depois
interface Televisao
{
	public function aumentarVolume();
	public function diminuirVolume();
	public function trocarCanal($canal);
	public function ligarDesligar();
}

class TV implements Televisao
{
	public $volume = 9;	
	public $maxVolume = 10;
	public $canal = 1;
	public $canais = [4,5,8,9,14,16,18,19,20,22,25];
	public $estado = false;

	public function aumentarVolume()
	{
		$this->volume >= $maxVolume;
			if($this->volume += $maxVolume>=10)
			{
			echo 'Limite do volume e 10<br>';
			} else {
			echo "O volume esta em {$this->volume}<br>";	
			$this->volume++ 	
			}	
	}
	public function diminuirVolume()
	{
		$this->volume <= $maxVolume;
			if($this->volume += $maxVolume<=0)
			{
				echo 'O volume esta no mudo<br>';
			} else {
			echo "O volume esta em $this->volume}<br>";			
			}		
		}
	public function trocarCanal($canal)
	{
		$this->canal += $novoCanal;
			if( in_array($canal, $this->canais);
			{
			echo 'Nao existe canal menor que 0, verifique!<br>';
			} else {
			echo "Esta sintonizado no canal $canal<br>";		
		}		
	public function ligarDesligar();
	{
		$this->ligado = !$this->ligado}
		if($this->ligado)
		{
			echo 'A TV esta desligada'
		}
}

$tv = new TV();

$tv->ligaDesliga(0);
echo '<hr>';
$tv->trocaCanal(10);
echo '<hr>';
$tv->aumentarVolume(10);
echo '<hr>';
$tv->diminuirVolume(2);
echo '<hr>';
