<?php
echo "<pre>";
//inicio da interface
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

	class FreteVip implements FreteStrategy
	{
		public function calcular($distancia)
		{
			return 10*$distancia;
		}
	}
	//final da interface
	
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
			$totalPedido = $this->freteStrategy->calcular($this->distancia);
			return $totalPedido;
		}
	}
	
	$tipo_frete = 3;
	
	if($tipo_frete === 1)
	{
		$freteStrategy = new FreteNormal();
	}
	
	elseif ($tipo_frete === 2)
	{
		$freteStrategy = new FreteExpresso();
	}
	
	elseif($tipo_frete === 3)
	{
		$freteStrategy = new FreteVip();
	}
	
	$pedido1 = new Pedido($freteStrategy, 10);
	echo "Total Pedido 1 - R$ {$pedido1->calcularTotalPedido()}";
	echo "<hr>";

	$pedido2 = new Pedido($freteStrategy, 100);
	echo "Total Pedido 2 - R$ {$pedido2->calcularTotalPedido()}";
	echo "<hr>";

	$pedido3 = new Pedido($freteStrategy, 1000);
	echo "Total Pedido 3 - R$ {$pedido3->calcularTotalPedido()}";
	echo "<hr>";