<?php
/**
 * Created by PhpStorm.
 * User: Fabian Mattl
 * Date: 04.10.2018
 * Time: 08:38
 */
class TheRoom extends Product {
    private $specialEquipment;
    private $length;
    private $width;
    private $height;
    function __construct(){
        $this->specialEquipment = NULL;
        $this->length = 80;
        $this->width = 50;
        $this->height = 50;
    }

    public function outputProductInfo(){
        return "Our Domain ‘The Room’ is the basic choice of real estate for a
                hamster owner. It features a length of 80 cm, a width of 50 cm 
                and aheight of 50 cm. It is available for the low price of EUR 49,-";
    }

    public function getSpecialEquipment(){
        return $this->specialEquipment;
    }

    public function calculateArea(){
        return $this->width * $this->length;
    }
}