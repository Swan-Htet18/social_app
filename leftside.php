<?php
$friends_sql=mysqli_query($conn,"SELECT * FROM user WHERE id!='".$_SESSION['id']."'");
$friend=mysqli_num_rows($friends_sql);
?>

<ul class="list-group side_left mb-3">
	<li class="list-group-item"><a href="" class="card-link text-dark"><i class="fas fa-home"></i> NewFeeds</a></li>
	<li class="list-group-item"><a href="" class="card-link text-dark"><i class="fas fa-clipboard-list"></i> All Posts <span class="badge badge-info">3</span></a></li>
	<li class="list-group-item"><a href="" class="card-link text-dark"><i class="fas fa-server"></i> Own Posts <span class="badge badge-info">3</span></a></li>
	<li class="list-group-item"><a href="friend.php" class="card-link text-dark"><i class="fas fa-user-friends"></i> Friends <span class="badge badge-info"><?= $friend;?></span></a></li>
</ul>