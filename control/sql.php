<?php
    $con_str = "mysql:host=localhost;dbname=buybook";
    $db = new PDO($con_str,'buybook','5Lz9w8xZGEmfxafN');
    $db->exec("set names utf8");
?>