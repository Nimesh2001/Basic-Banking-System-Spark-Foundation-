<?php

session_start();
include 'connection.php';

$q="select * from customers";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);

?>
<html>
<head>

<title> Customer Details </title>

<link rel="stylesheet" type="text/css" href="connection.php">
<style>
body
{
}

table
{
	font-family:arial, sans-serif;
	border-collapse:collapse;
	width:100%;
}
h1
{
	font-family:georgia;
	font-size:40px;
}
td, th
{
	border:1px solid #dddddd;
	text-align:center;
	padding:8px;
}
tr:nth-child(even) 
{
	background-color: #dddddd;
}
</style>
</head>
<body>
<div align="center" style="top:0px">
<table width="1316" align="center" class="t">
<tr>
<td style = "text-align:center"> <a href="index.php" target="frame"><button class = "btn"> Home </button></a></td>
<td style = "text-align:center"> <a href="customerdetails.php" target="frame"><button class = "btn2"> Customers </button></a></td>
<td style = "text-align:center"> <a href="selectuser.php" target="frame"><button class = "btn2"> Transaction </button></a></td>
<td style = "text-align:center"> <a href="history.php" target="frame"><button class = "btn2"> Transaction History </button></a></td>
</tr>
</table>
</div>

<h1 align=center font-family=gabriola>Details of Customer</h1>
<table class ="flat-table flat-table-1" align=center style="background-image: url("");
<thead>
<th>ID</th>
<th>NAME</th>
<th>EMAIL</th>
<th>ACCOUNT NUMBER</th>
<th>CURRENT BALANCE</th>
<th>LOCATION</th>
</thead>
<tbody>
<tr align=center>
<?php
while($row=mysqli_fetch_array($result)){
	?>
	<td><?php echo $row["id"]; ?></td>
	<td><?php echo $row["name"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td><?php echo $row["acc_no"]; ?></td>
	<td><?php echo $row["balance"]; ?></td>
	<td><?php echo $row["location"]; ?></td>
<tr align = center>
<?php }
?>
</tr>
</tbody>
</table>
<?php include 'footer.php';?>
</body>
</html>
	
	
	
	
	
	
	



















 
