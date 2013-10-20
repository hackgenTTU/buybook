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
            <ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
              <li><a href="userAccount.php">我的資料</a></li>
              <li class="active"><a href="userBooklist.php">我的書單</a></li>
              <li><a href="userEmail.php">我的信箱</a></li>
              <li><a href="userLogout.php">系統登出</a></li>
            </ul>
          </div>
          <div class="col-lg-10">
            <div class="alert alert-info">
              <strong>書本名稱：</strong><p>Linux 企業現場應用系統｜網路管理 x 訊息管理 x 私有雲建置 x 協同作業平台</p>
              <strong>書本價格：</strong><p>NT$1,001</p>
              <strong>截止日期：</strong><p>2111/11/11</p>
            </div>
            <div class="btn-group" data-toggle="buttons" style="margin: 9px auto;">
              <label class="btn btn-primary btn-warning">
                <input type="checkbox"> 列印表單
              </label>
              <label class="btn btn-primary btn-warning">
                <input type="checkbox"> 關閉表單
              </label>
              <label class="btn btn-primary btn-warning">
                <input type="checkbox"> 刪除表單
              </label>
            </div>
            <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>姓名</th>
                    <th>繳交狀態</th>
                    <th>繳交金額</th>
                    <th>是否付款</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>丁曉明</td>
                    <td>未繳款</td>
                    <td>0</td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>黑鼠大</td>
                    <td>未繳款</td>
                    <td>0</td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>大黑鼠</td>
                    <td>已繳款</td>
                    <td>1,010</td>
                    <td><input type="checkbox" checked></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>鼠大黑</td>
                    <td>未繳款</td>
                    <td>0</td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>黑大鼠</td>
                    <td>已繳款</td>
                    <td>1,100</td>
                    <td><input type="checkbox" checked></td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>大鼠黑</td>
                    <td>未繳款</td>
                    <td>0</td>
                    <td><input type="checkbox"></td>
                  </tr>
                </tbody>
            </table>
            <div class="btn-group" data-toggle="buttons" style="margin: -9px auto;">
              <label class="btn btn-primary btn-warning">
                <input type="checkbox"> 列印表單
              </label>
              <label class="btn btn-primary btn-warning">
                <input type="checkbox"> 關閉表單
              </label>
              <label class="btn btn-primary btn-warning">
                <input type="checkbox"> 刪除表單
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