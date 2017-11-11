<?php
echo "<pre>";

//array validar se o canal existe
//$volume
//$canal
//$estado

//maxVolume
//7 validacoes

interface Televisao
{
	public function aumentarVolume();
	public function diminuirVolume();
	public function trocarCanal($novoCanal);
	public function ligaDesliga();
}

class TV implements Televisao {
	
	private $maxVolume = 30;
	private $volume = 15;
	private $numeroCanais = 100;
	private $canal = 1;
	private $ligada = false;	
	
	public function aumentarVolume() {
		
		if($this->ligada) {
		
			if($this->volume < $this->maxVolume) {
				++$this->volume;
				echo "Volume: $this->volume.<br>";
			} else {
				echo "Volume já esta no máximo.<br>";
			}
			
		} else {
			
			echo "TV desligada.<br>";
			
		}
		
	}
	
	public function diminuirVolume() {
	
		if($this->volume > 0) {
			--$this->volume;
			echo "Volume: $this->volume.<br>";
		} else {
			echo "A Tv esta no mudo.<br>";
		}
	
	}
	
	public function trocarCanal($novoCanal) {
	
		if($novoCanal > 0 and $novoCanal <= $this->numeroCanais) {
			$this->canal = $novoCanal;
			echo "Canal alterado.<br>Canal atual: $this->canal.<br>";
		} else {
			echo 'Canal invalido.<br>';
		}
	
	}
	
		public function ligaDesliga() {
		
			if($this->ligada) {
				$this->ligada = false;
			} else {
				$this->ligada = true;
			}
		
		}
	
}

$tv = new TV();

$tv->ligaDesliga(0);

$tv->ligaDesliga(1);

$tv->aumentarVolume(5);

$tv->diminuirVolume(1);

$tv->trocarCanal(8);