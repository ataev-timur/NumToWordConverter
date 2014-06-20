<?php

/**
 * Created by PhpStorm.
 * User: Timmy
 * Date: 16.06.14
 * Time: 9:00
 */

require_once 'Converter.php';

class OneDigitConverter extends Converter
{

    public function __construct(Input $input){
        $this->digit_1 = $input->determinedArray[0];
    }

    public function numToWord($lang){
        return $this->first($lang);
    }
}