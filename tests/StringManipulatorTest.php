<?php

use PHPUnit\Framework\TestCase;

require_once "src/StringManipulator.php";

class StringManipulatorTest extends TestCase{
    # Exercício 1
    public function testCapitalizeString() {
        $stringManipulator = new StringManipulator();
        $resultado = $stringManipulator->capitalizeString('');
        $this->assertEquals('', $resultado);
    }

    public function testConcatenateStrings() {
        $stringManipulator = new StringManipulator();
        $resultado = $stringManipulator->concatenateStrings('Hello', ' World');
        $this->assertEquals('Hello World', $resultado);
    }

    # Exercício 2
    public function testCountVowels() {
        $stringManipulator = new StringManipulator();
        $resultado1 = $stringManipulator->countVowels('Alguma frase');
        $this->assertEquals(5, $resultado1);
        $resultado2 = $stringManipulator->countVowels('BCDFGHJKLMNPQRSTVWXYZ');
        $this->assertEquals(0, $resultado2);
        $resultado3 = $stringManipulator->countVowels('aeiouAEIOU');
        $this->assertEquals(10, $resultado3);
    }
}