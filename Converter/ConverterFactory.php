<?php
/**
 * Created by PhpStorm.
 * User: Timmy
 * Date: 16.06.14
 * Time: 12:11
 */
require_once 'Input/Input.php';
foreach (glob("*.php") as $filename)
{
    require_once $filename;
}

class ConverterFactory{

    public function createConverter(Input $input){
        $converter = null;
        switch($input->countOfNumbers){
            case 1:
                $converter = new OneDigitConverter($input);
                break;
            case 2:
                $converter = new TwoDigitConverter($input);
                break;
            case 3:
                $converter = new ThreeDigitConverter($input);
                break;
            case 4:
                $converter = new FourDigitConverter($input);
                break;
            case 5:
                $converter = new FiveDigitConverter($input);
                break;
            case 6:
                $converter = new SixDigitConverter($input);
                break;
            case 7:
                $converter = new SevenDigitConverter($input);
                break;
            case 8:
                $converter = new EightDigitConverter($input);
                break;
            case 9:
                $converter = new NineDigitConverter($input);
                break;
            default:
                break;
        }
        return $converter;
    }
} 