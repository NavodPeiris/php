<?php
	include("db_connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Website</title>
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

</table>

<h3>To see the database you need to login</h3>
<form>
	<h2>Username : <input type="text" name="Username"> </h2>
	<h2>Password :<input type="Password" name="Password"></h2>

</form>





</body>
</html>