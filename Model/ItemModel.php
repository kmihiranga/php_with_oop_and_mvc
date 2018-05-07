<?php

namespace Model\Item;

use Core\Model;
use Entity\Item;

class ItemModel extends Model{

    protected $table = "items";

    function __construct(){

        parent::__construct();
    }

    public function getAllItems(){
        
        return $this->select('*')->setEntity('Entity\Item')->find();
    }



}