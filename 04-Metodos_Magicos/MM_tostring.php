<?php

class ProtudosToString
{
    public function __toString()
    {
        return "Retorno toString da classe " . __CLASS__; // sempre uma string ou exceptions v7.4

    }

}

$produto = new ProtudosToString();
print $produto; // Retorno toString da classe ProtudosToString



