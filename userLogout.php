<?php
include('template/init.php');
include('template/function.php');
?><!DOCTYPE html>
<html lang="zh">
	<head>
		<?php
			include('template/head.php');
		?>	
	</head>
	<body>
	    <?php include('template/menu.php'); ?>
	    <div class="container marketing">
		  <hr class="featurette-divider">
		  <br /><br />	
		  <div class="alert alert-success">
		  	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		  	<?php
		  		session_destroy();
		  		
		  	?>
		  	<strong><h3>您已經登出，即將轉入首頁！</h3></strong>
		  </div>
		  <meta http-equiv="refresh" content="2; url=index.php">
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