<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">	
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" />
</head>
<body>

<div class="container">

Dexter Light

<?php

$conexao = new PDO('pgsql:host=localhost;dbname=dexter_light', 'master', '123abc');

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

	$banners = $conexao->query('SELECT * FROM banners');
	$banners = $banners ->fetchAll();
		echo "<table class='table table-striped'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th>ID</th>";
		echo "<th>Nome</th>";
		echo "<th>Descrição</th>";
		echo "<th>Url</th>";
		echo "</tr>";
		echo "</thead>";
		echo "</tbody>";
	foreach ($banners as $banner)
	{
		echo "<tr>";
	 	echo '<td>'.$banner['id'].'</td>';
	 	echo '<td>'.$banner['nome'].'</td>';
	 	echo '<td>'.$banner['descricao'].'</td>';
	 	echo '<td>'.$banner['url'].'</td>';
		echo "</tr>";	 	
	} 
		echo "</tbody>";
		echo "</table>";

		break;
	case 'banners/create':
}	
?>

</div>

</body>
</html>
