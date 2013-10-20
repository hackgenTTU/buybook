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

	    <!-- Main jumbotron for a primary marketing message or call to action -->
	    <div class="container marketing">
		    <div class="jumbotron">
		      <div class="container">
		        <h1>幫班上訂書，很麻煩嗎？</h1>
		        <p>每當開學，班上的學藝是否就得開始苦惱，要如何有效地幫班上訂書呢？尤其是到了大三大四，班上同學神龍不見尾的，也不見得一起上課，更是難以統記...</p>
		        <p><a class="btn btn-primary btn-lg" href="about.php">繼續閱讀 &raquo;</a></p>
		      </div>
		    </div>
		    <div class="row">
		    <div class="col-lg-4">
				<div id="myCarousel" class="carousel slide">
				 
				<ol class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				    <li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
				<!-- Carousel items -->
				<div class="carousel-inner">
				<div class="item active">
					<div class="row-fluid">
					  <div class="span3"><a href="#x" class="thumbnail"><img src="https://d2hsbzg80yxel6.cloudfront.net/images/78403/original/ACN025900.jpg" alt="Image" style="max-width:100%;" /></a></div>
					</div><!--/row-fluid-->
				</div><!--/item-->
				<div class="item">
					<div class="row-fluid">
						<div class="span3"><a href="#x" class="thumbnail"><img src="http://ecx.images-amazon.com/images/I/41TZp-oRZfL.jpg" alt="Image" style="max-width:100%;" /></a></div>
					</div><!--/row-fluid-->
				</div><!--/item-->
				<div class="item">
					<div class="row-fluid">
						<div class="span3"><a href="#x" class="thumbnail"><img src="https://d2hsbzg80yxel6.cloudfront.net/images/78509/original/ACA019000.jpg" alt="Image" style="max-width:100%;" /></a></div>
					</div><!--/row-fluid-->
				</div><!--/item-->
				<div class="item">
					<div class="row-fluid">
						<div class="span3"><a href="#x" class="thumbnail"><img src="https://d2hsbzg80yxel6.cloudfront.net/images/78572/original/i8028_cd0abb3c4d62420b4f4442c24fd5b154.jpg" alt="Image" style="max-width:100%;" /></a></div>
					</div><!--/row-fluid-->
				</div><!--/item-->
				</div><!--/carousel-inner-->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
				</div><!--/myCarousel-->
		    </div>
	    	<div class="col-lg-8">
		      <div class="list-group">
		      	<?php
		      		$text = json_decode(post('/control/book.php',array('cmd'=>'showBookList')),1);
		      		
		      		foreach ($text as $row) {
      			?>
      				<a href="viewBL.php?blid=<?=$row['blid']?>" class="list-group-item">
      				  <h4 class="list-group-item-heading"><?=$row['blist_name']?></h4>
      				  <p class="list-group-item-text pull-right"><?=$row['blist_desc']?></p>
      				  <div class="clearfix"></div>
      				</a>
      			<?php
		      		}
		      	?>
		    	
		    	
		      </div>
	    	</div>
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