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
    <?php 
    $batchid=$_GET['batch_id'];
$sqlbatch="SELECT * from batchmst where batch_id=".$batchid;
$resultbatch = $mysqli->query($sqlbatch);
if ($resultbatch->num_rows > 0) {
    while($row = $resultbatch->fetch_assoc()) {
$batchname=$row["batch_name"];
?>
<?php
  }
 
} 
?>

      <form action="batchmasteradd.php" method="post">
        <div class="container">
        <h2>Batch master form </h2><br>
          <label for="Batchname"><b>batch name</b>
         <input type="text" name="batchname" value="<?php echo $batchname; ?>" id="Batchname" size="30" required><br><br>
         <label for="Course"><b>select course:</b></label>
        
        
        
        
         <select name="courseid" id="course">
   
   
   
   
   <?php 
$sqlnew="SELECT course_id, course_name FROM coursemst";
$result = $mysqli->query($sqlnew);
if ($result->num_rows > 0) {
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
          <label for="Date"><b> startdate</b></label>
         <?php 
    $batchid=$_GET['batch_id'];
$sqlbatch="SELECT * from batchmst where batch_id=".$batchid;
$resultbatch = $mysqli->query($sqlbatch);
if ($resultbatch->num_rows > 0) {
    while($row = $resultbatch->fetch_assoc()) {
$startdate=$row["startdate"];
$enddate=$row["enddate"];
$fees=$row["fees"];

    }
  }
?> 
                <input type="Date" placeholder="Enter Date" name="startdate"value="<?php echo $startdate ?>" id="Enter Date" required> <br><br>
                <label for="Date"><b> end date</b></label>
                <input type="date" placeholder="Enter Date" name="enddate"  value="<?php echo $enddate ?>"id="Enter Date" required> <br><br>
                <label for="fees"><b> fees</b>
                  <input type="number" id="fees" name="fees" value="<?php echo $fees ?>"size="20" required><br><br>
                  <label for="name"><b>faculty:</b></label>
            <select name="faculty" id="Faculty"><br><br>

            <?php 
$sqlnew="SELECT faculty_id, faculty_name FROM facultymst";
echo "<option value='".$courseid."'>".$coursename."</option>";
$result = $mysqli->query($sqlnew);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
 ?>
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
                <input type="submit" class="submitbtn" value="update" size="20">
              <input type="button" class="submitbtn" value="cancel" size="20">
            </div>
          </form>
      


          
          </body>
          </html>
<?php
$batch_id=0;
$batch_name="";
$fees="";
$faculty_name="";
$faculty_contactno="";
$course_id=0;
$coursename="";
$coursecontent="";
$batch_id=$_GET["batch_id"];
echo "batch_id is ".$batch_id;

$sql = "SELECT b.batch_id, b.batch_name,b.fees, f.faculty_name,f.faculty_contactno, c.course_id,c.course_name,c.course_content FROM batchmst b, facultymst f,coursemst c where b.course_id=c.course_id and b.faculty_id=f.faculty_id";
$result = $mysqli->query($sql);

if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = $result->fetch_assoc()) {
$batch_id=$row["batch_id"];
 $batch_name=$row["batch_name"];
 $fees=$row["fees"];
 $faculty_name=$row["faculty_name"];
 $faculty_contactno=$row["faculty_contactno"];
$course_id=$row["course_id"];  
$coursename=$row["course_name"];
$coursecontent=$row["course_content"];
$sql = "INSERT INTO batchmst (batch_id,batch_name,fees,faculty_name,faculty_contactno,course_id,course_name, course_content)
VALUES ('$batch_id ','$batch_name ','$fees','$faculty_name','$faculty_contactno ','$course_id ', '$coursename ', '$coursecontent')";
// " </td><td> " . $row["firstname"]. " </td><td>" . $row["class"].$row["age"]."</td><td> <a href = 'editpage.php?sno=". $row["sno"]."'>Edit </a ></td></tr>";
  }
} 

echo "<html> <head></head><body><form method=post action=updatebatchmst.php>  <input  name= 'batch_id' type='text' value='$batch_id'><input  name= 'batch_name' type='hidden' value='$batch_name'><input  name= 'fees' type='hidden' value='$fees'><input  name= 'faculty_name' type='hidden' value='$faculty_name'><input  name= 'faculty_contactno' type='hidden' value='$faculty_contactno'><input  name= 'course_id' type='hidden' value='$course_id'><input  name= 'course_name' type='hidden' value='$coursename'><input  name= 'course_content' type='text' value='$coursecontent'><input type='submit' value='Update'> </form>" ;
//echo $_GET["sno"];
//echo $batchname;

echo "</body></html>";
?>