<?php
include('template/init.php');
include('template/function.php');
?><!DOCTYPE html>
<html lang="zh">
	<head>
		<?php include('template/head.php'); ?>  
		<style type="text/css">@import url(http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css);</style> 
	
	</head>
	<body>
	    <?php include('template/menu.php'); ?>
	    <div class="container marketing">
	    <hr class="featurette-divider">
	    <br /><br />
	    <!-- Main jumbotron for a primary marketing message or call to action -->
		    <div class="row">
		    	<div class="col-lg-2">
		    		<?php include('template/sidebar.php'); ?>
		    	</div>
			    <div class="col-lg-8">
			      <form class="form-horizontal form" action="control/book.php" method="post">
			      	<input type="hidden" name="key" value="<?php echo key_gen(); ?>">
			      	<input type="hidden" name="cmd" value="createBookList">
	                <fieldset>
	                  <legend>建立書單</legend>
	                  <div class="form-group">
	                    <label for="listName" class="col-lg-2 control-label">書單名稱</label>
	                    <div class="col-lg-10">
	                      <input type="text" name="bl_name" class="form-control" id="listName" placeholder="List Name" required>
	                    </div>
	                  </div>
	                  <div class="form-group">
	                    <label for="bookLimit" class="col-lg-2 control-label">截止日期</label>
	                    <div class="col-lg-10">
	                      <input type="text" name="deadline" class="form-control" id="datepicker" placeholder="2013/10/20" required>
	                    </div>
	                  </div>
	                  <legend>第1本書</legend>
	                  <div class="bookList">
	                  <div class="form-group">
	                    <label for="bookName" class="col-lg-2 control-label">書本名稱</label>
	                    <div class="col-lg-10">
	                      <input type="text" name="book_name[]" class="form-control" id="bookName" placeholder="Book Name" required>
	                    </div>
	                  </div>
	                  <div class="form-group">
	                    <label for="bookPrice" class="col-lg-2 control-label">書本價格</label>
	                    <div class="col-lg-10">
	                      <input type="text" name="book_price[]" class="form-control form-warring" id="bookPrice" placeholder="$$$" required>
	                    </div>
	                  </div>
	                  <div class="form-group">
	                    <label for="bookISBN" class="col-lg-2 control-label">作者</label>
	                    <div class="col-lg-10">
	                      <input type="text" name="author[]" class="form-control" id="bookAuthor" placeholder="Author (option)">
	                    </div>
	                  </div>
	                  <div class="form-group">
	                    <label for="bookISBN" class="col-lg-2 control-label">出版社</label>
	                    <div class="col-lg-10">
	                      <input type="text" name="publisher[]" class="form-control" id="bookPublisher" placeholder="Publisher (option)">
	                    </div>
	                  </div>
	                  </div>
	                  <div id="moreBook">
	                  	
	                  </div>
	                  <div class="form-group">
	                    <div class="pull-right">
	                  	  <button type="button" class="btn btn-default" onclick="addBook();">再一本書</button>
	                  	  <button type="button" class="btn btn-default" onclick="rmdBook();">少一本書</button>
	                      <button type="submit" class="btn btn-primary">新增書單</button> 
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
		<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script>
			$(function() {
				$( "#datepicker" ).datepicker({
					showButtonPanel: true,
					dateFormat: 'yy/mm/dd',
					defaultDate: +7
				});
			});
			var i = 2;
			function addBook() {
				var bk = $('#moreBook');
				var bl = $('.bookList');
				bk.append('<div class="bookList"><legend>第' + i + '本書</legend>' + bl[0].innerHTML + '</div>');
				i++;
			}

			function rmdBook() {
				var bl = $('.bookList');
				var ll = bl.length - 1;
				if(ll){bl[ll].outerHTML = ""; i--;}
			}
		</script>
	</body>
</html>