<?php

namespace App; //Asigno el espacio
use Exception;
use ColumnaLlenaException;

interface TableroInterf {
	protected function vaciar_tablero();
	public function poner_ficha(int $columna, Ficha $ficha);
}

class Tablero {
	protected int $ancho
	protected array $tablero
	protected int $alto

	protected function vaciar(){
		for($i = 0; $i < $alto; $i++){
			for($a = 0; $a < $ancho; $a++){
				$this->tablero[i][a] = new Ficha("Vacio");
			}
		}
	}

	public function colocar(int $columna, Ficha $ficha){
		for($contadorColumnas = $this->alto; $contadorColumnas != 0; $contadorColumnas--){
			if($this->tablero[$contadorColumnas][$columna]->color =="Vacio"){
				tablero[$contadorColumnas][$columna] = $ficha->color;
				return;
			}
		}
		throw new ColumnaLlenaException("La comulna esta llena");
	}
}
