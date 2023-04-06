<?php

   error_reporting(0);
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

$sql="SELECT * FROM user WHERE usertype='student' ";
$result=mysqli_query($data,$sql);


?>



<?php
include 'header.php';
include 'sidebar.php';
include 'topbar.php';

?>
<br><br>
     <div class="content">
     <center>
        <h1 style="font-size: 35px ; font-weight:600; text-align:center;">Student Data</h1>

        <?php

                 if ($_SESSION['message'])
             {
                       echo $_SESSION['message'];
             }

                     unset($_SESSION['message']);
                  ?>

         <br>
        <table border="1px" style="margin-left:140px ;">


            <tr>
                <th style="padding:25px;font-size:25px;
                background: rgba(134, 133, 134, 0.308);backdrop-filter: blur(25px);">UserName</th>

                <th style="padding:25px;font-size:25px;text-align:center;
                 background: rgba(134, 133, 134, 0.308);backdrop-filter: blur(25px);">Email</th>

                <th style="padding:25px;font-size:25px;
                 background: rgba(134, 133, 134, 0.308);backdrop-filter: blur(25px);">Phone</th>

                <th style="padding:25px;font-size:25px;
                 background: rgba(134, 133, 134, 0.308);backdrop-filter: blur(25px);">Password</th>

                 
                <th style="padding:25px;font-size:25px;
                 background: rgba(134, 133, 134, 0.308);backdrop-filter: blur(25px);">Class</th>

                <th style="padding:25px;font-size:25px;
                 background: rgba(134, 133, 134, 0.308);backdrop-filter: blur(25px);">Delete</th>

                <th style="padding:25px;font-size:25px;
                 background: rgba(134, 133, 134, 0.308);backdrop-filter: blur(25px);">Update</th>
            </tr>

            <?php 
             while($info=$result->fetch_assoc())

             {

             ?>
            <tr>
                   <td class="table-td"
                   style="padding: 20px;font-size:20px;color:black; text-align:center;
                        background:rgba(2, 24, 85, 0.308); backdrop-filter: blur(25px);">
                     <?php echo "{$info['username']}";  ?>
                 </td>

                   <td class="table-td"
                   style="padding: 20px;font-size:20px;color:black; text-align:center;
                        background:rgba(2, 24, 85, 0.308); backdrop-filter: blur(25px);">
                     <?php echo "{$info['email']}";  ?>
                 </td>

                    <td class="table-td"
                    style="padding: 20px;font-size:20px;color:black; text-align:center;
                        background:rgba(2, 24, 85, 0.308); backdrop-filter: blur(25px);">
                     <?php echo "{$info['phone']}";  ?>
                 </td>

                    <td class="table-td"
                    style="padding: 20px;font-size:20px;color:black; text-align:center;
                        background:rgba(2, 24, 85, 0.308); backdrop-filter: blur(25px);">
                     <?php echo "{$info['password']}";  ?>
                 </td>

                 <td class="table-td"
                 style="padding: 20px;font-size:20px;color:black; text-align:center;
                        background:rgba(2, 24, 85, 0.308); backdrop-filter: blur(25px);">
                     <?php echo "{$info['class']}";  ?>
                 </td>


                 <td class="table-td"
                 style="padding: 20px;font-size:20px;color:black; text-align:center;
                        background:rgba(2, 24, 85, 0.308); backdrop-filter: blur(25px);">
                     <?php
                      echo "<a class='btn btn-danger'
                       onClick=\" javascript:return confirm('Are You Sure to Delete this!'); \"
                      href='delete.php?student_id={$info['id']}'>Delete</a>";  ?>
                 </td>

                 <td class="table-td"
                 style="padding: 20px;font-size:20px;color:black; text-align:center;
                        background:rgba(2, 24, 85, 0.308); backdrop-filter: blur(25px);">
                     <?php
                      echo "<a class='btn btn-primary'
                      href='update_student.php?student_id={$info['id']}'> Update </a>";  ?>
                 </td>
            </tr>

            <?php

}

?>


            </table></center>


     </div>
