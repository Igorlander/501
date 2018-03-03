<?php

echo "<pre>";


class Aluno{

	private $nome;

	public function getNome(){
		return $this->nome;
	}
}

$reflection = new  ReflectionClass('Aluno');

print_r($reflection->getMethods());
print_r($reflection->getProperties());


$reflection = new  ReflectionClass('DateTime');

print_r($reflection->getMethods());
print_r($reflection->getProperties());

?>