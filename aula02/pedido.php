<?php


/**
* 
*/
class Pedido
{
	
	public function __construct($tipoFrete)
	{
		if ($tipoFrete == "normal") {
			echo "Frete Normal";

		} elseif ($tipoFrete == "expresso") {
			echo "Frete Expresso";			
		} elseif ($tipoFrete == "turbo") {
			 echo "Frete Turbo";			
		} else{
			echo "Frete Inválido";

		}


	}
}


$pedido = new Pedido('normal');
echo "<br>";
var_dump($pedido);



?>