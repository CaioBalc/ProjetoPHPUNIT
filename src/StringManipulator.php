<?php

class StringManipulator{
    # Exercício 1
    function capitalizeString($string){
        return ucfirst($string);
    }

    public function concatenateStrings($string1, $string2) {
        return $string1 . $string2;
    }

    # Exercício 2
    public function countVowels($string) {
        preg_match_all('/[aeiouAEIOU]/', $string, $valor);
        return count($valor[0]);
    }

}