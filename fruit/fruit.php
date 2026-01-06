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

    public function echo_self(){
        echo("type: ".get_class($this)."<br>");
        echo("color: ".$this->color."<br>");
        echo("condition: ".$this->condition->to_string($this->condition)."<br>");
        echo("weight: ".$this->weight_g."g<br>");
        echo("value: ".$this->price." Kč<br><br>");
    }

    public function update_price(){
        $cond_multiplyer = $this->condition->get_multiplyer($this->condition);
        $weight_multiplyer = $this->price_per_kg * $this->weight_g/1000;

        $this->price = $cond_multiplyer * $weight_multiplyer;
    }
}

?>