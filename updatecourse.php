<?php
$mysqli = new
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
}
$coursename="";
$course_id= 0;
$coursecontent="";
$coursedescription="";
$course_id=$_POST["course_id"];
$coursename=$_POST["course_name"];
$coursecontent=$_POST["course_content"];
$coursedescription=$_POST["course_description"];
$sql = " UPDATE `coursemst` SET `course_name` = '$coursename', `course_content` = '$coursecontent', `course_description` = '$coursedescription' WHERE `coursemst`.`course_id` = ".$course_id;
//$sql="UPDATE `coursemst` SET `course_id`='[value-0]',`course_name`='[value-2]',`course_content`='[value-3]',`course_description`='[value-4]',`company_id`='[value-5]',`status`='[value-6]' WHERE 1";
$result = $mysqli->query($sql);
echo "<a href=vecoursemaster.php> goback</a>";
//UPDATE `school` SET `firstname` = 'ram', `class` = '10 ', `age` = '5' WHERE `school`.`sno` = 3;