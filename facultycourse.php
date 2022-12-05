<?php
$mysqli = new
 mysqli("localhost","root","","traininginsdb");
// Check connection
if ($mysqli -> connect_errno) 
{  
echo "Failed to connect to MySQL";
 $mysqli -> connect_error;
exit();
}
else
{
echo "Successfully connected to db";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

 Add padding to containers 
.container {
  padding: 16px;
  background-color: white;
}

 Full-width input fields 
input[type=text], input[type=password] {
  width: 30%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

 Overwrite default styles of hr 
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

Set a style for the submit button 
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

 Add a blue text color to links 
a {
  color: dodgerblue;
}
 
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
.slc
{
width: 30%;
}

select {
        width: 350px;
        margin: 10px;
    }

</style>
</head>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">

<form action="facultycourse.php" method="post">
  <div class="container">
    <h1>Faculty Course Link</h1>
    <p>Please fill this form to register faculty course </p>
    <hr>

    <label for="psw-repeat"><b>faculty</b></label>
  <select name="faculty" style="max-width:200px;"> <option value="1">ramesh1</option><option value="2">suresh2</option><option value="3">mahesh3</option></select>  <br>
<br>
    <label for="name"><b>Course</b></label>  
   <select class="slc1"  name="course"> <option value="1">PHP</option><option value="2">java<option value="3">c++</option></select>   <br>

    <label for="psw-repeat"><b>Batch</b></label>
   <select name="batch"> <option value="1">Batch1</option><option value="2">Batch2</option></select>  <br> <br>

    <label for="psw-repeat"><b>Fee</b></label>
    <input type="" placeholder="" name="" id="" required> 
    <hr>
   <!-----<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>-->

   
  </div>
  <button type="Submit" class="registerbtn">Submit</button>
  <button type="Cancel" class="registerbtn">Cancel</button>
<!----  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>-->
  </div>
</form>

</body>
</html>