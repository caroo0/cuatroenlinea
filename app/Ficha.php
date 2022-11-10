<?php
namespace App; //Aca asigno los espacios
//
interface InterfaceFicha {
	public function color(); // Me devuelve el color de la ficha 
}

class Ficha implements FichaInterface {
	protected $color;

	public function __construct(String $colorDeFicha){
		$this->color = $colorDeFicha;
	}

	public function color(){
		return $this->color;
	}
}
