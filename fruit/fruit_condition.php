<<<<<<< HEAD
<?php

enum Fruit_condition{
    case UNRIPE;// nedozrale
    case RIPE;// zrale
    case OVERRIPE;// prezrale
    case ROTTEN;// zhnile

    public function next($condition){
        // match case
        $return = match ($condition){
            Fruit_condition::UNRIPE   => Fruit_condition::RIPE,
            Fruit_condition::RIPE     => Fruit_condition::OVERRIPE,
            Fruit_condition::OVERRIPE => Fruit_condition::ROTTEN,
            Fruit_condition::ROTTEN   => Fruit_condition::ROTTEN};

        return $return;}

    public function get_multiplyer($condition){
        $return = match ($condition){
            Fruit_condition::UNRIPE   => 0.9,
            Fruit_condition::RIPE     => 1.0,
            Fruit_condition::OVERRIPE => 0.6,
            Fruit_condition::ROTTEN   => 0.1};

        return $return;}

    public function to_string($condition){
        return match($condition){
            Fruit_condition::UNRIPE => "unripe",
            Fruit_condition::RIPE => "ripe",
            Fruit_condition::OVERRIPE => "overripe",
            Fruit_condition::ROTTEN => "rotten"};
    }
}

=======
<?php

enum Fruit_condition{
    case UNRIPE;// nedozrale
    case RIPE;// zrale
    case OVERRIPE;// prezrale
    case ROTTEN;// zhnile

    public function next($condition){
        // match case
        $return = match ($condition){
            Fruit_condition::UNRIPE   => Fruit_condition::RIPE,
            Fruit_condition::RIPE     => Fruit_condition::OVERRIPE,
            Fruit_condition::OVERRIPE => Fruit_condition::ROTTEN,
            Fruit_condition::ROTTEN   => Fruit_condition::ROTTEN};

        return $return;}

    public function get_multiplyer($condition){
        $return = match ($condition){
            Fruit_condition::UNRIPE   => 0.9,
            Fruit_condition::RIPE     => 1.0,
            Fruit_condition::OVERRIPE => 0.6,
            Fruit_condition::ROTTEN   => 0.1};

        return $return;}

    public function to_string($condition){
        return match($condition){
            Fruit_condition::UNRIPE => "unripe",
            Fruit_condition::RIPE => "ripe",
            Fruit_condition::OVERRIPE => "overripe",
            Fruit_condition::ROTTEN => "rotten"};
    }
}

>>>>>>> 39190aa83d45376c561c16703eeb360829da6d02
?>