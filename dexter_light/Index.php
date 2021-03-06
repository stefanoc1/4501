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

	echo "<h1>Criar Banners</h1>";

	$banners = $conexao->query('SELECT * FROM banners');
	$banners = $banners->fetchAll();
		echo "<table class='table table-striped'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th>ID</th>";
		echo "<th>Nome</th>";
		echo "<th>Descrição</th>";
		echo "<th>URL</th>";
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
	case 'bannersCreate':

		if( !empty( $_POST ['nome']) && !empty($_POST['url']))
		{
			$query = $conexao->prepare('INSERT INTO banners (nome, descricao, url) VALUES (:nome, :descricao, :url)');
		
		$banner = [
		':nome'=> $_POST ['nome'],
		':descricao'=> $_POST ['descricao'],
		':url'=> $_POST ['url']
		];

		if ($query->execute($banner))
		{
				header('Location: ?route=banners');
			} else {
				echo "Erro ao adicionar o banner!.";
			}
		}
		
	echo '<form action="" method="POST">
	
	<div class="form-group">
		<label for="nome">Nome</label>
		<input class="form-control" id="nome" name="nome" placeholder="Nome">
	</div>
	
	<div class="form-group">
		<label for="descricao">Descrição</label>
		<input class="form-control" id="descricao" name="descricao" placeholder="Descrição">
	</div>
	
	<div class="form-group">
		<label for="url">Url</label>
		<input class="form-control" id="url" name="url" placeholder="Url">
	</div>
	
	<button class="btn btn-primary">Criar</button>
	
</form>';
		break;

	default:
		#code...
		break;	
}	

?>

</div>


</body>
</html>