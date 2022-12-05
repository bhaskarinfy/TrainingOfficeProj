<?php

session_start();

$username=$_POST['uname'];
$password=$_POST['psw'];

$_SESSION['userid']=$username;

if($_SESSION['userid']=='staff')
{
   // echo "welcome to staff";
header('Location: //staffdashboard.php');
}elseif($_SESSION['userid']=='faculty')
{
   // echo "welcome to faculty";
    header('Location: //facultydashboard.php');
}elseif($_SESSION['userid']=='admin')
{
    //echo "welcome to admin";
    
header('Location: ./admindashboard.php');
}else
{
    echo 'please select username from 1)staff <br> 2)faculty <br> 3)admin';
}




?>