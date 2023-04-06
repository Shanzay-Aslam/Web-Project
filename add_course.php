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

if(isset($_POST['add_course']))
{
    $coursename=$_POST['c_name'];
    $course_teacher=$_POST['c_teacher'];
    $course_duration=$_POST['c_duration'];

   
$check="SELECT * FROM course WHERE c_name='$coursename' ";

$check_user=mysqli_query($data,$check);

$row_count=mysqli_num_rows($check_user);

if ($row_count==1) {
    echo "<script type='text/javascript'>
    alert('Username already exit. Try another one!');
            </script> ";
}
else
{
$sql="INSERT INTO course(c_name,c_teacher,c_duration)
 VALUES ('$coursename',' $course_teacher',' $course_duration')";
 
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
    <br><br>
<div class="logout">
              <a  class="btn btn-primary" href="index2.php">Back</a>
       </div>


     
     <div>
<br><br><br>
     <center style="margin-left: 5%;">
     <form action="#" method="POST">
        <div class="login">
        <h2> Add Course</h2>
            <div class="inputBox">
            <input type="text" name="c_name" placeholder="Course name">
        </div>
        <div class="inputBox">
            <input type="text" name="c_teacher" placeholder="Course Teacher">
        </div>
        <div class="inputBox">
            <input type="text" name="c_duration" placeholder="Course Duration">
        </div>
        <div class="inputBox">
            <input id="btn" type="submit" name="add_course" value="Add">
        </div>
        </div>
       </form>
       </center>
     </div>
     
</body>
</html>