</<?php 


class Foo{

	private $objeto;


	public function __construct(){
		echo "Construindo a conta";
	}

	public function __destruct(){
		echo "Detruindo a conta";

	}

	public function __toString(){
		return "Eu sou um objeto";
	}

	}

	$a = new Foo();
	echo $a->















 ?>