<?php
/*
Classe Pai
criar variavel protegida estatica "nome" igual ao texto classe pai
funcao pega nome publica e estatica
funcao pega nome vai dar um retorno na variavel estatica nome
finaliza a classe pai
criar classe filha extende a pai
dentro da classe filha criar uma varivel estatica e protegida
-> testar echo filha (exibir funcao pega nome)
-> testar echo pai (exibir funcao pega nome)
-> exibir filha e pai*/
echo "<pre>";

class ClassePai
{
	protected $pegaNome = 'NomePai';

	public static function pegaNome()
	{
		return static::$nome;
	}
}

class ClasseFilha extends ClassePai
{
	public static $nome = 'NomeFilha';
};

echo ClasseFilha::pegaNome()."<br/>";
echo ClassePai::pegaNome()."<br>";

