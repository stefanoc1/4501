<?php

	interface FreteStrategy
	{
		public function calcular($distancia);
	}
	
	class FreteNormal implements FreteStrategy
	{
		public function calcular($distancia)
		{
			return 2*$distancia;
		}
	}
	
	class FreteExpresso implements FreteStrategy
	{
		public function calcular($distancia)
		{
			return 5*$distancia;
		}
	}

	class FreteTurbo implements FreteStrategy
	{
	
		public function calcular($distancia)
		{
			return 10*$distancia;
		}
	
	}
	
	
	class Pedido
	{
		
		private $freteStrategy;
		private $distancia;
		
		public function __construct(FreteStrategy $freteStrategy, $distancia)
		{
			$this->freteStrategy = $freteStrategy;
			$this->distancia = $distancia;
		}
		
		public function calcularTotalPedido() {
			$totalPedido = 0;
			$totalPedido = $this->distancia*$this->freteStrategy->calcular($this->distancia);
			return $totalPedido;
		}
		
	}
	
	$tipo_frete = 1;
	
	if($tipo_frete === 1) {
		$freteStrategy = new FreteNormal();
	}
	
	elseif ($tipo_frete === 2) {
		$freteStrategy = new FreteExpresso();
	}
	
	elseif($tipo_frete === 3) {
		$freteStrategy = new FreteTurbo();
	}
	
	$pedido = new Pedido($freteStrategy, 10);
	
	echo "Total Pedido - R$ {$pedido->calcularTotalPedido()}";
	
	
	
	
	
	
	