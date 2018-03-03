<?php


class Aluno{

	public $nome;


}

$igor = new Aluno();
$igor->nome = "Igor";
echo $igor->nome;


$joao = clone $igor;

$joao = $igor;
echo $joao->nome;

$joao->nome="Joao";
echo $joao->nome;

	