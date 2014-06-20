<?php
/**
 * Created by PhpStorm.
 * User: Timmy
 * Date: 14.06.14
 * Time: 12:38
 */

require_once 'Converter/ConverterFactory.php';

class Output {
    private $factory;
    private $converter;

    public function __construct(Input $input){
        $this->factory = new ConverterFactory();
        $this->converter = $this->factory->createConverter($input);
    }

    public function display($lang){
        echo $this->converter->numToWord($lang) . '<br />';
    }
} 