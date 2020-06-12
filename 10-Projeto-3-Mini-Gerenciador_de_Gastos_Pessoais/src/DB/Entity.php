<?php

namespace Code\DB;

use \PDO;

abstract class Entity
{
    /**
     * @var PDO
     */
    private $con;
    protected $table;

    /**
     * Entity constructor.
     */
    public function __construct(PDO $con)
    {
        $this->con = $con;
    }

    public function findAll($fields = '*')
    {
        $sql = 'SELECT ' . $fields . ' FROM ' . $this->table;
        $get = $this->con->query($sql);
        return $get->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find(int $id, $field = '*')
    {

        return current( $this->where(['id' => $id], '', $field));

    }

    public function where(array $conditions, $operador = ' AND ', $fields = '*')
    {
        $sql = 'SELECT ' . $fields . ' FROM ' . $this->table . ' WHERE ';

        $binds = array_keys($conditions);

        $where = null;

        foreach ($binds as $v) {
            if (is_null($where)) {
                $where .= $v . ' = :' . $v;
            } else {
                $where .= $operador . $v . ' = :' . $v;
            }
        }
        $sql .= $where;

        $get = $this->con->prepare($sql);

        foreach ($conditions as $k => $v) {
            gettype($v) == 'int'       ? $get->bindValue(':' . $k, $v, \PDO::PARAM_INT)
                                       : $get->bindValue(':' . $k, $v, \PDO::PARAM_STR);
        }

        //var_dump($get);
        $get->execute();

        return $get->fetchAll(\PDO::FETCH_ASSOC);
    }

}