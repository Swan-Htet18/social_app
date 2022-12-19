<?php
session_start();
include('../db.php');
if(isset($_POST['name']) && isset($_POST['password']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    $sql=mysqli_query($conn,"SELECT * FROM user WHERE name='$name'
        AND password='$password'");
    $row=mysqli_fetch_assoc($sql);
    if(mysqli_num_rows($sql)>0)
    {
        $_SESSION['id']=$row['id'];
        header("location:../home.php");
    }else{
        echo '<script>alert("Login Failed,Try again!");location.href="../index.php";</script>';
    }
}