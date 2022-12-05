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
//$course_id=$_POST['course_id'];
$course=$_POST['course_name'];
$descourse=$_POST['course_description'];

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
  
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 10%;
  border-radius: 30%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
    <div class="container" style="background-color:#f1f1f1">
<h2>Course Form</h2>
<?php
//echo $course_id;
echo $course;
echo $descourse;
//echo $coursedate;

$sql = "INSERT INTO coursemst (course_name, course_description)
VALUES ('$course', '$descourse ')";
//echo "<html> <head></head><body><form method=post action=insert.php><input  name= 'sno' type='hidden' value='$sno'> <input  name= 'fname' type='text' value='$fname'><input  name= 'fclass' type='text' value='$sclass'><input  name= 'fage' type='text' value='$age'><input type=submit value='Update'> </form>" ;
//$result = $mysqli->query($sql);

if ($mysqli->multi_query($sql) === TRUE) {
 echo "New record created successfully";
}
 else{

  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>


       

</body>
</html>
