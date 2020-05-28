<?php

namespace CodeException;

class Sum{
    public function doSum($num1, $num2)
    {
        if ($num2 >= 10) {
            throw new \Exception("Parametro 2 deve ser menor ou igual a 10");
        }
        return $num1 + $num2;
    }
}