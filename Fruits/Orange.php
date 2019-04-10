<?php
include_once(dirname(__FILE__) . '/../AbstractClass/Fruits.php');

class Orange extends Fruits
{
    public function howtoEat()
    {
        return "Orange could be juiced";
    }
}

?>