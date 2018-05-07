<?php

namespace Model\Carousel;

use Core\Model;
use Entity\Carousel;


class CarouselModel extends Model{

    protected $table = "carousel";

    function __construct(){

        parent::__construct();
    }

    public function getCarouselTitle(){

        return $this->select('*')->setEntity('Entity\Carousel')->find();
    }

}