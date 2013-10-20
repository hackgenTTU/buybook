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
        <br>
        <br>
        <br>
        <div class="row">
          <div class="col-lg-2">
            <?php include('template/sidebar.php'); ?>
          </div>
          <div class="col-lg-10">
            <br>
            <br>
            <br>
            <legend>註冊</legend>
            <form class="form-horizontal">
              <fieldset>
                <div class="form-group">
                  <label for="inputeduEmail" class="col-lg-2 control-label">學校信箱</label>
                  <div class="col-lg-10">
                  <input type="text" class="form-control" id="inputeduEmail" placeholder="example@xxx.edu.tw">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-lg-2 control-label">個人信箱</label>
                  <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="example@gmail.com">
                  </div>
                </div>
                <div class="form-group">
                  <div class="pull-right">
                    <button type="submit" class="btn btn-primary">提交</button>
                    <button class="btn btn-default">取消</button>
                  </div>
                </div>
              </fieldset>
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