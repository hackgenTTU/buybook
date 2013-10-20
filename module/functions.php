<?php
    function go($url,$db){
        header('Location:' . $url);
        $db = null;
        die();
    }
    function key_gen(){
        return md5(floor(date('i',time())/10) . date('G',time()) . '5Lz9w8xZGEmfxafN');
    }
?>