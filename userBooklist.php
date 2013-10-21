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
            
            <div class="col-md-4" style="margin-bottom:20px;">
              <div class="btn-group" data-toggle="buttons" style="margin: -9px auto;">
                <label class="btn btn-default">
                   關閉表單
                </label>
                <label class="btn btn-default">
                   刪除表單
                </label>
              </div>
              <div class="btn-group" data-toggle="buttons" style="margin: -9px auto;">
              <a href="clsCreate.php" class="btn btn-primary">
                   新增表單
              </a>
              </div>

            </div>

            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>書單</th>
                  <th>建立日期</th>
                  <th>截止日期</th>
                  <th>狀態</th>
                </tr>
              </thead>
                <tbody>
                <?php
                  $text = json_decode(post('control/book.php',array('user_data'=>$_SESSION['user_data'],'cmd'=>'getBookListByUID')),1);
                  foreach ($text as $row) {
                    ?>
                    <tr>
                      <td><input type="checkbox" name="blid[]" value="<?=$row['blid']?>"></td>
                      <td><a href="clsList.php?blid=<?=$row['blid']?>"><?=$row['blist_name']?></a></td>
                      <td><?=$row['created_at']?></td>
                      <td><?=$row['deadline']?></td>
                      <td><?=$row['status']?></td>
                    </tr>
                    <?php
                  }
                ?>
                </tbody>
            </table>
            <div class="col-md-5">
              <div class="btn-group" data-toggle="buttons" style="margin: -9px auto;">
                <label class="btn btn-default">
                  關閉表單
                </label>
                <label class="btn btn-default">
                  刪除表單
                </label>
              </div>
              <div class="btn-group" data-toggle="buttons" style="margin: -9px auto;">
                
              <a href="clsCreate.php" class="btn btn-primary">新增表單</a>
              </div>
            </div>   
            
            <div class="col-md-4">
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