<<<<<<< HEAD
<?php

class Apple extends Fruit{
    public function __construct(Float $weight_g, Fruit_condition $condition){

        $colors = ["red", "green"];
        $color = $colors[rand(0,1)];

        parent::__construct(
            $color = $color,
            $weight_g = $weight_g,
            $condition = $condition,
            $price_per_kg = 40);
    }
}

=======
<?php

class Apple extends Fruit{
    public function __construct(Float $weight_g, Fruit_condition $condition){

        $colors = ["red", "green"];
        $color = $colors[rand(0,1)];

        parent::__construct(
            $color = $color,
            $weight_g = $weight_g,
            $condition = $condition,
            $price_per_kg = 40);
    }
}

>>>>>>> 39190aa83d45376c561c16703eeb360829da6d02
?>