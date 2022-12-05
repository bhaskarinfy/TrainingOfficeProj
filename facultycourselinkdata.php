<?php
include "connect.php";
$lid=$_POST['linkid'];
$fid=$_POST['facultyid'];
$coid=$_POST['courseid'];
$bid=$_POST['batchid'];
$cpid=$_POST['companyid'];
echo $lid;
echo $fid;
echo $coid;
echo $bid;
echo $cpid;

$sql="INSERT INTO 'facultycourselink`(`lnk_id`, `faculty_id`, `course_id`, `batch_id`, `company_id`)
 VALUES ($lid,$fid,$coid,$bid,$cpid)";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?> 