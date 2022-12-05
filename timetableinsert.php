<?php
include "connect.php";
/*$mysqli = new
 mysqli("localhost","root","","traininginsdb");
// Check connection
if ($mysqli -> connect_errno) 
{  
echo "Failed to connect to MySQL; " .
 $mysqli -> connect_error;
exit();
}
else
{
echo "Successfully connected to db";
}*/
/*$mid = date('mm/dd/yyyy');
$tdate = date('mm/dd/yyyy');
$stime = time();
$duration =0;
$classheld = 0;*/
$mid=$_POST['monthid'];
$tdate=$_POST['tdate'];
$stime=$_POST['starttime'];
$dur=$_POST['duration'];
$cheld=$_POST['classheld'];
echo $mid;
echo $tdate;
echo $stime;
echo $dur;
echo $cheld;
$sql="INSERT INTO `timetable`(`month_id`, `t_date`, `start_time`, `duration`, `class_held`)
 VALUES ($mid,$tdate,$stime,$dur,$cheld)";

/*$sql = "INSERT INTO timetable (month_id,t_date,start_time,duration,class_held )
VALUES ('$mid', ' $tdate','$stime','$dur','$cheld')";*/
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
?>


       


