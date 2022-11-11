<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class TableroTest extends TestCase
{
    public function testCasillasTablero(){
        $contadorCasillas = 0;
        $tablero = new Tablero(rand(3,30), rand(3,30));
        
        for ($x = 0; $x < $tablero->ancho(); $x++) {
            for ($y = 0; $y < $tablero->alto(); $y++) {
                $contadorCasillas++;
            }
        }
        
        $this->assertEquals($tablero->ancho() * $tablero->alto(), $contadorCasillas);
    }
}
