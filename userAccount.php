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
        <br><br><br>
        <div class="row">
          <div class="col-lg-2">
            <?php include('template/sidebar.php'); ?>
          </div>
          <div class="col-lg-6">
            <br>
            <legend>註冊</legend>
            <?php
                $text = json_decode(post('control/user.php',array('user_data'=>$_SESSION['user_data'],'cmd'=>'getUserData')),1);
                
            ?>
            <form class="form-horizontal">
                <input type="hidden" name="cmd" value="update_passwd">
                <input type="hidden" name="key" value="<?php echo key_gen();?>">
              <fieldset>
                <div class="form-group">
                  <label for="inputUser" class="col-lg-2 control-label">我的帳號</label>
                  <div class="col-lg-10">
                      <strong class="form-control"><?=$text['usernm']?></strong>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-lg-2 control-label">我的名字</label>
                  <div class="col-lg-10">
                      <strong class="form-control"><?=$text['realname']?></strong>
                  </div>
                </div>
                <div class="form-group">
                  <label for="confrimEmail" class="col-lg-2 control-label">我的學校</label>
                  <div class="col-lg-10">
                    <strong class="form-control"><?=$text['school']?></strong>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="col-lg-2 control-label">修改密碼</label>
                  <div class="col-lg-10">
                    <input type="password" class="form-control" name="passwd" id="inputPassword" placeholder="New Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="confrimPassword" class="col-lg-2 control-label">確認修改</label>
                  <div class="col-lg-10">
                    <input type="password" name="re_passwd" class="form-control form-warring" id="confrimPassword" placeholder="Confirm Password">
                  </div>
                </div>
                
                <div class="col-md-12">
                  <div class="form-group">
                      <button class="btn btn-default col-md-3 pull-left">取消</button>
                      <button type="submit" class="btn btn-primary col-md-3 pull-right" onclick="javascript:(function(){if($('#confrimPassword').val() != $('#inputPassword').val()) alert('兩次輸入的密碼不一樣！');})();">修改</button>
                      
                    
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