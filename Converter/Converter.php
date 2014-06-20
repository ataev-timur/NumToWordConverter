<?php
/**
 * Created by PhpStorm.
 * User: Timmy
 * Date: 17.06.14
 * Time: 10:03
 */

abstract class Converter {


    protected $digit_9;
    protected $digit_8;
    protected $digit_7;
    protected $digit_6;
    protected $digit_5;
    protected $digit_4;
    protected $digit_3;
    protected $digit_2;
    protected $digit_1;

    protected $uaThousandDictionary = [
        1 => 'одна',
        2 => 'дві',
        24 => 'тисячі',
        59 => 'тисяч',
    ];

    protected $ruThousandDictionary = [
        1 => 'одна',
        2 => 'две',
        24 => 'тысячи',
        59 => 'тысяч',
    ];

    protected $uaMillionDictionary = [
        24 => 'мільйони',
        59 => 'мільйонів',
    ];

    protected $ruMillionDictionary = [
        24 => 'миллиона',
        59 => 'миллионов',
    ];

    protected $uaDictionary = [
        0 => 'нуль',
        1 => 'один',
        2 => 'два',
        3 => 'три',
        4 => 'чотири',
        5 => 'п\'ять',
        6 => 'шість',
        7 => 'сім',
        8 => 'вісім',
        9 => 'дев\'ять',
        10 => 'десять',
        11 => 'одинадцять',
        12 => 'дванадцять',
        13 => 'тринадцять',
        14 => 'чотирнадцять',
        15 => 'п\'ятнадцять',
        16 => 'шістнадцять',
        17 => 'сімнадцять',
        18 => 'вісімнадцять',
        19 => 'дев\'ятнадцять',
        20 => 'двадцять',
        30 => 'тридцять',
        40 => 'сорок',
        50 => 'п\'ятдесят',
        60 => 'шістдесят',
        70 => 'сімдесят',
        80 => 'вісемдесят',
        90 => 'дев\'яносто',
        100 => 'сто',
        200 => 'двісті',
        300 => 'триста',
        400 => 'чотириста',
        500 => 'п\'ятсот',
        600 => 'шістсот',
        700 => 'сімсот',
        800 => 'вісімсот',
        900 => 'девятсот',
        1000 => 'тисяча',
        1000000 => 'мільйон',
    ];
    protected $enDictionary = [
        0 => 'zero',
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
        10 => 'ten',
        11 => 'eleven',
        12 => 'twelve',
        13 => 'thirteen',
        14 => 'fourteen',
        15 => 'fifteen',
        16 => 'sixteen',
        17 => 'seventeen',
        18 => 'eighteen',
        19 => 'nineteen',
        20 => 'twenty',
        30 => 'thirty',
        40 => 'forty',
        50 => 'fifty',
        60 => 'sixty',
        70 => 'seventy',
        80 => 'eighty',
        90 => 'ninety',
        100 => 'hundred',
        1000 => 'thousand',
        1000000 => 'million',
    ];
    protected $ruDictionary = [
        0 => 'ноль',
        1 => 'один',
        2 => 'два',
        3 => 'три',
        4 => 'четыре',
        5 => 'пять',
        6 => 'шесть',
        7 => 'семь',
        8 => 'восемь',
        9 => 'девять',
        10 => 'десять',
        11 => 'одиннадцать',
        12 => 'двенадцать',
        13 => 'тринадцать',
        14 => 'четырнадцать',
        15 => 'пятнадцать',
        16 => 'шестнадцать',
        17 => 'семнадцать',
        18 => 'восемнадцать',
        19 => 'девятнадцать',
        20 => 'двадцать',
        30 => 'тридцать',
        40 => 'сорок',
        50 => 'пятьдесят',
        60 => 'шестьдесят',
        70 => 'семьдесят',
        80 => 'восемьдесят',
        90 => 'девяносто',
        100 => 'сто',
        200 => 'двести',
        300 => 'триста',
        400 => 'четыреста',
        500 => 'пятьсот',
        600 => 'шестьсот',
        700 => 'семьсот',
        800 => 'восемьсот',
        900 => 'девятьсот',
        1000 => 'тысяча',
        1000000 => 'миллион',
    ];

    abstract public function numToWord($lang);

    protected function getThousand($num, $lang){
        switch($num){
            case 1:
                if($lang == 'ua')
                    return $this->uaThousandDictionary[$num] .' '. $this->uaDictionary[1000] ;
                else if($lang = 'ru')
                    return $this->ruThousandDictionary[$num] .' '. $this->ruDictionary[1000] ;
                break;
            case 2:
                if($lang == 'ua')
                    return $this->uaThousandDictionary[$num] .' '. $this->uaThousandDictionary[24] ;
                else if($lang == 'ru')
                    return $this->ruThousandDictionary[$num] .' '. $this->ruThousandDictionary[24] ;
                break;
            case 3:
            case 4:
                if($lang == 'ua')
                    return $this->uaDictionary[$num] .' '. $this->uaThousandDictionary[24] ;
                else if($lang == 'ru')
                    return $this->ruDictionary[$num] .' '. $this->ruThousandDictionary[24] ;
                break;
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
                if($lang == 'ua')
                    return $this->uaDictionary[$num] .' '. $this->uaThousandDictionary[59] ;
                else if($lang == 'ru')
                    return $this->ruDictionary[$num] .' '. $this->ruThousandDictionary[59] ;
                break;
            default:
                break;
        }
    }

    protected function getMillion($num, $lang){
        switch($num){
            case 1:
                if($lang == 'ua')
                    return $this->uaDictionary[$num] .' '. $this->uaDictionary[1000000] ;
                else if($lang = 'ru')
                    return $this->ruDictionary[$num] .' '. $this->ruDictionary[1000000] ;
                break;
            case 2:
                if($lang == 'ua')
                    return $this->uaDictionary[$num] .' '. $this->uaMillionDictionary[24] ;
                else if($lang == 'ru')
                    return $this->ruDictionary[$num] .' '. $this->ruMillionDictionary[24] ;
                break;
            case 3:
            case 4:
                if($lang == 'ua')
                    return $this->uaDictionary[$num] .' '. $this->uaMillionDictionary[24] ;
                else if($lang == 'ru')
                    return $this->ruDictionary[$num] .' '. $this->ruMillionDictionary[24] ;
                break;
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
                if($lang == 'ua')
                    return $this->uaDictionary[$num] .' '. $this->uaMillionDictionary[59] ;
                else if($lang == 'ru')
                    return $this->ruDictionary[$num] .' '. $this->ruMillionDictionary[59] ;
                break;
            default:
                break;
        }
    }

    protected function first($lang){
        if($this->digit_1 == 0)
            return '';

        switch($lang){
            case 'ua':
                return $this->uaDictionary[$this->digit_1];
                break;
            case 'en':
                return ($this->digit_4 != 0 and $this->digit_2 == 0) ? ' and ' . $this->enDictionary[$this->digit_1] :  $this->enDictionary[$this->digit_1];
                break;
            case 'ru':
                return $this->ruDictionary[$this->digit_1];
                break;
            default:
                break;
        }
    }

    protected function second($lang){
        if($this->digit_2 == 0)
            return '';

        switch($lang){
            case 'ua':
                if($this->digit_2 == 1)
                    return $this->uaDictionary[$this->digit_2 + 9 + $this->digit_1];
                else
                    return $this->uaDictionary[$this->digit_2 * 10];
                break;
            case 'en':
                if($this->digit_2 == 1)
                    return $this->enDictionary[$this->digit_2 + 9 + $this->digit_1];
                else
                    return $this->enDictionary[$this->digit_2 * 10] . ($this->digit_1 == 0 ? '' : '-');
                break;
            case 'ru':
                if($this->digit_2 == 1)
                    return $this->ruDictionary[$this->digit_2 + 9 + $this->digit_1];
                else
                    return $this->ruDictionary[$this->digit_2 * 10];
                break;
            default:
                break;
        }
    }

    protected function third($lang){
        if($this->digit_3 == 0)
            return '';

        switch($lang){
            case 'ua':
                return $this->uaDictionary[$this->digit_3 * 100];
                break;
            case 'en':
                return $this->enDictionary[$this->digit_3] . ' ' . $this->enDictionary[100] .(($this->digit_4 != 0 and $this->digit_2 >= 1 and $this->digit_1 == 0) ? ' and ' : '');
                break;
            case 'ru':
                return $this->ruDictionary[$this->digit_3 * 100];
                break;
            default:
                break;
        }
    }

    protected function fourth($lang){
        if($this->digit_4 == 0)
            return '';

        switch($lang){
            case 'ua':
                    return $this->getThousand($this->digit_4, $lang);
                break;
            case 'en':
                return $this->enDictionary[$this->digit_4] . ' ' . $this->enDictionary[1000] . (($this->digit_3 == 0 and $this->digit_1 != 0 ) ? ' and ' : ' ');
                break;
            case 'ru':
                return $this->getThousand($this->digit_4, $lang);
                break;
            default:
                break;
        }
    }

    protected function fifth($lang){
        if($this->digit_5 == 0)
            return '';

        switch($lang){
            case 'ua':
                if($this->digit_5 > 1 and $this->digit_4 > 0)
                    return $this->uaDictionary[$this->digit_5 * 10];
                else if($this->digit_5 == 1)
                    return $this->uaDictionary[$this->digit_5 + 9 + $this->digit_4] .' '. $this->uaThousandDictionary[59];
                else
                    return $this->uaDictionary[$this->digit_5 * 10] .' '. $this->uaThousandDictionary[59];
                break;
            case 'en':
                if($this->digit_5 > 1 and $this->digit_4 > 0)
                    return $this->enDictionary[$this->digit_5 * 10];
                else if($this->digit_5 == 1)
                    return $this->enDictionary[$this->digit_5 + 9 + $this->digit_4] .' '. $this->enDictionary[1000];
                else
                    return $this->enDictionary[$this->digit_5 * 10] .' '. $this->enDictionary[1000] . ($this->digit_4 == 0 ? '' : '-');
                break;
            case 'ru':
                if($this->digit_5 > 1 and $this->digit_4 > 0)
                    return $this->ruDictionary[$this->digit_5 * 10];
                else if($this->digit_5 == 1)
                    return $this->ruDictionary[$this->digit_5 + 9 + $this->digit_4] .' '. $this->uaThousandDictionary[59];
                else
                    return $this->ruDictionary[$this->digit_5 * 10] .' '. $this->ruThousandDictionary[59];
                break;
            default:
                break;
        }
    }

    protected function sixth($lang){
        if($this->digit_6 == 0)
            return '';

        switch($lang){
            case 'ua':
                if($this->digit_5 > 0 or $this->digit_4 > 0)
                    return $this->uaDictionary[$this->digit_6 * 100];
                else
                    return $this->uaDictionary[$this->digit_6 * 100] .' '. $this->uaThousandDictionary[59];
                break;
            case 'en':
                return $this->enDictionary[$this->digit_6] . ' ' . $this->enDictionary[100];// .(($this->digit_4 != 0 and $this->digit_2 >= 1 and $this->digit_1 == 0) ? ' and ' : '');
                break;
            case 'ru':
                if($this->digit_5 > 0 or $this->digit_4 > 0)
                    return $this->ruDictionary[$this->digit_6 * 100];
                else
                    return $this->ruDictionary[$this->digit_6 * 100] .' '. $this->ruThousandDictionary[59];
                break;
            default:
                break;
        }
    }

    protected function seventh($lang){
        if($this->digit_7 == 0)
            return '';

        switch($lang){
            case 'ua':
                return $this->getMillion($this->digit_7, $lang);
                break;
            case 'en':
                return $this->enDictionary[$this->digit_7] . ' ' . $this->enDictionary[1000000]; // . (($this->digit_3 == 0 and $this->digit_1 != 0 ) ? ' and ' : ' ');
                break;
            case 'ru':
                return $this->getMillion($this->digit_7, $lang);
                break;
            default:
                break;
        }
    }

    protected function eighth($lang){
        if($this->digit_8 == 0)
            return '';

        switch($lang){
            case 'ua':
                if($this->digit_8 > 1 and $this->digit_7 > 0)
                    return $this->uaDictionary[$this->digit_8 * 10];
                else if($this->digit_8 == 1)
                    return $this->uaDictionary[$this->digit_8 + 9 + $this->digit_7] .' '. $this->uaMillionDictionary[59];
                else
                    return $this->uaDictionary[$this->digit_8 * 10] .' '. $this->uaMillionDictionary[59];
                break;
            case 'en':
                if($this->digit_8 > 1 and $this->digit_7 > 0)
                    return $this->enDictionary[$this->digit_8 * 10];
                else if($this->digit_8 == 1)
                    return $this->enDictionary[$this->digit_8 + 9 + $this->digit_7] .' '. $this->enDictionary[1000000];
                else
                    return $this->enDictionary[$this->digit_8 * 10] .' '. $this->enDictionary[1000000];// . ($this->digit_4 == 0 ? '' : '-');
                break;
            case 'ru':
                if($this->digit_8 > 1 and $this->digit_7 > 0)
                    return $this->ruDictionary[$this->digit_8 * 10];
                else if($this->digit_8 == 1)
                    return $this->ruDictionary[$this->digit_8 + 9 + $this->digit_7] .' '. $this->ruMillionDictionary[59];
                else
                    return $this->ruDictionary[$this->digit_8 * 10] .' '. $this->ruMillionDictionary[59];
                break;
            default:
                break;
        }
    }

    protected function ninth($lang){
        if($this->digit_9 == 0)
            return '';

        switch($lang){
            case 'ua':
                if($this->digit_8 > 0 or $this->digit_7 > 0)
                    return $this->uaDictionary[$this->digit_9 * 100];
                else
                    return $this->uaDictionary[$this->digit_9 * 100] .' '. $this->uaMillionDictionary[59];
                break;
            case 'en':
                return $this->enDictionary[$this->digit_9] . ' ' . $this->enDictionary[100];// .(($this->digit_4 != 0 and $this->digit_2 >= 1 and $this->digit_1 == 0) ? ' and ' : '');
                break;
            case 'ru':
                if($this->digit_8 > 0 or $this->digit_7 > 0)
                    return $this->ruDictionary[$this->digit_9 * 100];
                else
                    return $this->ruDictionary[$this->digit_9 * 100] .' '. $this->ruMillionDictionary[59];
                break;
            default:
                break;
        }
    }
}
