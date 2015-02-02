<?php

class Modifier_contains extends Modifier {

    public function index($value, $parameters = array()) {
        $matches = explode(",", $parameters[0]);
        $operator = strtoupper($parameters[1]);
        if ($operator == 'AND') {
            return count(array_intersect($value, $matches)) == count($matches);
        } else {
            return count(array_intersect($value, $matches)) >= 1;
        }
    }

}
