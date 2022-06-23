<?php
session_start();
include("connect.php");
if(isset($_POST['submiting'])){
     $fname =$_POST["fname"];
     $lname =$_POST["lname"];
     $uname =$_POST["uname"];
     $pass =$_POST["pass"];
$select = "SELECT * from user where username='$uname'";
if($check = $con->query($select)){
     if(mysqli_num_rows($check)>0){
          echo '<script>alert("user name already exist")</script>';
     }else{
          $insert="INSERT into user (userid,fname,lname,username,password)
          values('','$fname','$lname','$uname','$pass')";
          if($con->query($insert)){
        echo '<script>alert("User Registered! Login Now")</script>';
        header("location:login.html");
          }else{
          echo '<script>alert("insert query error")</script>';
          }
     }
}else{
    echo '<script>alert("selecting query error")</script>';
}
}
if(isset($_POST['submit'])){
     $uname =$_POST["uname"];
     $pass =$_POST["pass"];
     $sql = "SELECT * from user where username='$uname' and password='$pass'";
     if($ver = $con->query($sql)){
          if (mysqli_num_rows($ver)>0) {
               $_SESSION['uname'] = $uname;
               header("location:product.php");
          }else{
          echo '<script>alert("user name or password error")</script>';
          }
     }else{
          echo '<script>alert("SQL query error")</script>';
     }
}
?>