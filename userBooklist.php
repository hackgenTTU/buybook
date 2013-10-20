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
                <div class="alert alert-success"><strong>已關閉書單：</strong> 2</div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="alert alert-danger"><strong>未關閉表單：</strong> 4</div>
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
                    <th>書單</th>
                    <th>建立日期</th>
                    <th>截止日期</th>
                    <th>狀態</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="checkbox" value=""></td>
                    <td><a href="clsList.php">第一好書單</a></td>
                    <td>2111/11/07</td>
                    <td>2111/11/11</td>
                    <td>未關閉</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" value=""></td>
                    <td>水母好ㄘ</td>
                    <td>2033/12/12</td>
                    <td>2033/12/29</td>
                    <td>未關閉</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" value=""></td>
                    <td>MACafee</td>
                    <td>2013/10/19</td>
                    <td>2013/10/20</td>
                    <td>未關閉</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" value=""></td>
                    <td>使黃資握</td>
                    <td>2013/09/12</td>
                    <td>2013/10/19</td>
                    <td>未關閉</td>
                  </tr>
                  <tr class="success">
                    <td><input type="checkbox" value=""></td>
                    <td>超級無敵螢幕x4</td>
                    <td>2013/10/20</td>
                    <td>2013/10/21</td>
                    <td>已關閉</td>
                  </tr>
                  <tr class="success">
                    <td><input type="checkbox" value=""></td>
                    <td>節歌不要</td>
                    <td>1990/2/1</td>
                    <td>1990/2/29</td>
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