<?php

//Verificar se exite a rota
// se nao
	//colocar pra rota da home
if(!isset( $_GET['route']))
{
	$_GET['route'] = 'home';
	echo "home";
}

//Criar switch-case
switch ($_GET['route'])
{
	case 'home':
	echo "<h1>Home</h1>";
	break;

	default:
	echo "<h1>Banners</h1>";
	break;
}	
	//se home
		//echo <h1>Home</h1>

/*
 nome      | character varying(100) | 
 descricao | character varying(500) | 
 url       | character varying(500) | 
 */