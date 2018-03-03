<?php

class NaoPodeDividirPorZeroException extends Exception{
	
}

class ValorInfinitoException extends Exception{	
}


class Calc
{
	
	//Não permitir numero negativos
	//Não permitir resultado maior que 50

	public static function soma($a ,$b){
		return $a + $b;
	}

	//Não permirtir resultado menor que zero
	public static function sub($a ,$b){
		return $a - $b;
	}
	//Não permirtir multiplicacao por zero
	//Não permirtir resultado maior que 50
	public static function mult($a ,$b){
		return $a * $b;

	}

	//Não permirtir divisao por zero
	//Não permirtir valor infinito $a == 0
	public static function div($a ,$b){

		if ($b === 0 ) {
			throw new ValorInfinitoException();
		}
		if ($b == 0 || $b == 0) {
			throw new NaoPodeDividirPorZeroException();
		}
			
		

		return $a / $b;

	}


}
try {
	echo Calc::soma(4,2);
	echo "<br>";
	echo Calc::sub(4,2);
	echo "<br>";
	echo Calc::mult(4,2);
	echo "<br>";
	echo Calc::div(4,2);
	echo "<br>";
	echo "<p> Divisao = ", Calc::div(0 , 4),"</p>";


	} catch (NaoPodeDividirPorZeroException $e) {
		echo "<p>NaoPodeDividirPorZeroException/p>";
	}
	 catch (ValorInfinitoException $e) {
		echo "<p>ValorInfinitoException</p>";
	}









?>