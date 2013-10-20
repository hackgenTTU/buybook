
<?php
include('template/init.php');
include('template/function.php');
?>
<!DOCTYPE html>
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
              <li class="active"><a href="userAccount.php">我的資料</a></li>
              <li><a href="userBooklist.php">我的書單</a></li>
              <li><a href="userEmail.php">我的信箱</a></li>
              <li><a href="userLogout.php">系統登出</a></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <div class="alert alert-warning">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>請進行信箱認證</strong> 未認證信箱可能導致部分服務無法正常運行...
            </div>
            <form class="form-horizontal">
              <fieldset>
                <div class="form-group">
                  <label for="inputUser" class="col-lg-2 control-label">我的帳號</label>
                  <div class="col-lg-10">
                      <strong class="form-control">msWang</strong>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-lg-2 control-label">我的名字</label>
                  <div class="col-lg-10">
                      <strong class="form-control">王曉明</strong>
                  </div>
                </div>
                <div class="form-group">
                  <label for="confrimEmail" class="col-lg-2 control-label">我的學校</label>
                  <div class="col-lg-10">
                    <strong class="form-control">水母大學</strong>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="col-lg-2 control-label">修改密碼</label>
                  <div class="col-lg-10">
                    <input type="password" class="form-control" id="inputPassword" placeholder="New Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="confrimPassword" class="col-lg-2 control-label">確認修改</label>
                  <div class="col-lg-10">
                    <input type="password" class="form-control form-warring" id="confrimPassword" placeholder="Confirm Password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                    <label class="checkbox">
                      <input type="checkbox" value="agree-me" data-val-mandatory="確定修改" required> 確定修改
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="pull-right">
                    <button type="submit" class="btn btn-primary" onclick="javascript:(function(){if($('#confrimPassword').val() != $('#inputPassword').val()) alert('兩次輸入的密碼不一樣！');})();">修改</button>
                    <button class="btn btn-default">取消</button>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
          <div class="col-lg-4">
            <img src="http://soucyagency.com/blog/wp-content/uploads/2012/08/female-college-student1.jpg" class="img-responsive" alt="Image">
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