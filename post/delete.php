<?php
include('../db.php');

if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql=mysqli_query($conn,"SELECT post_photo FROM post WHERE id='$id'");
    $row=mysqli_fetch_assoc($sql);
    unlink("../img/".$row['post_photo']);
    mysqli_query($conn,"DELETE FROM post WHERE id='$id'");
    header("location:../home.php");
}