<?php

	require 'Televisao.php';


class TV implements Televisao
{

	private $volume = 10;

	private $canal = 5;

	private $estado = 'OFF';



	public function aumentaVolume(){

		++$this->volume;
		echo "<p>Amentando volume para: {$this->volume}</p>";
	}


	public function diminuiVolume(){

		--$this->volume;
		echo "<p>diminui volume para: {$this->volume}</p>";
	}

	public function trocaCanal($novoCanal){

		$this->canal = $novoCanal;
		echo "<p>Novo canal: {$this->canal}</p>";
	}

	public function liga(){

		--$this->estado=='ON';
		echo "<p>A TV ligou:</p>";
	
		echo "<p>Canal atual: {$this->canal}</p>";
	}
	
	public function desliga(){

		--$this->estado=='OFF';
		echo "<p>A TV desligou:</p>";
	
	}

	
	

}
	$tv = new TV();
	$tv->liga();
	$tv->aumentaVolume();
	$tv->diminuiVolume();
	$tv->trocaCanal(4);
	$tv->desliga();
	








?>