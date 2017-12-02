<?php

//design pattern singleton

//Private Static $Instance = null ok
//Private F() __CONSTRUCT ok
//Public Static F() getInstance ok

Class Conexao 
{
	private static $instance = null;
	private function __contruct(){}
	public static function getInstance()

	{
		if(!self::$instance)
		{
			self::$instance = new self();
		}

		return self::$instance;		
	}
}

  $conexao = conexao::getInstance();

  var_dump($conexao);

  /*
 nome      | character varying(100) | 
 descricao | character varying(500) | 
 url       | character varying(500) | 
 */