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

<?php 
$batchname=$_POST['batch_name'];
$fees=$_POST['fees'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];
$sql= "INSERT INTO batchmst(batch_name,startdate,enddate,fees) 
      Values( '$batchname','$startdate','$enddate','$fees')";
//$result = $mysqli->query($sql);
if ($mysqli->multi_query($sql) === TRUE) {
 echo "New record created successfully";
}
else{
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>




