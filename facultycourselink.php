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
{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: black;
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

<form action="facultycourselinkdata.php" method="post">
  <div class="container">
    <h1> faculty course </h1>
   <!-- <p>Please fill this form to create an account.</p>-->
    <div> 
      <label for ="link-id"><b>link-id</b></label>
        <input type="number" name="linkid" placeholder="" ></inputtype><br><br>
      <label for ="facultyid"><b>faculty-id</b></label>
         <input type="number" name="facultyid" placeholder=""></input type><br><br>
      <label for ="courseid"><b>course-id</b></label>
           <input type="number"name="courseid" placeholder=""></input type><br><br>
           <label for ="batchid"><b>batch-id</b></label>
           <input type="text"name="batchid" placeholder=""></input type><br><br>
           <label for ="companyid"><b>company-id</b></label>
           <input type="number"name="companyid" placeholder=""></input type><br><br>
           <!--<label for ="batchstatus"><b>batchstatus</b></label>
           //<input type="status"name="batch-status" placeholder=""></input type><br><br>-->
        
              <button type="button" class="cancelbtn">Cancel</button>
              <input type="submit" class="submitbtn" value='submit'>
</div>
</form>
</body>
</html>