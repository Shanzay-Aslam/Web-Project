<?php


error_reporting(0);
session_start();

$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

if ($_GET['teacher_id']) 
{

    $user_id=$_GET['teacher_id'];

    $sql="DELETE FROM user WHERE id='$user_id' ";

    $result=mysqli_query($data,$sql);


    if ($result) 
    {

        $_SESSION['message']='Teacher Deleted Successfully!';

        header("location:view_teacher.php");
    }
}










?>