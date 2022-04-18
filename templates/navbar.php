<?php
    session_start();
    
    include_once '../scripts/config.php';
    include '../scripts/functions.php';

    if(Loged($_SESSION) == true){
        include_once 'navbarloged.php';
        echo 'test';
    }else {
        include_once 'navbarnotloged.php';
    }
?>