<?php

namespace Core;

use Core\DB\Mysql;

abstract class Model extends Mysql{

    protected $table = null;
    protected $db = null;
    private $select = null;
    private $entity = null;

    function __construct(){

        $this->db = $this->getConnection();
    }

    public function select($select = '*'){

        $this->select = $select;
        return $this;
    }

    public function setEntity($entity){

        $this->entity = $entity;
        return $this;
    }

    private function prepareSelectQuery(){

        return "SELECT $this->select FROM $this->table";
    }

    public function find(){

        $this->prepareStatement($this->prepareSelectQuery());
        return $this->fetchData($this->entity);
    }

}