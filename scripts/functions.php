<?php

    /*
        dd( String ) : Null 
        Dump and Die
        Mostra a variavel e finaliza o programa
    */
    function dd($string){
        print_r($string);
        exit;
    }
    /*
        Loged( Booleam ) : 
        function Loged caso esteja logado
    */
    function Loged($booleam){
        error_reporting(0);
        if($booleam['UserName'] == NULL){
            return false;
        }else {
            return true;
        }
    }
    /*
        function Erro caso seja inválido
    */
    function Invalid($string){
        echo '<body onload="window.history.back();">';
        echo '<script>';
        echo "alert('{$string}')";
        echo '</script>';
    }
    /*
        function Sucess caso operação sejá bem sucedida
    */
    function Sucess($string){
        echo '<body onload="window.history.back();">';
        echo '<script>';
        echo "alert('{$string}')";
        echo '</script>';
    }