<?php
    session_start();
    include('sql.php');
    include('load_module.php');
    include('../module/functions.php');
    $user = new User($db);

    if(isset($_SESSION['key'])){
        if($_SESSION['key'] != key_gen()){
            die('金鑰錯誤');
        }
    }

    if($_POST['cmd'] == 'login'){
        try {
            $result = $user->login($_POST['usernm'],$_POST['passwd']);
            $_SESSION['user_data'] = $result;
        } catch (Exception $e) {
            $_SESSION['msg'] = $e->getMessage();
        }
        
        go('../index.php',$db);
    }

    if($_POST['cmd'] == 'signin'){
        
        try {
            $user->addUser($_POST['usernm'],$_POST['passwd'],$_POST['re_passwd'],$_POST['realname']);
            $_SESSION['msg']='註冊成功';
        } catch (Exception $e) {
            $_SESSION['msg'] = $e->getMessage();
        }
        go('../index.php',$db);
        
    }

?>