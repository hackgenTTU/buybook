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
              $text = json_decode(post('control/book.php',array('cmd'=>'getbookdata','blid'=>$_GET['blid'])),1);       
            ?>
            
            <div class="btn-group" data-toggle="buttons" style="margin: 9px auto;">
              <label class="btn btn-default">
                <input type="checkbox"> 列印表單
              </label>
              <label class="btn btn-default">
                <input type="checkbox"> 關閉表單
              </label>
              <label class="btn btn-default">
                <input type="checkbox"> 刪除表單
              </label>
              <label class="btn btn-default">
                <input type="checkbox"> 切換統計模式
              </label>
            </div>
            <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>姓名</th>
                    <th>書名</th>
                    <th>數量</th>
                    <th>單價</th>
                    <th>總額</th>
                    <th>已付</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php
                 
                    $i = 0;
                    foreach ($text as $row) {
                      $i++;
                        ?>
                        <tr>
                          <td><?=$i?></td>
                          <td><?=$row['realname']?></td>
                          <td><?=$row['book_name']?></td>
                          <td><?=$row['num']?></td>
                          <td><?=$row['price']?></td>
                          <td><?=$row['total_price']?></td>
                          <td><?=$row['paid_money']?></td>
                          
                        </tr>
                        <?php
                    }
                  ?>
                  
                  
                </tbody>
            </table>
            <div class="btn-group" data-toggle="buttons" style="margin: 9px auto;">
              <label class="btn btn-default">
                <input type="checkbox"> 列印表單
              </label>
              <label class="btn btn-default">
                <input type="checkbox"> 關閉表單
              </label>
              <label class="btn btn-default">
                <input type="checkbox"> 刪除表單
              </label>
              <label class="btn btn-default">
                <input type="checkbox"> 切換統計模式
              </label>
            </div>
            <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <ul class="pagination" style="margin: 0 auto;">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
            </div>
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