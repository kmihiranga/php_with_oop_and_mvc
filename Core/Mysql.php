<?php

namespace Core\DB;
use \PDO;

abstract class Mysql{

    private $conn = null;
    private $stmt = null;

    private static function prepareConnectionString(){

        $server = DB_HOST;
        $db     = DB_NAME;
        
        return "mysql:host=$server;dbname=$db";
    }

    public function getConnection(){

        $user = DB_USER_NAME;
        $pass = DB_PASSWORD;

        try{

            $this->conn = new PDO(self::prepareConnectionString(), $user, $pass);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return true;
        }
        catch(PDOException $e){

            echo "Error: ". $e->getMessage();

        }

        return false;
    }

    public function prepareStatement($query){

        $this->stmt = $this->conn->prepare($query);
        $this->stmt->execute();
    }

    public function fetchData($entity = null){

        if($entity == null){

            $this->stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $this->stmt->fetchAll();

        }
        return $this->stmt->fetchAll(PDO::FETCH_CLASS, $entity);
    }


}