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

$id=$_GET['course_id'];

$sql="SELECT * FROM course WHERE id='$id' ";

$result=mysqli_query($data,$sql);

$info=$result->fetch_assoc();


if (isset($_POST['update'])) 
{
    $name=$_POST['c_name'];
    $teacher=$_POST['c_teacher'];
    $duration=$_POST['c_duration'];

    $query="UPDATE course SET c_name='$name',c_teacher='$teacher',c_duration='$duration' WHERE id='$id' ";

    $result2=mysqli_query($data,$query);

    if($result2)
    {
        $_SESSION['message']='Course Updated Successfully!'; 

        header("location:view_course.php");
    }
}


?>

<?php
include 'header.php';
include 'sidebar.php';
include 'topbar.php';

?>



     <div>
<br><br><br>
<center style="margin-left: 20%;">

<div class="content">
        <h1 style="font-size: 35px ; font-weight:700; margin-right:20%;"> Update Course</h1>
     </div>
     <div>
<form action="#" method="POST">
   <div class="login">

       <div class="inputBox" style="padding-top: 30px;">
       <label style="width:150px; display:inline-block">Course name : </label>
       <input type="text" name="c_name" placeholder="Course name"
        value="<?php echo "{$info['c_name']}"; ?>">
   </div>

   <div class="inputBox">
       <label>Course Teacher : </label>
       <input type="text" name="c_teacher" placeholder="Course Teacher"
       value="<?php echo "{$info['c_teacher']}"; ?>">
   </div>

   <div class="inputBox">
   <label>Course Duration : </label>
       <input type="text" name="c_duration" placeholder="Course Duration"
       value="<?php echo "{$info['c_duration']}"; ?>">
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