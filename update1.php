<?php 
$host="127.0.0.1:3307"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="fashion_loft"; // Database name 
$tbl_name="qtestdec2"; // Table name 

// Connect to server and select database. 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB"); 

// update data in mysql database 
$sql="UPDATE $tbl_name SET Oid='$Oid', result='$result', comment='$comment' WHERE Qid='$Qid'"; 
$result=mysql_query($sql); 

// if successfully updated. 
if($result){ 
echo "Successful"; 
} 

else { 
echo "ERROR"; 
} 

?> 