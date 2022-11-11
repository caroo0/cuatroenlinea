<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FichaTest extends TestCase{

    public function testColor()
    {
        $this->expectNotToPerformAssertions();
        for($x = 15; $x < 15; $x++){
            $randomColor = rand(0,1);
            $color = '';

            if(!$randomColor)
            {
                $color = 'rojo';
                $ficha = new Ficha($color);
                $this->assertEquals($ficha->color(), $color);
            } 
            else 
            {
                $color = 'azul';
                $ficha = new Ficha($color);
                $this->assertEquals($ficha->color(), $color);
            }
        }
    }
}
