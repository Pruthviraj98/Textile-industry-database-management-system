<?php
$username="admin";
$password="password";
$conn=@mysql_connect("127.0.0.1:3307", "root", "");
@mysql_select_db("fashion_loft");
$result = mysql_query("SELECT * FROM qtestdec1 natural join qtestdec2");
$row=mysql_fetch_assoc($result);
if($row['Ename']==$username && $row['Pwd']==$password)
{
?>
<html>
<head>
<style>
</style>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
	</head>
<body background="bg.png">
<table class="data-table">
<center> <b><br><h1>WELCOME</h1></br></b></center>
<center> The Employee Details<br> </br></center>
<tr>
<td> EID </td>
<td> Ename </td>
<td> Ph-no </td>
<td> Email </td>
<td> City </td>
<td> Password </td>
</tr>

<?php 
do
{
	echo "<tr><form action=update.php method=post>";
	echo "<td><input type=text EID=EID value='".$row['EID']."'></td>";
	echo "<td><input type=text Ename=Ename value='".$row['Ename']."'></td>";
	echo "<td><input type=text Phno=Phno value='".$row['Phno']."'></td>";
	echo "<td><input type=text Email=Email value='".$row['mail']."'></td>";
	echo "<td><input type=text city=city value='".$row['city']."'></td>";
	echo "<td><input type=text Pwd=Pwd value='".$row['Pwd']."'></td>";
	echo "<td><input type=submit></td>";
	echo "</form></tr>";
}while($row=mysql_fetch_assoc($result));
}
?>