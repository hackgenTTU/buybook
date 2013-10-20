<?php
    session_start();
    include('load_module.php');
    include('sql.php');
    $book = new Book($db);
    if($_POST['cmd']=='showBookList'){
        echo json_encode($book->showBookList(8));
    }
?>