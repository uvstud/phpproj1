<?php
//ieslēdz php kļuudu attelosanos
error_reporting(E_ALL);
ini_set('display_errors', '1');

//pievieno klases
    require_once ("./Classes/template_class.php");
    require_once ("./Classes/main_class.php");

    Template_class::getLibs(); //pievieno visas bibliotekas
    Main_class::showError(); //pievien kļudaas paziņojumus
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<section class="container-fluid">
    <nav class="navbar navbar-expand-sm bg-light">

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#id=1">Uzdevums 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Uzdevums 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Uzdevums 3</a>
            </li>
        </ul>

    </nav>

    <div class="row">
        <div class="col-md-4">Noskaidrot, kura php versija ir uzlikta ? </div>
        <div class="col-md-6"></div>
            <div class="btn btn-success">Atbilde !</div>
        <div class="col-md-2"<p><?php Main_class::getPHPvers() ?></p></div>
    </div>



</section>







</body>
</html>
