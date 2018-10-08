<?php
/**
 * Created by PhpStorm.
 * User: Fabian Mattl
 * Date: 04.10.2018
 * Time: 09:15
 */
class ThePit extends Product{
    private $specialEquipment;
    private $sideLength;
    function __construct(){
        $this->specialEquipment = array("Hamster training gloves", "Hamster punching sack");
        $this->sideLength = 20;
    }

    public function outputProductInfo(){
        return "Our Domain ‘The Pit’ is a good choice for all hamster owner who want a trained battle hamster
                It features a octagon shaped area with a side-length of 20cm and special Equipment for your loved pet including 
                Hamster training gloves and a Hamster punching sack.
                It is available for the low price of EUR 69,-";
    }

    public function getSpecialEquipment(){
        return $this->specialEquipment;
    }

    public function calculateArea(){
        $area = Math.pow($this->sideLength) * ( 2 + 2* Math.sqrt(2));
        return $area." cm^2";

    }
}