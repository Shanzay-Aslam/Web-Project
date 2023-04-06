<?php

   error_reporting(0);
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

$sql="SELECT * FROM course WHERE c_teacher='shano' ";
$result=mysqli_query($data,$sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>

    <link rel="stylesheet" type="text/css" href="home.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" 
integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    
<?php

include 'teacher_sidebar.php';

?>

     <div class="content">
     <center>
        <h1 style="font-size: 35px ; font-weight:600; text-align:center;">My Subjects</h1>

        <?php

                 if ($_SESSION['message'])
             {
                       echo $_SESSION['message'];
             }

                     unset($_SESSION['message']);
                  ?>

         <br>
        <table border="1px">



        <?php 
             while($info=$result->fetch_assoc())

             {

             ?>

            <tr>
                <th style="padding:25px;font-size:25px;
                background: rgba(134, 133, 134, 0.308);backdrop-filter: blur(25px); text-align:center;">Course Name</th>

    
                <th style="padding:25px;font-size:25px;
                 background: rgba(134, 133, 134, 0.308);backdrop-filter: blur(25px); text-align:center;">Course Duration</th>

                

            </tr>

           <tr>

           <td class="table-td">
                     <?php echo "{$info['c_name']}";  ?>
                 </td>

                 <td class="table-td">
                     <?php echo "{$info['c_duration']}";  ?>
                 </td>
           </tr>
            

            <?php

}

?>


            </table></center>


     </div>

</body>
</html>