<?php
/**
 * Created by PhpStorm.
 * User: Fabian Mattl
 * Date: 04.10.2018
 * Time: 08:43
 */
abstract class Product{
    protected $specialEquipment;
    abstract public function outputProductInfo();
    abstract public function getSpecialEquipment();
    abstract public function calculateArea();
}