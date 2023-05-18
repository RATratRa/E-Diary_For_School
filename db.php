<?php

require "libs/rb.php";
R::setup( 'mysql:host=localhost;dbname=rokyni',
        'root', '' );
session_start();
$name = trim($_SESSION['logged_user']->name);
$name_db;
switch($name){
        case 'Головченко Владислав':
            $name_db = 'holovchenko';
            break;
        case 'Качмарик Богдан':
            $name_db = 'kachmaryk';
            break;
        case 'Корець Дарина':
            $name_db = 'korets';
            break;
        case 'Бущук Ансатаciя':
            $name_db = 'buschuk';
            break;
        case 'Ганiч Богдан':
            $name_db = 'hanich';
            break;
        case 'Гапонюк Олександр':
            $name_db = 'haponiuk';
            break;
        case 'Бондарук Дмитро':
            $name_db = 'bondaruk';
            break;
        case 'Тарасюк Ансатаciя':
            $name_db = 'tarasiuk';
            break;
        case 'Гапонюк Ансатаciя':
            $name_db = 'haponiukn';
            break;
}
