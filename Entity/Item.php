<?php

namespace Entity;

use Model\ItemModel;

class Item{

    public $item_name;
    public $item_description;
    public $item_price;
    public $sort_by;

    public function getItems($item_name, $item_description, $item_price, $sort_by){

        $this->item_name = $item_name;
        $this->item_description = $item_description;
        $this->item_price = $item_price;
        $this->sort_by = $sort_by;
    }
}

