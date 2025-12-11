<?php

class Fruit{
    public function __construct(String $color, Float $weight_g, Fruit_condition $condition, Int $price_per_kg){
        $this->color = $color;
        $this->weight_g = $weight_g;
        $this->condition = $condition;
        $this->price_per_kg = $price_per_kg;
        $this->price = 0;
        $this->update_price();
    }

    public function age(){
        $this->condition = $this->condition->age();
    }

    public function update_price(){
        $cond_multiplyer = $this->condition->get_multiplyer($this->condition);
        $weight_multiplyer = $this->price_per_kg * $this->weight_g/1000;

        $this->price = $cond_multiplyer * $weight_multiplyer;
    }
}

?>