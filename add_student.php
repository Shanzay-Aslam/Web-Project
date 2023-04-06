<?php
   session_start();

     if(!isset($_SESSION['username']))
{
     header("location:login.php");
}
     elseif($_SESSION['usertype']=='student')
{
    header("location:login.php");
}


$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_student']))
{
    $username=$_POST['name'];
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];
    $user_password=$_POST['password'];
    $user_class=$_POST['class'];
    $usertype="student";

$check="SELECT * FROM user WHERE username='$username' ";

$check_user=mysqli_query($data,$check);

$row_count=mysqli_num_rows($check_user);

if ($row_count==1) {
    echo "<script type='text/javascript'>
    alert('Username already exit. Try another one!');
            </script> ";
}
else
{
$sql="INSERT INTO user(username,email,phone,usertype,password,class)
 VALUES ('$username','$user_email','$user_phone','$usertype','$user_password','$user_class')";

$result=mysqli_query($data,$sql);

if ($result) {
  echo "<script type='text/javascript'>
    alert('Data Uploaded Successfully');
            </script> ";
}
else
{
    echo "Upload Failed";
}
}
}     

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>


    <link rel="stylesheet" type="text/css" href="studentdash.css">
    <?php

include 'admindash_css.php';

?>

</head>
<body class="body">
<div class="logout">
              <a  class="btn btn-primary" href="index2.php">Back</a>
       </div>

     

     
     <div>

     <center style="margin-left: 20%;">
     <form action="#" method="POST">
        <div class="login">
        <h2> Add Student</h2>
            <div class="inputBox">
            <input type="text" name="name" placeholder="Username">
        </div>
        <div class="inputBox">
            <input type="email" name="email" placeholder="Email Address">
        </div>
        <div class="inputBox">
            <input type="number" name="phone" placeholder="Phone Number">
        </div>
        <div class="inputBox">
            <input type="text" name="password" placeholder="Password">
        </div>
        <div class="inputBox">
            <input type="text" name="class" placeholder="Class">
        </div>
        <div class="inputBox">
            <input id="btn" type="submit" name="add_student" value="Add">
        </div>
        </div>
       </form>
       </center>
     </div>
     
</body>
</html>