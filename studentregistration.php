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
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
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

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 10px 20px;
  margin: 5px 0;
  border: none;
  cursor: pointer;
  width:10%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="/action_page.php">
  <div class="container">
    <h1> Student Registration</h1>
    <p>Please fill this form to create an account.</p>
    <hr>

    <label for="Student name"><b>Student name</b></label>
    <input type="text" placeholder="Enter the name" name="student" id="student name" required>

    <label for="Id no"><b>Id no</b></label>
    <input type="Id no" placeholder="Enter Id no" name="Id no" Id="Id no" required><br> <br>

    <label for="Mobile no"><b> Mobile no</b></label>
    <input type="Enter Mobile no" placeholder="Enter Mobile no" name="Enter Mobile no" id="Enter Mobile no" required> <br><br>

    <label for="Course name"><b> Course name</b></label>
    <input type="Enter Course name" placeholder="Enter Course name" name="Enter Course name" id="Enter course name" required> <br><br>
   
    <label for="Batch no"><b> Batch no</b></label>
    <input type="Enter Batch no" placeholder="Enter Batch no" name="Enter Batch no" id="Enter Batch no" required> <br><br>
   
    <label for=E-mail id><b> E-mail id</b></label>
    <input type="Enter E-mail id" placeholder="Enter E-mail id" name="Enter E-mail id" id="Enter E-mail id" required><br><br>
   
   
    <label for=Address><b> Address</b></label>
    <input type="Enter Address" placeholder="Enter Address" name="Enter Address" id="Enter Address" required><br><br>
   
    <label for="psw-repeat"><b>faculty</b></label>
    <select name="faculty"> <option value="1">ramesh</option><option value="2">suresh</option><option value="3">mahesh</option></select>  <br>
  
    <hr>
   <!---- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>-->

    <button type="submit" class="registerbtn">submit</button>
    <button type="cancel" class="registerbtn">cancel</button>
  </div>
  
 <!---- <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>-->
  </div>
</form>

</body>
</html>
