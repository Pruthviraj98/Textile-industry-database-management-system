<?php
$username="admin";
$password="password";
$conn=@mysql_connect("127.0.0.1:3307", "root", "");
@mysql_select_db("fashion_loft");
$result2= mysql_query("SELECT * FROM qtestdec1 natural join qtestdec2");
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
<body background="bac1.jpg">
<table class="data-table">
<center> <b><br><h1><font size="6"><u>Quality test reports</u></font></h1></br></b></center>
<tr>
<td><font face="Arial, Helvetica, sans-serif">RID</font></td>
<td> <font face="Arial, Helvetica, sans-serif"> OID</font></td>
<td> <font face="Arial, Helvetica, sans-serif"> Result</font></td>
<td> <font face="Arial, Helvetica, sans-serif"> comment</font></td>
<td> <font face="Arial, Helvetica, sans-serif"> QID</font></td>
<center> BY <b> TVF </b> <a href= "Qtestdet.php"> QUALITY TESTERS</a></center>
<br></br>
<br></br>
</tr>
<?php
do
{
echo "<tr>";
echo "<td>" . $row2['RID'] . "</td>";
echo "<td>" . $row2['Oid'] . "</td>";
echo "<td>" . $row2['result'] . "</td>";
echo "<td>" . $row2['comment'] . "</td>";
echo "<td>" . $row2['Qid'] . "</td>";
echo "</tr>";
}while($row2= mysql_fetch_assoc($result2));
?>
</body>
</html>