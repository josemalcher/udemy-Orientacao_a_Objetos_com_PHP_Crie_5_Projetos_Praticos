<?php

class ProdutoCallCallStatic
{
    public function __call($name, $arguments)
    {
        var_dump($name, $arguments);
        /*
            string(4) "save"
            array(2) {
              [0]=>
              string(9) "Produto 1"
              [1]=>
              float(20.99)
            }
         */
    }

    public static function __callStatic($name, $arguments)
    {
        var_dump($name, $arguments);
        /*
         array(2) {
          [0]=>
          string(8) "Conect 1"
          [1]=>
          int(200)
        }
         * */
    }
}
$produto = new ProdutoCallCallStatic();
$produto->save("Produto 1", 20.99); // método não existe, com parametros

ProdutoCallCallStatic::getConnection("Conect 1", 200); // métodos estáticos

