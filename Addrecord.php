<?php

if (isset($_POST["first_name"]))
{
$fname = $_POST["first_name"];
$mname = $_POST["middle_name"];
$lname = $_POST["last_name"];
$dob = $_POST["DOB"];
$gender = $_POST["Gender"];
$salary= $_POST["Salary"];


$con =mysqli_connect("localhost","user1","123");
mysqli_select_db($con,"Company");
$sql = "INSERT INTO members(firstname,middlename,lastname,dob,gender,salary) VALUES ('$fname','$mname','$lname','$dob','$gender','$salary')";
$ret = mysqli_query($con,$sql);

mysqli_close($con);

echo "<h1><center>Your Data added</center></h1>";

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>AddRecord</title>
<style type="text/css">
	table{
		font-family:arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	td,th{
		border: 1px solid #dddddd;
		text-align: left;
		padding:8px;
	}

	tr:nth-child(even)
	{
		background-color: #dddddd;
	}

	h1,h2,h3{
		font-family:arial, sans-serif;

	}

	input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

input[type=button], input[type=submit], input[type=reset] {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}


</style>

</head>

<body bgcolor="#F7C296">

<marquee><h2>Hello!!!! Welcome to our website</h2></marquee>

<h2>choose your option</h2>
<table>
	<tr>
		<th><a href="index.php" >Home</a></th>
		<th><a href="ViewAll.php">View All</a></th>
		<th><a  href="Addrecord.php">Add Record</a></th>
		<th><a href="Search.php">Search</a></th>
	</tr>
	</tr>

</table>
<br>
<br>
<br>
<h2>Fill the form to add details</h2>
<form action="#" method="post">

<h3>Enter your first name : <input type="text" name="first_name"></h3>
<h3>Enter your middle name : <input type="text" name="middle_name"></h3>
<h3>Enter your last name : <input type="text" name="last_name"></h3>
<h3>Date of birth : <input type="Date" name="DOB"></h3>
<h3>Gender : <input type="radio" name="Gender" value="male">Male <input type="radio" name="Gender" value="female">female
<h3>Salary : <input type="text" name="Salary"></h3>

	<br>
	<br>
	<input type="submit" name="submit" value="submit">
	<input type="reset" name="reset" value="reset">



</form>




</body>
</html>





