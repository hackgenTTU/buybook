<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">聽風者訂書系統</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">書單 <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">書單功能</li>
                <li><a href="clsCreate.php">建立書單</a></li>
                <li><a href="userBooklist.php">我的書單</a></li>
              </ul>
            </li>
            <li><a href="about.php">關於</a></li>
      </ul>
      
        <?php
            if(@$_SESSION['user_data']['password']!=''){
                ?>
                <ul class="nav navbar-nav pull-right">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">會員 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-header">會員資料</li>
                      <li><a href="userAccount.php">我的資料</a></li>
                      <li><a href="userBooklist.php">我的書單</a></li>
                      <li><a href="userEmail.php">我的信箱</a></li>
                      <li class="divider"></li>
                      <li><a href="userLogout.php">系統登出</a></li>
                    </ul>
                  </li>
                </ul>
                <?php
            }else{
                ?>
                <form class="navbar-form navbar-right" action="control/user.php" method="post">
                  <div class="form-group">
                    <input type="text" placeholder="Email" name="usernm" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="password" placeholder="Password" name="passwd" class="form-control">
                  </div>
                  <input type="hidden" name="cmd" value="login">
                  <button type="submit" class="btn btn-success">登入</button>
                  <a href="register.php">
                    <button type="button" class="btn btn-warning">註冊</button>
                  </a>
                </form>
                <?php
            }
        ?>
      
    </div>
    <!--/.navbar-collapse -->
  </div>
</div>