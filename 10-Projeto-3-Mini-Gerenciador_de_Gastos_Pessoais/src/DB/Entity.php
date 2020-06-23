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

        $get = $this->bind($sql, $conditions);
        $get->execute();

        return $get->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insert($data)
    {
        $binds = array_keys($data);

        $sql = 'INSERT INTO ' . $this->table . ' ('. implode(', ', $binds)  .', created_at, updated_at) 
        VALUES(:'. implode(', :', $binds) .', NOW(), NOW()) ';

        //print $sql;

        $insert = $this->bind($sql, $data);

        return $insert->execute();

    }

    public function update($data)
    {
        if (!array_key_exists('id', $data)) {
            throw new \Exception('é preciso informar um ID válido para o UPDATE');
        }

        $sql = 'UPDATE '. $this->table . ' SET ' ;

        $set = null;

        $binds = array_keys($data);

        foreach ($binds as $v) {
            if ($v !== 'id') {
                $set .= is_null($set) ? $v . ' = :' . $v : ', ' . $v . ' = :' . $v;
            }
        }

        $sql .= $set . ', updated_at = NOW() WHERE id = :id';

        $update = $this->bind($sql, $data);

        return $update->execute();
    }

    private function bind($sql, $data)
    {
        $bind  =  $this->con->prepare($sql);

        foreach ($data as $k => $v) {
            gettype($v) == 'int'       ? $bind->bindValue(':' . $k, $v, \PDO::PARAM_INT)
                : $bind->bindValue(':' . $k, $v, \PDO::PARAM_STR);
        }

        //var_dump($get);
        return $bind;
    }

}