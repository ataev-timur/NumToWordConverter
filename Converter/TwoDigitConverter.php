<?php
/**
 * Created by PhpStorm.
 * User: Timmy
 * Date: 16.06.14
 * Time: 12:31
 */

require_once 'Converter.php';

class TwoDigitConverter extends Converter{

    public function __construct(Input $input){
        $this->digit_1 = $input->determinedArray[0];
        $this->digit_2 = $input->determinedArray[1];
    }

    public function numToWord($lang){
        if($this->digit_2 == 1){
            return $this->second($lang);
        }

        if($lang == 'en')
            return $this->second($lang) . '' . $this->first($lang);
        else
            return $this->second($lang) . ' ' . $this->first($lang);
    }

} 