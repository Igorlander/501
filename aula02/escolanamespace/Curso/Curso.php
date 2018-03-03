<?php

namespace Escola\Curso;

class Curso{


	private $nome;

	private $cargaHoraria;	
	
	function __construct(string $nome, string $cargaHoraria)
	{
		$this->nome =$nome;
		$this->cargaHoraria = $cargaHoraria;
	}

	public function getNome()
	{
	    return $this->nome;
	}
	
	public function setNome($nome)
	{
	    return $this->nome = $nome;
	}

	public function getCargaHoraria()
	{
	    return $this->cargaHoraria;
	}
	
	public function setCargaHoraria($cargaHoraria)
	{
	    return $this->cargaHoraria = $cargaHoraria;
	}


}















?>