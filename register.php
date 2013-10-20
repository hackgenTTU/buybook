
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
	    <div class="container marketing">
	    <hr class="featurette-divider">
	    <br />
	    <br />
	    <!-- Main jumbotron for a primary marketing message or call to action -->
		    <div class="row">
			    <div class="col-lg-2"></div>
			      <!-- Example row of columns -->
			    <div class="col-lg-8">
			      <form class="form-horizontal" action="control/user.php" method="post">
			      	<input type="hidden" name="cmd" value="signin">
			      	<input type="hidden" name="key" value=<?php echo key_gen();?>>
	                <fieldset>
	                  <legend>註冊</legend>
	                  <div class="form-group">
	                    <label for="inputUser" class="col-lg-2 control-label">使用者名稱</label>
	                    <div class="col-lg-10">
	                      <input type="text" name="usernm" class="form-control" id="inputUser" placeholder="User Name" required>
	                    </div>
	                  </div>
	                  <div class="form-group">
	                    <label for="inputPassword" class="col-lg-2 control-label">輸入密碼</label>
	                    <div class="col-lg-10">
	                      <input type="password" name="passwd" class="form-control" id="inputPassword" placeholder="Password" required>
	                    </div>
	                  </div>
	                  <div class="form-group">
	                    <label for="confrimPassword" class="col-lg-2 control-label">確認密碼</label>
	                    <div class="col-lg-10">
	                      <input type="password"name="re_passwd"  class="form-control form-warring" id="confrimPassword" placeholder="Confirm Password" required>
	                    </div>
	                  </div>
	                  <div class="form-group">
	                    <label for="inputName" class="col-lg-2 control-label">真實姓名</label>
	                    <div class="col-lg-10">
	                      <input type="text" name="realname" class="form-control" id="inputName" placeholder="Real Name" required>
	                    </div>
	                  </div>
	                 
	                  
	                  <div class="form-group">
		                <div class="col-lg-10 col-lg-offset-2">
		              	  <label class="checkbox">
			                <input type="checkbox" value="agree-me" data-val-mandatory="同意後繼續" required> 同意使用規範
			              </label>
		                </div>
		              </div>
	                  <div class="form-group">
	                    <div class="pull-right">
	                      <button type="submit" class="btn btn-primary" onclick="javascript:(function(){if($('#confrimPassword').val() != $('#inputPassword').val()) alert('兩次輸入的密碼不一樣！');})();">註冊</button> 
	                      <button class="btn btn-default">取消</button> 
	                    </div>
	                  </div>
	                </fieldset>
	              </form>
		        </div>
		        <div class="col-lg-2"></div>
		    </div>

	      <hr>
	      <footer>
	        <p>&copy; Company 2013</p>
	        
	      </footer>
	    </div> <!-- /container -->


	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>