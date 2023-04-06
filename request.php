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

$sql="SELECT * FROM request";
$result=mysqli_query($data,$sql);


?>



    <?php
include 'header.php';
include 'sidebar.php';
include 'topbar.php';

?>
<br>

<br>

     <div class="content">
          <center>
        <h1 style="font-size: 35px ; font-weight:600; text-align:center;">Requests</h1>
       <br>
        <table border="1px" style="margin-left: 100px ;">
            <tr>
                <th style="padding:20px;font-size:20px;
                 background: rgba(134, 133, 134, 0.308);backdrop-filter: blur(25px);">Name</th>

                <th style="padding:20px;font-size:20px;
                 background: rgba(134, 133, 134, 0.308);backdrop-filter: blur(25px);">Email</th>

                <th style="padding:20px;font-size:20px;
                 background: rgba(134, 133, 134, 0.308);backdrop-filter: blur(25px);">Subject</th>

                <th style="padding:20px;font-size:20px;
                 background: rgba(134, 133, 134, 0.308);backdrop-filter: blur(25px);">Message</th>
            </tr>

            <?php

            while($info=$result->fetch_assoc())

            {

            ?>

            <tr>
                 <td style="padding: 20px; font-size:18px; color:black;
                    background:rgba(2, 24, 85, 0.308);backdrop-filter: blur(25px);">
                     <?php echo "{$info['name']}";  ?>
                 </td>

                 <td style="padding: 20px; font-size:18px; color:black;               
                    background:rgba(2, 24, 85, 0.308);backdrop-filter: blur(25px);">
                     <?php echo "{$info['email']}";  ?>
                 </td>

                 <td style="padding: 20px; font-size:18px; color:black;
                    background:rgba(2, 24, 85, 0.308);backdrop-filter: blur(25px);">
                     <?php echo "{$info['subject']}";  ?>
                 </td>

                 <td style="padding: 20px; font-size:18px; color:black;
                    background:rgba(2, 24, 85, 0.308);backdrop-filter: blur(25px);">
                     <?php echo "{$info['msg']}";  ?>
                 </td>
            </tr>

            <?php

            }

            ?>
        </table></center>
     </div>
