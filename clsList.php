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
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="alert alert-success"><strong>已關閉書單：</strong> 3</div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="alert alert-danger"><strong>未關閉表單：</strong> 3</div>
              </div>
            </div>
            <div class="btn-group" data-toggle="buttons" style="margin: 9px auto;">
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
                    <th>書名</th>
                    <th>ISBN</th>
                    <th>截止日期</th>
                    <th>狀態</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td><a href="clsBook.php">Linux 企業現場應用系統｜網路管理 x 訊息管理 x 私有雲建置 x 協同作業平台</a></td>
                    <td>986276919X</td>
                    <td>2111/11/11</td>
                    <td>未關閉</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Joomla! 素人架站計畫 Power Pack－給 Joomla! 網站更強大的力量！</td>
                    <td>9862769424</td>
                    <td>2033/12/29</td>
                    <td>未關閉</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>無瑕的程式碼－敏捷軟體開發技巧守則 (Clean Code: A Handbook of Agile Software </td>
                    <td>9862017058</td>
                    <td>2013/10/19</td>
                    <td>未關閉</td>
                  </tr>
                  <tr class="success">
                    <td>4</td>
                    <td>Android APP 程式開發剖析 (適用 Android 3.x~4.x)</td>
                    <td>9572242067</td>
                    <td>1990/2/29</td>
                    <td>已關閉</td>
                  </tr>
                  <tr class="success">
                    <td>5</td>
                    <td>Make：Technology on Your Time 國際中文版 vol.09</td>
                    <td>9866076741</td>
                    <td>1987/6/22</td>
                    <td>已關閉</td>
                  </tr>
                  <tr class="success">
                    <td>6</td>
                    <td>Visual C++ 2012 教學手冊 (Ivor Horton's Beginning Visual C++ 2012)</td>
                    <td>9862769181</td>
                    <td>1921/3/21</td>
                    <td>已關閉</td>
                  </tr>
                </tbody>
            </table>
            <div class="btn-group" data-toggle="buttons" style="margin: -9px auto;">
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