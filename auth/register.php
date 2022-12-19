<?php
 include('../db.php');

if(isset($_POST))
    {
        $name=$_POST['name'];

        $email=$_POST['email'];

        $password=$_POST['password'];
        // $hpassword=hash('md5',$password);

        $cpassword=$_POST['cpassword'];

        $phone=$_POST['phone'];

        $dob=$_POST['dob'];

        $address=$_POST['address'];

      
      
        $gender=$_POST['gender'];
        
        $photo=uniqid()."_".$_FILES['photo']['name']; //type,size
        $tmp=$_FILES['photo']['tmp_name']; //type,size

        if($photo)
        {
            move_uploaded_file($tmp, "../img/$photo");
        }else {
            $photo="empty1.png";
        }
        
        $sql=mysqli_query($conn,"SELECT * FROM user WHERE name='$name'");

        if(mysqli_num_rows($sql)>0)
        {
            echo'<script>alert("username already exist!");location.href="../index.php";</script>';
        }else if($password==$cpassword){
            $sql="INSERT INTO user (name,email,password,cpassword,phone,dob,address,gender,photo,created_date,modified_date) 
            VALUES ('$name','$email','$password','$cpassword','$phone','$dob','$address','$gender','$photo',now(),now())";
            mysqli_query($conn,$sql);
            echo'<script>alert("Success!!");location.href="../index.php";</script>';
        }else{
            echo'<script>alert("Password do npt match!");location.href="../index.php";</script>';
        }
       
    }
?>