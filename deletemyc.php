<?php


error_reporting(0);
session_start();

$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

if ($_GET['course_id']) 
{

    $c_id=$_GET['course_id'];

    $sql="DELETE FROM s_course WHERE id='$c_id' ";

    $result=mysqli_query($data,$sql);


    if ($result) 
    {

        $_SESSION['message']='Course Deleted Successfully!';

        header("location:s-my-course.php");
    }
}










?>