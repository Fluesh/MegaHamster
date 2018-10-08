<?php
/**
 * Created by PhpStorm.
 * User: Fabian Mattl
 * Date: 04.10.2018
 * Time: 09:32
 */
class TheFlat extends Product{
    private $specialEquipment;
    private $width;
    private $lenght;
    private $height;

    function __construct(){
        $this->specialEquipment = array("Food jars");
        $this->width = 80;
        $this->lenght = 120;
        $this->height = 80;
    }

    public function outputProductInfo()
    {
        return "Our Domain ‘The Flat’ is the best choice of deluxe real estate for a
                hamster owner. It features a length of ".$this->lenght." cm, a width of ".$this->width." cm 
                and a height of".$this->height." cm. It has special food jars for your little hamster. It is available 
                for the low price of EUR 149,-";
    }

    public function getSpecialEquipment(){
        return $this->specialEquipment;
    }

    public function calculateArea()
    {
        return ($this->width * $this->lenght)."cm^2";
    }
}

