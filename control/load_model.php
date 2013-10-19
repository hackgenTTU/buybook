<?php
    function autoload($name){
        spl_autoload('../model/' . strtolower($name));
    }
    spl_autoload_register('autoload');
?>