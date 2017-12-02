<?php

	class conexao {

		public static $instance;

		private function __construct() {

		}

		public static function getInstance() {

			if(!isset(self::$instance)) {

				$dsn = 'pgsql:host=localhost;dbname=dexter';
				$user = 'usuario_dexter';
				$pass = '123456';

				self::$instance = new PDO($dsn, $user, $pass);

			}

			return self::$instance;

		}
	
	}

	$conexao = conexao::getInstance();

	var_dump($conexao);

	//


	<?php

$conexao = new PDO('pgsql:host=localhost;dbname=pdo', 'dexter', '1234');


$query = $conexao->prepare('INSERT INTO alunos (email, nome, sobrenome) VALUES (:email, :nome, :sobrenome)');

$pessoa = [
	':email'=>'email@pessoal.com',
	':nome'=>'pessoal',
	':sobrenome'=>'galera'
];

$query->execute($pessoa);


$alunos = $conexao->query('SELECT * FROM alunos');

$alunos = $alunos->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';

foreach ($alunos as $aluno) {
	echo $aluno['id'];
	echo $aluno['nome'];
	echo $aluno['sobrenome'];
	echo $aluno['email'];
}