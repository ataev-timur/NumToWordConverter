<?php
/**
 * Created by PhpStorm.
 * User: Timmy
 * Date: 17.06.14
 * Time: 12:27
 */

require_once 'Converter.php';

class FourDigitConverter extends Converter{

    public function __construct(Input $input){
        $this->digit_1 = $input->determinedArray[0];
        $this->digit_2 = $input->determinedArray[1];
        $this->digit_3 = $input->determinedArray[2];
        $this->digit_4 = $input->determinedArray[3];
    }

    public function numToWord($lang){
        if($this->digit_2 == 1){
            return $this->fourth($lang) .' '. $this->third($lang) .' '. $this->second($lang);
        }

        if($lang == 'en')
            return $this->fourth($lang) .' '. $this->third($lang) .' '. $this->second($lang) .''. $this->first($lang);
        else
            return $this->fourth($lang) .' '. $this->third($lang) .' '. $this->second($lang) .' '. $this->first($lang);
    }

} 