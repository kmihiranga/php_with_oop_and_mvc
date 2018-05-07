<?php

namespace Model\Category;

use Core\Model;
use Entity\Category;

class CategoryModel extends Model{

    protected $table = "category";

    function __construct(){

        parent::__construct();
    }

    public function getAllCategory(){

        return $this->select('*')->setEntity('Entity\Category')->find();
    }
}