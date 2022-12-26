<?php
session_start();

include('../db.php');

if(isset($_POST))
{
    $title=$_POST['title'];
    $description=$_POST['description'];
    $user_id=$_SESSION['id'];

    $post_photo=$_FILES['photo']['name'];
    $tmp=$_FILES['photo']['tmp_name']; //type,size
    if($post_photo)
    {
        $post_photo=uniqid()."_".$_FILES['photo']['name'];
        move_uploaded_file($tmp, "../img/$post_photo");
    }
    $sql="INSERT INTO post (title,description,user_id,post_photo,created_date,modified_date) VALUES ('$title','$description','$user_id','$post_photo',now(),now())";

    mysqli_query($conn,$sql);

   echo'<script>location.href="../home.php"</script>';
        
}

