<?php 


trait Log

{

	public function escreverLog($msg){
		echo "log da $msg";
	}
}


class X
{
	use Log;
}


class Y extends X
{
	public function save(){
		$this->escreverLog("Trait");
	}
}


$y = new Y();
$y->save();








 ?>