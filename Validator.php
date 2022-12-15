<?php

class Validator
{
    static function  string($value, $min = 1 , $max = INF) {
        $value = strlen(trim($value));
        if( $value > $min && $value < $max) {
            return true;
        }
        else {
            return false;
        }
    }
}