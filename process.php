<?php

$username=$_POST['user'];
$password=$_POST['pass'];
@mysql_connect("127.0.0.1:3307", "root", "");
@mysql_select_db("fashion_loft");

$result=mysql_query("select Ename, Pwd, EID, mail, city,Phno from employee where Ename='$username' and Pwd='$password'") or die("failed".mysql_error());
$row=mysql_fetch_assoc($result);
$result2=mysql_query("select distinct employee.EID, Pwd, Ename, empandbuyer.BID, empandbuyer.EID from empandbuyer, employee where Ename='$username' and Pwd='$password' and employee.EID=empandbuyer.EID") or die("failed".mysql_error());
$row2=mysql_fetch_array($result2);
if($row['Ename']==$username && $row['Pwd']==$password)
{
?>

<html>
<body>
<body background="bg.png">
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
<table class="data-table">
<center> <b><br><h1><-----WELCOME-----></h1></br></b></center>
	<caption class="title"><br><br><b>Information of Employee</b></br></br></caption>
<tr>
<td><font face="Arial, Helvetica, sans-serif">EID</font></td>
<td> <font face="Arial, Helvetica, sans-serif"> Ename</font></td>
<td> <font face="Arial, Helvetica, sans-serif"> city</font></td>
<td> <font face="Arial, Helvetica, sans-serif"> mailid</font></td>
<a href="originaltemplate.php"><center>LOGOUT</center></a>
</tr>
<?php
echo "<tr>";
echo "<td>" . $row['EID'] . "</td>";
echo "<td>" . $row['Ename'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['mail'] . "</td>";
echo "</tr>";


}
?>
<table class="data-table">
<center><br><h1><-----Info about deliveries----></h1></br></center>
<tr>
<td><font face="Arial, Helvetica, sans-serif">EID</font></td>
<td> <font face="Arial, Helvetica, sans-serif">BID</font></td>
</tr>
<?php
do
{
echo "<tr>";
echo "<td>".$row2['EID']."</td>";
echo "<td>".$row2['BID']."</td>";
echo "</tr>";
}
while($row2 = mysql_fetch_assoc($result2));
?>
</table>
<center><p>Click the button to print the current page.</p></center>
<center><button onclick="myFunction()">Print this page</button></center>
<script>
function myFunction()
{
    window.print();
}
</script>
</body>
</html>
