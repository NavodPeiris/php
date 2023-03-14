<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
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
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 50%;
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
<h2>Enter details that you need to find</h2>
<form>
	<h3><select name="detail">
		<option value="first_name">First name </option>
		<option value="middle_name">Middle Name</option>
		<option value="last_name">Last name</option>
		<option value="DOB">Date of birth</option>

	</select> <input type="text" name="first_name"></h3>

</form>
<input type="submit" name="Search">


</body>
</html>