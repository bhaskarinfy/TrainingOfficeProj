<?php
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

        <form action="addcourse.php" method="post">
       <!-- <b>Course Id </b><br>
        <input type="int" id="course" name="course_id" size="20" required ></p><br>-->

        <b>Enter course </b>
        <input type="text" id="course_name" name="course_name" size="20" required ></p>

       <!---- <select id = "myList" onchange = "favCourse()" >
        <option> "php "</option>
        <option> "Java"</option>
        <option> C++ </option>
        <option> Phyton </option>
        </select> -->
        <b>Course Description</b>
            <input type="text" id="desc" name="course_description" size="20" required >
            <label for="Date"><b> Date</b></label>
                <input type="date" placeholder="Enter Date" name="course_date" id="Enter Date" required> <br><br>
        

   <input type="submit" value="Add course">
    <label>
     <!---- <input type="checkbox" checked="checked" name="remember"> Remember me -->
    </label>
  </div>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
   <!---- <span class="psw">Forgot <a href="#">password?</a></span>-->
  </div>
</form>

</body>
</html>
