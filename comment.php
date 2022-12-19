<!DOCTYPE html>
<html>
<head>
	<title>Lobelia</title>
	<style type="text/css">
	.comment_box{
	border:none;
    resize: none;
    width: 98%;
  	height: 34px;
    outline:none;
    padding:5px 15px;
	}
	.comment_area{
		height: 300px;
		overflow-y: scroll;
	}
	.comment_area::-webkit-scrollbar {
    display: none;
}



	</style>
	<?php include('cdn.php'); ?>

</head>
<body style="background:#E9EBEE;">
<?php include ('nav.php'); ?>
<div class="container-fluid" style="margin-top: 80px;">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-5">

			<div class="card">
				<div class="card-header bg-white">	
				<a href="" class="card-link text-dark">		
					<img src="img/4.png" height="30px" width="30px" class="rounded-circle mr-1">
					<b>Username</b></a>				
				</div>
				<div class="card-body">
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<img src="img/test.jpg" width="100%;">
				</div>
			</div>


		</div>
		<div class="col-md-3">
			
			<div class="card">
				<div class="card-body">
					<div class="comment_area">

			<div class="media mb-2">
			  <div class="media-left">
			    <img src="img/4.png" class="media-object rounded-circle m-2" width="35px" height="35px">
			  </div>
			  <div class="media-body">
			    <p>Lorem ipsum...</p>
			  </div>
			</div>

					</div>

					<div class="media pt-2 px-3 border-top">
  					<img src="img/4.png" height="35px" width="35px" class="rounded-circle">
  					<div class="media-body">
    					<input class="comment_box ml-2" placeholder="Write a comment..."></input>
  					</div>
				</div>

				</div>
			</div>

		</div>
	</div>
</div>

</body>
</html>