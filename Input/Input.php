<?php
/**
 * Created by PhpStorm.
 * User: Timmy
 * Date: 14.06.14
 * Time: 11:41
 */

class Input {
    private $number = null;
    public $countOfNumbers;
    public $determinedArray = [];
    public function getNumber(){
        return $this->number;
    }

    public function setNumber($number){
        $this->number = $number;
        $this->determineNumbers();
    }

    private function calculateCountOfNumbers(){
        if (preg_match("|^[\d]+$|", $this->getNumber()))
            $this->countOfNumbers = strlen((int)$this->getNumber());
        else
            echo 'Please Input Integer <br />';
    }

    public function determineNumbers(){
        $this->calculateCountOfNumbers();
        for($i = $this->countOfNumbers - 1; $i >= 0; $i--){
            array_push($this->determinedArray, substr($this->getNumber(), $i, 1));
        }
    }


}
