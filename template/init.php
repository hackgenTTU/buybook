<?php
    session_start();
    
    if(@isset($_SESSION['msg'])){
        echo '<script>alert("' . $_SESSION['msg'] . '")</script>';
        $_SESSION['msg'] = null;
    }

?>