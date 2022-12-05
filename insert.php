<?php

$mysqli = new
 mysqli("localhost","root","","test");
// Check connection
if ($mysqli -> connect_errno) 
{  
echo "Failed to connect to MySQL; " .
 $mysqli -> connect_error;
exit();
}
else
{
//echo "Successfully connected to db";
}
$fname=$_POST['fname'];
$fclass=$_POST['fclass'];
$age=$_POST['fage'];

$sql = "INSERT INTO school (firstname, class, age)
VALUES ('$fname', '$fclass ', '$age')";
//echo "<html> <head></head><body><form method=post action=insert.php><input  name= 'sno' type='hidden' value='$sno'> <input  name= 'fname' type='text' value='$fname'><input  name= 'fclass' type='text' value='$sclass'><input  name= 'fage' type='text' value='$age'><input type=submit value='Update'> </form>" ;
$result = $mysqli->query($sql);

if ($mysqli->multi_query($sql) === TRUE) {
 echo "New record created successfully";
}
 else{

  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
echo "<a href="customertable.php">check record </a> <br> <a href="addrecord.php">Add More Record </a> ";
?>
