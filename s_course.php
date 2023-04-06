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
elseif($_SESSION['usertype']=='admin')
{
    header("location:login.php");
}


$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_my_course']))
{
    $cname=$_POST['co_name'];
    $cteacher=$_POST['co_teacher'];
    $cduration=$_POST['co_duration'];
    $cdes=$_POST['co_des'];

   
$check="SELECT * FROM s_course WHERE co_name='$cname' ";

$check_user=mysqli_query($data,$check);

$row_count=mysqli_num_rows($check_user);

if ($row_count==1) {
    echo "<script type='text/javascript'>
    alert('Username already exit. Try another one!');
            </script> ";
}
else
{
$sql="INSERT INTO s_course(co_name,co_teacher,co_duration,co_des)
 VALUES ('$cname',' $cteacher',' $cduration','$cdes')";
 
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
    
<?php

include 'student_sidebar.php';

?>
     

     
     <div>

     <center style="margin-left: 20%;">
     <form action="#" method="POST">
        <div class="login">
        <h2> Add Course</h2>
            <div class="inputBox">
            <input type="text" name="co_name" placeholder="Course name">
        </div>
        <div class="inputBox">
            <input type="text" name="co_teacher" placeholder="Course Teacher">
        </div>
        <div class="inputBox">
            <input type="text" name="co_duration" placeholder="Course Duration">
        </div>
        <div class="inputBox">
            <input type="text" name="co_des" placeholder="Course Descprition">
        </div>
        <div class="inputBox">
            <input id="btn" type="submit" name="add_my_course" value="Add">
        </div>
        </div>
       </form>
       </center>
     </div>
     
</body>
</html>