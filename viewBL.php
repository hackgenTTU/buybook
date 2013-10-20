<?php
include('template/init.php');
include('template/function.php');
?><!DOCTYPE html>
<html lang="zh">

<head>
  <?php include('template/head.php'); ?>
  <!-- Custom styles for this template -->

</head>

<body>
  <?php include('template/menu.php');?>
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
            <h3><?=$text['blist_name']?></h3>
            <form action="control/book.php" method="post">
              <input type="hidden" name="cmd" value="reserveBook">
              <input type="hidden" name="key" value="<?=key_gen();?>">
              <input type="hidden" name="blid" value="<?=$_GET['blid']?>">

              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th class="col-md-1">購買</th>
                    <th class="col-md-6">書名</th>
                    <th class="col-md-2">作者</th>
                    <th class="col-md-1">價格</th>
                    <th class="col-md-2">出版社</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $text = json_decode(post('control/book.php',array('cmd'=>'getBookListDetail','blid'=>$_GET['blid'])),1);
                    
                    foreach ($text as $row) {
                      ?>
                      <tr>
                        <td><input type="checkbox" name="bid[]" value="<?=$row['bid']?>"></td>
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
              <input type="submit" value="購買" class="btn btn-primary col-md-2 col-md-offset-5">
            </form>
            
            
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