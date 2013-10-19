<?php
    include('sql.php');
    include('load_module.php');

    $user = new User($db);
    var_dump($user->addUser('aaaaaa','abcabc','abcabc','林熙'));
?>