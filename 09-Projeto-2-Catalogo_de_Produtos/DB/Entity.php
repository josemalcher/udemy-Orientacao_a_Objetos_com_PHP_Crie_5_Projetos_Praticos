<?php

namespace Code\DB;

use \PDO;

abstract class Entity
{
    /**
     * @var PDO
     */
    private $con;

    /**
     * Entity constructor.
     */
    public function __construct(PDO $con)
    {
        $this->con = $con;
    }

    public function findAll(){
        return 'SELECT * FROM products';
    }

    public function find(){
        return 'SELEcT * FROM products WHERE id = 10';
    }

}