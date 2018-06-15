<?php
/**
 * Created by PhpStorm.
 * User: Uldis.Vinklers
 * Date: 15.06.2018
 * Time: 10:57
 */





class Main_class
{


var $numberOne = 1;
var $nummberTwo = 2;


    static function showError(){
        error_reporting(E_ALL);
        ini_set('display_errors', '1');
    }

    static function getPHPvers()
    {
       echo phpversion();

    }


    public function setNumnberOne($nummberOne){
        $this -> nummberOne = $nummberOne;

    }

    public function getNumberOne(){
        return $this->numberOne;
    }

    public function setNummberTwo($nummberTwo){
        $this ->nummberTwo = $nummberTwo;
    }


}

