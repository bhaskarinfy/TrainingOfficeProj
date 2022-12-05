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

<form action="timetableinsert.php" method="POST">
  <div class="container">
    <h1> Timetable</h1>
    <hr>

    <label for="timetableid"><b>timetableid</b></label>
    <input type="number" placeholder="" name="timetable_id"id="timetable_id" required><br><br>

    <label for="courseid"><b>courseid</b></label>
    <input type="number" placeholder="" name="courseid" Id="courseid" required><br> <br>

    <label for="batchid"><b> batchid</b></label>
    <input type="number" placeholder="" name="batchid" id="batchid" required> <br><br>

    
    <label for="facultyid" id><b> facultyid</b></label>
    <input type="number" placeholder="" name="facultyid" id="facultyid" required><br><br>
   
   
    <label for="monthid"><b> monthid</b></label>
    <input type="number" placeholder="" name="monthid" id="monthid" required><br><br>
    
    <label for="companyid"><b> companyid</b></label>
    <input type="number" placeholder="" name="companyid" id="companyid" required><br><br>
    
    <label for="tdate"><b> tdate</b></label>
    <input type="date" placeholder="" name="tdate" id="tdate" required><br><br>
    
    <label for="starttime"><b> starttime</b></label>
    <input type="time" placeholder="" name="starttime" id="starttime" required><br><br>
    <label for="duration"><b> duration</b></label>
    <input type="duration" placeholder="" name="duration" id="duration" required><br><br>
    <label for="classheld"><b> classheld</b></label>
    <input type="classheld" placeholder="" name="classheld" id="classheld" required><br><br>
    <button type="submit" class="registerbtn">submit</button>
    <button type="cancel" class="registerbtn">cancel</button>
  </div>
  
  </div>
</form>

</body>
</html>
