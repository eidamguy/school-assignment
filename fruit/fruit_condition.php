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
}

?>