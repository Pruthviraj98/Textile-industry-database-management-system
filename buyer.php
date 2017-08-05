<?php
$username="admin";
$password="password";
$conn=@mysql_connect("127.0.0.1:3307", "root", "");
@mysql_select_db("fashion_loft");
$result2= mysql_query("SELECT * FROM buyerandolist natural join buyerdec1 natural join buyerdec2 natural join buyerdec3");
$row2=mysql_fetch_assoc($result2);
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
<body background="mo.jpg">
<table class="data-table">
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<center> <b><br><h1><font size="6"><u> BUYERS' details</u></font></h1></br></b></center>
<br></br>
<br></br>
<tr>
<td><font face="Arial, Helvetica, sans-serif">BID</font></td>
<td> <font face="Arial, Helvetica, sans-serif"> BNAME</font></td>
<td> <font face="Arial, Helvetica, sans-serif"> city</font></td>
<td> <font face="Arial, Helvetica, sans-serif"> ph.no</font></td>
<td> <font face="Arial, Helvetica, sans-serif"> mail</font></td>
<td><font face="Arial, Helvetica, sans-serif">OID</font></td>
</tr>
<?php
do
{
echo "<tr>";
echo "<td>" . $row2['BID'] . "</td>";
echo "<td>" . $row2['B.name'] . "</td>";
echo "<td>" . $row2['city'] . "</td>";
echo "<td>" . $row2['phno'] . "</td>";
echo "<td>" . $row2['mail'] . "</td>";
echo "<td>" . $row2['OID'] . "</td>";
echo "</tr>";
}while($row2= mysql_fetch_assoc($result2));
?>
</body>
</html>