<?php
    function autoload($name){
        spl_autoload('../module/' . strtolower($name));
    }
    spl_autoload_register('autoload');
?>