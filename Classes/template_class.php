<?php
/**
 * Created by PhpStorm.
 * User: Uldis.Vinklers
 * Date: 15.06.2018
 * Time: 10:58
 */



class Template_class{

    static function getLibs(){
        echo '
            <meta charset="UTF-8">
            <meta name="viewport"
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=0.1">
            <link href="./css/reset.css" rel="stylesheet">
            <link href = "./libs/bootstrap/css/bootstrap.css" rel ="stylesheet">
            <script src="./libs/jQuery/jquery2.1.4.min.js"></script>
            <script src="./libs/bootstrap/js/bootstrap.js"> </script>
        ';
    }


}