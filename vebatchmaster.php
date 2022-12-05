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

$sql = "SELECT b.batch_id, b.batch_name,b.fees, f.faculty_name,f.faculty_contactno, c.course_id,c.course_name,c.course_content FROM batchmst b, facultymst f,coursemst c where b.course_id=c.course_id and b.faculty_id=f.faculty_id";
$result = $mysqli->query($sql);
echo "<table border='2'> <tr><td>batch_id</td><td>batch_name</td><td>fees</td><td>faculty_name</td><td>faculty_contactno</td><td>course_id</td><td>course_name</td><td>course_content</td><td>edit</td></tr>";
if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo "<tr><td> " . $row["batch_id"]. " </td><td> " . $row["batch_name"]. " </td><td>" . $row["fees"]. "</td><td>" .$row["faculty_name"]."</td><td>" .$row["faculty_contactno"]."</td><td>" .$row["course_id"]."</td><td>" .$row["course_name"]."</td><td>"  .$row["course_content"]."</td><td> <a href = 'editbatchmst.php?batch_id=". $row["batch_id"]."'>Edit </a ></td></tr>";
  }
} 
else
 { 
echo "0 results";
 }
echo "</table>";
$mysqli->close();

?>