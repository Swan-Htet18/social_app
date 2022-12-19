<!DOCTYPE html>
<html>
<head>
	<title>Lobelia</title>
	<?php include('cdn.php'); ?>

<style type="text/css">
	.react{
		display: flex;
	}
	.react div{
		width: 33%;
		text-align: center;
	}
</style>

</head>
<body style="background:#E9EBEE;">
<?php include ('nav.php'); ?>
<div class="container-fluid" style="margin-top: 80px;">
	<div class="row">
		<div class="col-md-2">
			<?php include('leftside.php'); ?>
		</div>


		<div class="col-md-5">
				<div class="post_friend">
			<div class="card mb-3">
				<div class="card-header"><b>Create Posts</b></div>
				<div class="card-body">
					
				<div class="media">
				  <img src="img/<?= $user['photo'] ?>" width="50px;" height="50px" class="mr-3 rounded-circle" alt="...">
				  <div class="media-body">
				    <textarea class="form-control" data-toggle="modal" data-target="#create_post_Modal"></textarea>
				  </div>
				</div>

				</div>
				<div class="card-footer bg-white">
					<button class="btn btn-sm btn-info" data-toggle="modal" data-target="#create_post_Modal"><i class="fas fa-images mr-1"></i>Photo/Video</button>
					<button class="btn btn-sm btn-info" data-toggle="modal" data-target="#create_post_Modal"><i class="fas fa-plus-circle text-white mr-1"></i>Create</button>
					<button class="btn btn-sm btn-info" data-toggle="modal" data-target="#create_post_Modal"><i class="far fa-smile mr-1"></i>Feeling/Activity</button>
				</div>
			</div>

			<div class="card mb-2">
				<?php

				$post_sql=mysqli_query($conn,"SELECT post.*,user.name,user.photo FROM post INNER JOIN user ON post.user_id=user.id ORDER BY post.id DESC");
				while($posts=mysqli_fetch_assoc($post_sql))
				{
					
				?>
				<div class="card-header bg-white">			
					<a href="" class="card-link text-dark"><img src="img/<?= $posts['photo']?>" width="30px" height="30px" class="rounded-circle mr-1">
					<b><?= $posts['name']?></b></a>				
					<div style="float: right;">
					<?php if($_SESSION['id']==$posts['user_id']){ ?>
						<i class="ebtn fas fa-circle text-warning" data-toggle="modal" data-target="#edit_post_Modal"
						title="<?= $posts['title']?>"
						description="<?=$posts['description']?>"
						post_photo="<?=$posts['post_photo']?>"
						post_id="<?=$posts['id']?>"></i>
						<a href="post/delete.php?id=<?php echo "$posts[id]" ;?>"><i class="fas fa-times-circle text-danger"></i></a>
					<?php } ?>
					</div>
				</div>
				<div class="card-body">
					<h3><?= $posts['title'] ?></h3>
					<p class="text-justify">
						<?= $posts['description']?>
					</p>
					<?php if($posts['post_photo']) { ?>
					<img src="img/<?= $posts['post_photo']?>" width="100%;">
					<?php } ?>
				</div>
				<div class="card-footer react bg-white">
					<div><i class="fas fa-thumbs-up mr-1"></i><span class="badge badge-light">3</span></div>
					<div><a href="comment.php" class="text-dark card-link"><i class="far fa-comment-alt mr-1"></i>Comment</a></div>
					<div><i class="fas fa-share mr-1"></i></i>Share</div>
				</div>
			<?php } ?>
			</div>

			</div>
		</div>


		<div class="col-md-3">
			<?php include('popular.php'); ?>	
		</div>

		<div class="col-md-2">
			<ul class="list-group side_right">
				<li class="list-group-item"><i class="fas fa-circle text-danger" style="font-size:12px;"></i> <b>Active Users</b> <span class="badge badge-info">3</span></li>

			  <li class="list-group-item border-top-0 border-bottom-0"><img src="img/4.png" class="rounded-circle" width="35px" > David Gata <span class="badge badge-info">3</span></li>

			</ul>
		</div>
	</div>
</div>

<?php include('modal.php'); ?>

<script type="text/javascript">
	$('.ebtn').click(function(){
		var post_id=$(this).attr('post_id');
		var title=$(this).attr('title');
		var description=$(this).attr('description');
		var post_photo=$(this).attr('post_photo');
	
		$('.id').val(post_id);
		$('.title').val(title);
		$('.description').val(description);
		$('.post_photo').attr('src','img/'+post_photo)
		$('.old').val(post_photo);
		if(post_photo){
			$('.post_photo').attr('src','img/'+post_photo)
		}else{
			$('.post_photo').attr('src','')
		}
	})
</script>
</body>
</html>