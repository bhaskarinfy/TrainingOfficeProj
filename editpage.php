<?php
$mysqli = new mysqli("localhost","root","","traininginsdb");
// Check connection for mysql connection
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
$course_id=0;
$coursename="";
$coursecontent="";
$coursedescription="";
// $course_id=$_POST["course_id"];

$sql = "SELECT course_id,course_name, course_content, course_description FROM coursemst";
$result = $mysqli->query($sql);

if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = $result->fetch_assoc()) {

$course_id=$row["course_id"];  
$coursename=$row["course_name"];
$coursecontent=$row["course_content"];
$coursedescription=$row["course_description"];
$sql = "INSERT INTO coursemst (course_name, course_content, course_description)
VALUES ('$coursename ', '$coursecontent', '$coursedescription')";
// " </td><td> " . $row["firstname"]. " </td><td>" . $row["class"].$row["age"]."</td><td> <a href = 'editpage.php?sno=". $row["sno"]."'>Edit </a ></td></tr>";
  }
} 

echo "<html> <head></head><body><form method=post action=update.php> <input  name= 'course_name' type='text' value='$coursename'><input  name= 'course_content' type='text' value='$coursecontent'><input  name= 'course_description' type='text' value='$coursedescription'><input type=submit value='Update'> </form>" ;
//echo $_GET["sno"];
//echo $coursename;

echo "</body></html>";
?>
