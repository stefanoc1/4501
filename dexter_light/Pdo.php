<?php

$conexao = new PDO('pgsql:host=localhost;dbname=dexter_light', 'master', '123abc');

$query->execute($banner);

$banners = $conexao->query('SELECT * FROM banners');

$banners = $banners->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';

foreach ($banners as $cliente) {
	echo $banner['id'];
	echo $banner['nome'];
	echo $banner['descricao'];
	echo $banner['url'];
}

