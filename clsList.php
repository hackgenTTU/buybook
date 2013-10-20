<?php
include('template/init.php');
include('template/function.php');
?><!DOCTYPE html>
<html lang="zh">

<head>
  <?php include('template/head.php'); ?>  

</head>

<body>
  <?php include('template/menu.php'); ?>
  <br />
  <div class="container marketing">
    <div class="row">
      <div class="col-lg-12">
        <legend>註冊</legend>
        <div class="row">
          <div class="col-lg-2">
            <?php include('template/sidebar.php'); ?>
          </div>
          <div class="col-lg-10">
            <?php
              $text = json_decode(post('control/book.php',array('user_data'=>$_SESSION['user_data'],'cmd'=>'getBookListInfo','blid'=>$_GET['blid'])),1);
              
            ?>
            <h3><a href="clsBook.php?blid=<?=$_GET['blid']?>"><?=$text['blist_name']?></a><a class="btn btn-success pull-right" href="viewBL.php?blid=<?=$_GET['blid']?>">分享連結</a></h3>
            
            <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>書名</th>
                    <th>作者</th>
                    <th>價格</th>
                    <th>出版社</th>
                  </tr>
                </thead>
                <?php
                  $text = json_decode(post('control/book.php',array('user_data'=>$_SESSION['user_data'],'cmd'=>'getBookListDetail','blid'=>$_GET['blid'])),1);
                  
                ?>
                <tbody>
                  <?php
                    $i=0;
                    foreach ($text as $row) {
                      $i++;
                      ?>
                        <tr>
                          <td><?=$i?></td>
                          <td><?=$row['book_name']?></td>
                          <td><?=$row['book_author']?></td>
                          <td><?=$row['price']?></td>
                          <td><?=$row['publisher']?></td>
                        </tr>    
                      <?
                    }
                  ?>
                  
                </tbody>
            </table>
            
            
        </div>
      </div>
    </div>
    <hr>
    <footer>
      <p>&copy; Company 2013</p>
    </footer>
  </div>
  <!-- /container -->


  <!-- Bootstrap core JavaScript
      ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>