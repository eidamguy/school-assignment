<?php

class Banana extends Fruit{
    public function __construct(Float $weight_g, Fruit_condition $condition){

        parent::__construct(
            $color = "yellow",
            $weight_g = $weight_g,
            $condition = $condition,
            $price_per_kg = 200);
    }
}

?>