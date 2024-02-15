<?php

use PHPUnit\Framework\TestCase;

require_once "src/Classe.php";

class ClasseTest extends TestCase{
    public function testSoma(){
        $classe = new Classe();
        $resultado = $classe->somar(2, 3);
        $this->assertEquals(5, $resultado);
        $resultado = $classe->somar(-2, 3);
        $this->assertEquals(1, $resultado);
        $resultado = $classe->somar(0, 5);
        $this->assertEquals(5, $resultado);
        # Usado para tratar casos especiais, como a adição de zero a um número, já que irá resultar o próprio número.
    }
}