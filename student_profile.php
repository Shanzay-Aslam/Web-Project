<?php

session_start();

     if(!isset($_SESSION['username']))
{
     header("location:login.php");
}

elseif($_SESSION['usertype']=='admin')
{
    header("location:login.php");
}




$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

$name=$_SESSION['username'];

$sql="SELECT * FROM user WHERE username='$name' ";

$result=mysqli_query($data,$sql);

$info=mysqli_fetch_assoc($result);

if (isset($_POST['update_profile'])) 
{

    $s_email=$_POST['email'];
    $s_phone=$_POST['phone'];
    $s_password=$_POST['password'];
    $s_class=$_POST['class'];

    $sql2="UPDATE user SET email='$s_email',phone='$s_phone',password='$s_password',class='$s_class' WHERE username='$name' ";

    $result2=mysqli_query($data,$sql2);

    if($result2)
    {
        $_SESSION['message']='Student Updated Successfully!'; 

        header("location:studenthome.php");
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>

    <link rel="stylesheet" type="text/css" href="studentdash.css">


    <?php

include 'student_css.php';

?>


</head>
<body class="body">
    
   <?php

   include 'student_sidebar.php';

?>




<div>

<center style="margin-left: 3%;">


     <div>
<form action="#" method="POST">
  
<div class="content">
        <h1 style="font-size: 35px ; font-weight:700; margin-right:5%;"> Update Profile</h1>

   <div class="login">
     
   <div class="inputBox">
       <label >Email Address : </label>
       <input type="email" name="email" placeholder="Email Address"
       value="<?php echo "{$info['email']}"; ?>">
   </div>

   <div class="inputBox">
   <label>Phone Number : </label>
       <input type="number" name="phone" placeholder="Phone Number"
       value="<?php echo "{$info['phone']}"; ?>">
   </div>

   <div class="inputBox">
   <label style="width: 150px;" >Password   :   </label>
       <input type="text" name="password" placeholder="Password"
       value="<?php echo "{$info['password']}"; ?>">
   </div>

   <div class="inputBox">
   <label style="width: 150px;" >Class   :   </label>
       <input type="text" name="class" placeholder="Class"
       value="<?php echo "{$info['class']}"; ?>">
   </div>

   <div class="inputBox">
       <input id="btn" type="submit" name="update_profile" value="Update" >
   </div>
   </div>
  </form>
  </center>
</div>
</body>
</html>