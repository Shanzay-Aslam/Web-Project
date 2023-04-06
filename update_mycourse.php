<?php
   session_start();

     if(!isset($_SESSION['username']))
{
     header("location:login.php");
}
     elseif($_SESSION['usertype']=='teacher')
{
    header("location:login.php");
}



$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

$id=$_GET['course_id'];

$sql="SELECT * FROM s_course WHERE id='$id' ";

$result=mysqli_query($data,$sql);

$info=$result->fetch_assoc();


if (isset($_POST['update'])) 
{
    $name=$_POST['co_name'];
    $teacher=$_POST['co_teacher'];
    $duration=$_POST['co_duration'];

    $query="UPDATE s_course SET co_name='$name',co_teacher='$teacher',co_duration='$duration' WHERE id='$id' ";

    $result2=mysqli_query($data,$query);

    if($result2)
    {
        $_SESSION['message']='Course Updated Successfully!'; 

        header("location:s-my-course.php");
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>

    <link rel="stylesheet" type="text/css" href="studentdash.css">


    <?php

include 'admindash_css.php';

?>

</head>
<body class="body">
    
<?php

include 'student_sidebar.php';

?>



     <div>

<center style="margin-left: 20%;">

<div class="content">
        <h1 style="font-size: 35px ; font-weight:700; margin-right:20%;"> Update Course</h1>
     </div>
     <div>
<form action="#" method="POST">
   <div class="login">

       <div class="inputBox" style="padding-top: 30px;">
       <label style="width:150px; display:inline-block">Course name : </label>
       <input type="text" name="co_name" placeholder="Course name"
        value="<?php echo "{$info['co_name']}"; ?>">
   </div>

   <div class="inputBox">
       <label>Course Teacher : </label>
       <input type="text" name="co_teacher" placeholder="Course Teacher"
       value="<?php echo "{$info['co_teacher']}"; ?>">
   </div>

   <div class="inputBox">
   <label>Course Duration : </label>
       <input type="text" name="co_duration" placeholder="Course Duration"
       value="<?php echo "{$info['co_duration']}"; ?>">
   </div>

   <div class="inputBox">
       <input id="btn" type="submit" name="update" value="Update"
       <?php  
            echo "onClick=\" javascript:return confirm('Are You Sure to update this!'); \"
            ";
       ?>
       
       >
   </div>
   </div>
  </form>
  </center>
</div>


</body>
</html>