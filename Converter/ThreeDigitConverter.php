<?php
/**
 * Created by PhpStorm.
 * User: Timmy
 * Date: 16.06.14
 * Time: 12:31
 */

require_once 'Converter.php';

class ThreeDigitConverter extends Converter{

    public function __construct(Input $input){
        $this->digit_1 = $input->determinedArray[0];
        $this->digit_2 = $input->determinedArray[1];
        $this->digit_3 = $input->determinedArray[2];
    }

    public function numToWord($lang){
        if($this->digit_2 == 1){
            return $this->third($lang) . ' ' . $this->second($lang);
        }

        if($lang == 'en')
            return $this->third($lang) . ' ' . $this->second($lang) . '' . $this->first($lang);
        else
            return $this->third($lang) . ' ' . $this->second($lang) . ' ' . $this->first($lang);
    }

} 