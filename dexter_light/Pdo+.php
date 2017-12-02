<?php

$conexao = new PDO('pgsql:host=localhost;dbname=dexter_light', 'master', '123abc');


$query = $conexao->prepare('INSERT INTO alunos (nome_razao, cpf_cnpj, email, telefone ) VALUES (:nome_razao, :cpf_cnpj, :email, :telefone)');

$cliente = [
	':nome_razao'=>'Novo Cliente',
	':cpf_cnpj '=>'9999999999',
	':email'=>'email@pessoal.com',
	':telefone'=>'9999999999',
];

$query->execute($cliente);

$clientes = $conexao->query('SELECT * FROM clientes');

$clientes = $clientes->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';

foreach ($clientes as $cliente) {
	echo $cliente['id'];
	echo $cliente['nome_razao'];
	echo $cliente['cpf_cnpj'];
	echo $cliente['email'];
	echo $cliente['telefone'];
}

/*
 nome      | character varying(100) | 
 descricao | character varying(500) | 
 url       | character varying(500) | 
 */