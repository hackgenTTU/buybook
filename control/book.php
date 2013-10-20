<?php
    session_start();
    include('load_module.php');
    include('sql.php');
    include('../module/functions.php');
    if(isset($_SESSION['key'])){
        if($_SESSION['key'] != key_gen()){
            die('金鑰錯誤');
        }
    }
    $book = new Book($db);
    if($_POST['cmd']=='showBookList'){
        echo json_encode($book->showBookList(8));
    }
    if($_POST['cmd'] == 'getBookListByUID' AND isset($_POST['user_data'])){
        echo json_encode($book->getBookListByUID($_POST['user_data']['uid']));
    }
    if($_POST['cmd'] == 'createBookList'){
        $data = array();
        for ($i=0; $i <count($_POST['book_name']) ; $i++) { 
            array_push($data, array(
                'name'=>$_POST['book_name'][$i],
                'price'=>$_POST['book_price'][$i],
                'author'=>$_POST['author'][$i],
                'publisher'=>$_POST['publisher'][$i],
            ));
            
        }
        $book->addBookList($_POST['bl_name'],'',$_SESSION['user_data']['uid'],$_POST['deadline'],$data);
        go('../userBooklist.php');
        
    }
    if($_POST['cmd']=='getBookListDetail'){
        echo json_encode($book->getBookListDetail($_POST['blid']));
        
    }
    if($_POST['cmd']=='getBookListInfo' AND isset($_POST['user_data'])){
        echo json_encode($book->getBookListInfo($_POST['blid']));
        
    }
    
    if($_POST['cmd']=='getbookdata'){
        echo json_encode($book->getReserveList($_POST['blid']));
    }
    if($_POST['cmd']=='reserveBook'){
        foreach ($_POST['bid'] as $value) {
            try {
                $book->reserveBook($_SESSION['user_data']['uid'],$value,$_POST['blid'],1);
                $_SESSION['msg']='預約成功';
            } catch (Exception $e) {
                $_SESSION['msg']=$e->getMessage();
            }
            
        }
        go('../index.php',$db);
    }
?>
