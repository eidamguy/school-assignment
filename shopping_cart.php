<?php

class Shopping_cart {

    public function __construct(){
        $this->contents = [];
        $this->price = 0;
        $this->weight_g = 0;
    }

    public function add_object($obj){
        array_push($this->contents, $obj);
        $this->update_weight();
        $this->update_price();
    }

    public function update_weight(){
        $weight_g = 0;
        foreach ($this->contents as $obj) {
            $weight_g += $obj->weight_g;}
        $this->weight_g = $weight_g;
    }
    
    public function update_price(){
        $total_price = 0;
        foreach ($this->contents as $obj) {
            $total_price += $obj->price;}
        $this->price = $total_price;
    }

    public function echo_contents(){
        echo("shopping cart contents <br><br>");
        foreach ($this->contents as $obj) {
            $obj->echo_self();}
    }
}



?>