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
/* 
$sql="DROP TABLE school";
$sql = "CREATE TABLE school(
    Serialno INT(6)  Auto_Increment  Primary key,
    firstname VARCHAR(30) NOT NULL,
    class VARCHAR(30) NOT NULL,
    age int,

    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

     if ($mysqli->query($sql) === TRUE) {
      echo "Tableschoolcreated successfully";
    } else {
      echo "Error creating table: " . $mysqli->error;
    }
    */


// $sql = "INSERT INTO coursemst (course_name, course_content, course_description)
// VALUES ('sun ', 'java', 'corejava')";

// if ($mysqli->multi_query($sql) === TRUE) {
//  echo "New record created successfully";
// }
//  else{

//   echo "Error: " . $sql . "<br>" . $mysqli->error;
// }

$sql = "SELECT course_id,course_name, course_content, course_description FROM coursemst";
$result = $mysqli->query($sql);
echo "<table border='2'> <tr><td>course_id</td><td>course_name</td><td>course_content</td><td>course_description</td><td>edit</td></tr>";
if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo "<tr><td> " . $row["course_id"]. " </td><td> " . $row["course_name"]. " </td><td>" . $row["course_content"]. "</td><td>" .$row["course_description"]."</td><td> <a href = 'editcourse.php?course_id=". $row["course_id"]."'>Edit </a ></td></tr>";
  }
} 
else
 { 
echo "0 results";
 }
echo "</table>";
$mysqli->close();

?>