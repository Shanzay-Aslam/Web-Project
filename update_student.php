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

$id=$_GET['student_id'];

$sql="SELECT * FROM user WHERE id='$id' ";

$result=mysqli_query($data,$sql);

$info=$result->fetch_assoc();


if (isset($_POST['update'])) 
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $query="UPDATE user SET username='$name',email='$email',phone='$phone',password='$password' WHERE id='$id' ";

    $result2=mysqli_query($data,$query);

    if($result2)
    {
        $_SESSION['message']='Student Updated Successfully!'; 

        header("location:view_student.php");
    }
}


?>

<?php
include 'header.php';
include 'sidebar.php';
include 'topbar.php';

?>

     <div>
<br><br>
<center style="margin-left: 20%;">

<div class="content">
        <h1 style="font-size: 35px ; font-weight:700; margin-right:20%;"> Update Student</h1>
     </div>
     <div>
<form action="#" method="POST">
   <div class="login">

       <div class="inputBox" style="padding-top: 30px;">
       <label style="width:150px; display:inline-block">Username : </label>
       <input type="text" name="name" placeholder="Username"
        value="<?php echo "{$info['username']}"; ?>">
   </div>

   <div class="inputBox">
       <label>Email Address : </label>
       <input type="email" name="email" placeholder="Email Address"
       value="<?php echo "{$info['email']}"; ?>">
   </div>

   <div class="inputBox">
   <label>Phone Number : </label>
       <input type="number" name="phone" placeholder="Phone Number"
       value="<?php echo "{$info['phone']}"; ?>">
   </div>

   <div class="inputBox">
   <label style="width: 151px;">Password   :   </label>
       <input type="text" name="password" placeholder="Password"
       value="<?php echo "{$info['password']}"; ?>">
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