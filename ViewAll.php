
<?php
	include("db_connection.php");

	//write query
    $sql = 'SELECT * FROM employees';
    
    //make query to get data
    $result = mysqli_query($conn, $sql);

    //detch resulting rows as an array
    $employees = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<title>ViewAll</title>
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
	</tr>

</table>

<h2>All records</h2>
<table>
	<tr>
		<th><p>ID</p></th>
		<th><p>First_name</p></th>
		<th><p>Middle_name</p></th>
		<th><p>Last_name</p></th>
		<th><p>DOB</p></th>
		<th><p>Gender</p></th>
	</tr>
		<?php foreach($employees as $employee){?>
			<tr>
				<td><?php echo $employee['ID']?></td>
				<td><?php echo $employee['First_name']?></td>
				<td><?php echo $employee['Middle_name']?></td>
				<td><?php echo $employee['Last_name']?></td>
				<td><?php echo $employee['DOB']?></td>
				<td><?php echo $employee['Gender']?></td>
			</tr>
        <?php }?>

</table>

</body>
</html>