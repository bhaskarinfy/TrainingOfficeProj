
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
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password],select ,input[type=date],input[type=number],input[type=time]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=submit] ,input[type=button]{
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn 
  width: auto;
  padding: 10px 18px;
 /* background-color: #f44336;/*
  
}

/*.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}*/

/*img.avatar {
  width: 10%;
  border-radius: 30%;
}*/

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
     width: 30%;
  }
}
</style>
</head>
<body>
    <div class="container" style="background-color:#f1f1f1">

      <form action="batchmasteradd.php" method="post">
        <div class="container">
        <h2>Batch master form </h2><br>
         <!-- <label for="Batchno"><b>batch no</b>
          <input type="text" id="Batchno" name="batchno" size="30" required><br><br>-->
          <label for="Batchname"><b>batch name</b>
         <input type="text" name="batchname" id="Batchname" size="30" required><br><br>
         <label for="Course"><b>select course:</b></label>
        
        
        
        
         <select name="courseid" id="course">
   
   
   
   
   <?php 
$sqlnew="SELECT course_id, course_name FROM coursemst";
//$result = $mysqli->query($sqlnew);
//<!--echo "<option value='".$courseid."'>".$coursename."</option>";  -->
$result = $mysqli->query($sqlnew);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$courseid=$row["course_id"];
$coursename=$row["course_name"]; 
?>
<option value="<?php echo $courseid; ?>"><?php echo $coursename; ?> </option>
<?php
  }
 
} 
?>
           </select><br><br>
          <label for="Date"><b> start date</b></label>
                <input type="Date" placeholder="Enter Date" name="startdate" id="Enter Date" required> <br><br>
                <label for="Date"><b> end date</b></label>
                <input type="date" placeholder="Enter Date" name="enddate" id="Enter Date" required> <br><br>
                <label for="fees"><b> fees</b>
                  <input type="number" id="fees" name="fees" size="20" required><br><br>
                  <label for="Description"><b> description</b></label>
                  <input type = "text" id="desc" name="coursedesc" size="20" required >
                  <label for="name"><b>faculty:</b></label>
            <select name="faculty" id="Faculty"><br><br>

            <?php 
$sqlnew="SELECT faculty_id, faculty_name FROM facultymst";
echo "<option value='".$courseid."'>".$coursename."</option>";
$result = $mysqli->query($sqlnew);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
//$fid=$row["faculty_id"];
//$fname=$row["faculty_name"]; ?>
<option value="<?php echo $fid; ?><?php echo $fname; ?>"> </option>
<?php
  }
 
} 
?>

            
               <option value="name">ramesh</option>
                 <option value="name">suresh</option>
               <option value="name">mahesh</option><br><br>

              
              </select><br>
               <label for="maximum students">maximum students (between 1 and 5):</label>
               <input type="number" id="quantity" name="quantity" min="1" max="5"><br><br>
               <!--<input type="submit" width=10><br>-->
               
               
               <label for="Time"><b> batch timings</b></label>

                <input type="time" placeholder="Enter the time" name="Enter time" id="Enter time" required><br><br>
                <label for="Duration"><b> batch duration(in minutes)</b></label>
                <input type="text" id="appt" name="duration" pattern="\d{0,9}"
                  ><br><br>
               <label for="batchweekly"><b> batch weekly</b></label> 
                <input type="checkbox" name="week[]" value="Monday">
                 <input type="checkbox" name="tuesday">Tuesday <input type="checkbox" name="wednesday">wednesday <input type="checkbox" name="thursday">thursday<input type="checkbox" name="friday">friday<input type="checkbox" name="saturday">saturday
              <input type="bw" placeholder="Monday,tuesday,wednesday" name="batchweek"id="batch week" required><br>
            <input type="checkbox" ><br>
                <input type="submit" class="submitbtn" value="submit" size="20">
              <input type="button" class="submitbtn" value="cancel" size="20">
            </div>
          </form>
      


          
          </body>
          </html>


               
                   

          





        

