<!DOCTYPE html>
<html>

<head>
	<title>Lobelia</title>
	<?php include('cdn.php'); ?>

	<style type="text/css">
		.react {
			display: flex;
		}

		.react div {
			width: 33%;
			text-align: center;
		}
	</style>

</head>

<body style="background:#E9EBEE;">
	<?php include('nav.php'); ?>
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

						if (isset($_GET['id'])) {
							$id = $_GET['id'];
							$post_sql = mysqli_query($conn, "SELECT post.*,user.name,user.photo FROM post INNER JOIN user 
					ON post.user_id=user.id WHERE post.user_id='$id' ORDER BY post.id DESC");
						} else {

							$post_sql = mysqli_query($conn, "SELECT post.*,user.name,user.photo FROM post INNER JOIN user 
					ON post.user_id=user.id ORDER BY post.id DESC");
						}


						while ($posts = mysqli_fetch_assoc($post_sql)) {

						?>
							<div class="card-header bg-white">
								<a href="" class="card-link text-dark"><img src="img/<?= $posts['photo'] ?>" width="30px" height="30px" class="rounded-circle mr-1">
									<b><?= $posts['name'] ?></b></a>
								<div style="float: right;">
									<?php if ($_SESSION['id'] == $posts['user_id']) { ?>
										<i class="ebtn fas fa-circle text-warning" data-toggle="modal" data-target="#edit_post_Modal" title="<?= $posts['title'] ?>" description="<?= $posts['description'] ?>" post_photo="<?= $posts['post_photo'] ?>" post_id="<?= $posts['id'] ?>"></i>
										<a href="post/delete.php?id=<?php echo "$posts[id]"; ?>"><i class="fas fa-times-circle text-danger"></i></a>
									<?php } ?>
								</div>
							</div>
							<div class="card-body">
								<h3><?= $posts['title'] ?></h3>
								<p class="text-justify">
									<?= $posts['description'] ?>
								</p>
								<?php if ($posts['post_photo']) { ?>
									<img src="img/<?= $posts['post_photo'] ?>" width="100%;">
								<?php } ?>
							</div>
							<div class="card-footer react bg-white">
								<div>
									<?php
									$sql2 = mysqli_query($conn, "SELECT * FROM like_data WHERE post_id='" . $posts['id'] . "' AND 
						user_id='" . $_SESSION['id'] . "'");
									if (mysqli_num_rows($sql2) > 0) { ?>
										<i post_id=<?php echo $posts['id']; ?> class="unlike fas fa-thumbs-up mr-1 text-primary"></i>
									<?php } else { ?>
										<i post_id=<?php echo $posts['id']; ?> class="like fas fa-thumbs-up mr-1"></i>
									<?php } ?>

									<span class="badge badge-light" id="like_area<?php echo $posts['id'] ?>">
										<?php
										$sql1 = mysqli_query($conn, "SELECT * FROM like_data WHERE post_id='" . $posts['id'] . "'");
										echo mysqli_num_rows($sql1);
										?>
									</span>
								</div>
								<div><a href="comment.php?pid=<?= $posts['id'] ?>" class="text-dark card-link"><i class="far fa-comment-alt mr-1"></i>Comment</a></div>
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


				</ul>
			</div>
		</div>
	</div>

	<?php include('modal.php'); ?>

	<script type="text/javascript">
		$('.ebtn').click(function() {
			var post_id = $(this).attr('post_id');
			var title = $(this).attr('title');
			var description = $(this).attr('description');
			var post_photo = $(this).attr('post_photo');

			$('.id').val(post_id);
			$('.title').val(title);
			$('.description').val(description);
			$('.post_photo').attr('src', 'img/' + post_photo)
			$('.old').val(post_photo);
			if (post_photo) {
				$('.post_photo').attr('src', 'img/' + post_photo).show();
				$('.delete_photo').val('');
			} else {
				$('.post_photo').attr('src', '')
			}
			$('.dp_btn').click(function() {
				$('.post_photo').hide();
				$('.delete_photo').val(post_photo);
			})
		})

		$(document).ready(function() {
			$('.like').click(function() {
				var post_id = $(this).attr('post_id')
				$(this).toggleClass('text-primary')
				$.ajax({
					url: "like_unlike/insert_delete.php",
					method: "POST",
					data: {
						post_id
					},
					success: function() {
						likeCount(post_id)
					}
				})
			})


			$('.unlike').click(function() {
				var post_id = $(this).attr('post_id')
				$(this).toggleClass('text-primary')
				$.ajax({
					url: "like_unlike/insert_delete.php",
					method: "POST",
					data: {
						post_id
					},
					success: function() {
						likeCount(post_id)
					}
				})
			})



			function likeCount(id) {
				$.ajax({
					url: "like_unlike/count.php",
					method: "POST",
					data: {
						id
					},
					success: function(result) {
						$('#like_area' + id).text(result)
					}
				})
			}
		})



		$('body').mousemove(function() {
			$.ajax({
				url: 'online_request.php',
				success: function() {

				}
			})
		})
	</script>
	<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
	<script>
		// Enable pusher logging - don't include this in production
		Pusher.logToConsole = true;

		var pusher = new Pusher('3e47a20f35f25e0dd74b', {
			cluster: 'ap1'
		});

		var channel = pusher.subscribe('my-channel');
		channel.bind('my-event', function(data) {
			// alert('hello')

			$.ajax({
				url: "online.php",
				method: "POST",
				success: function(result) {
					$('.side_right').html(result)

				}
			})
		});
	</script>
</body>

</html>