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

    public function findAll()
    {
        $sql = "SELECT * FROM products";
        $get = $this->con->query($sql);
        return $get->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find(int $id)
    {
        $sql = 'SELEcT * FROM products WHERE id = :id';
        $get = $this->con->prepare($sql);
        $get->bindValue(':id', $id, PDO::PARAM_INT);
        $get->execute();
        return $get->fetch(PDO::FETCH_ASSOC);

    }

}