<?php

 session_start();
$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
    die("connection error");
}



if(isset($_POST['apply']))
{
    $data_name=$_POST['name'];
    $data_email=$_POST['email'];
    $data_subject=$_POST['subject'];
    $data_message=$_POST['mesg'];

$sql="INSERT INTO request(name,email,subject,msg) VALUES ('$data_name','$data_email','$data_subject','$data_message')";

     $result=mysqli_query($data,$sql);

     if($result)
     {
       $_SESSION['message']="Your application sent successfully";

       header("location:contact.php");
     }
     else
     {
        echo "Apply Failed";
     }

}




?>