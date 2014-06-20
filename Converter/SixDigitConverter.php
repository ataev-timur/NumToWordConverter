<?php
/**
 * Created by PhpStorm.
 * User: Timmy
 * Date: 18.06.14
 * Time: 13:42
 */

require_once 'Converter.php';

class SixDigitConverter extends Converter{

    public function __construct(Input $input){
        $this->digit_1 = $input->determinedArray[0];
        $this->digit_2 = $input->determinedArray[1];
        $this->digit_3 = $input->determinedArray[2];
        $this->digit_4 = $input->determinedArray[3];
        $this->digit_5 = $input->determinedArray[4];
        $this->digit_6 = $input->determinedArray[5];
    }

    public function numToWord($lang){
        if($this->digit_5 == 1 and $this->digit_2 == 1)
            return $this->sixth($lang) .' '. $this->fifth($lang) .' '. $this->third($lang) .' '. $this->second($lang);
        else if($this->digit_5 == 1)
            return $this->sixth($lang) .' '. $this->fifth($lang) .' '. $this->third($lang) .' '. $this->second($lang) . ($lang=='en' ? '': ' '). $this->first($lang);
        else if($this->digit_2 == 1)
            return $this->sixth($lang) .' '. $this->fifth($lang) .' '. $this->fourth($lang) .' '. $this->third($lang) .' '. $this->second($lang);
        if($lang == 'en')
            return $this->sixth($lang) .' '. $this->fifth($lang) .' '. $this->fourth($lang) .' '. $this->third($lang) .' '. $this->second($lang) .''. $this->first($lang);
        else
            return $this->sixth($lang) .' '. $this->fifth($lang) .' '. $this->fourth($lang) .' '. $this->third($lang) .' '. $this->second($lang) .' '. $this->first($lang);
    }

} 