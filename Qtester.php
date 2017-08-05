<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>

<body background="bg.png">
<font size="6"><br></br><center> ENTER THE QUALITY TEST DETAILS </center></font>
<div id="contact"> <!--Comments begin-->
<form method='post'>
 TESTER ID: <input type='text' name='QID' id='QID' /><br />
 ORDER ID: <input type='text' name='Oid' id='Oid' /><br />
 RESULT ID: <input type='text' name='RID' id='RID' /><br />
 RESULT: <input type='text' name='result' id='Result' /><br />
 CCOMMENT: <input type='text' name='comment' id='comment' /><br />
 

 <input type='submit' value='Submit' > <a href="originaltemplate.php"> <font size="6"><br></br><center> LOG OUT </center></font></a></input>  

<?php
if( $_POST )
{
  $con = @mysql_connect("127.0.0.1:3307","root","");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("fashion_loft", $con);

  $users_ord = $_POST['Oid'];
  $users_comment = $_POST['comment'];
  $users_result = $_POST['result'];
  $userid =$_POST['QID'];
  $userRid =$_POST['RID'];
  
  $users_ord = mysql_real_escape_string($users_ord);
  $users_comment = mysql_real_escape_string($users_comment);
  $users_result = mysql_real_escape_string($users_result);
  $userid = mysql_real_escape_string($userid);
  $userRid = mysql_real_escape_string($userRid);
  
  $query = " INSERT INTO `fashion_loft`.`qtestdec2` (`Oid`, `comment`, `result`, `QID`) VALUES ('$users_ord', '$users_comment',
        '$users_result', '$userid');";
  $query2 = " INSERT INTO `fashion_loft`.`qtestdec1` (`Oid`, `RID`) VALUES ('$users_ord', '$userRid');";
  mysql_query($query);
  mysql_query($query2);
  echo "<h2>Thank you!</h2>";
  mysql_close($con);
}
?>
</form>
</div>
</body>
</html>