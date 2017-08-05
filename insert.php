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
<body>
<font size="6"><br></br><center> ENTER THE NEW EMPLOYEE DETAILS </center></font>
<div id="contact"> <!--Comments begin-->
<form method='post'>
 NAME: <input type='text' name='ename' id='ename' /><br />
 Email: <input type='text' name='mail' id='mail' /><br />
 pssword: <input type='password' name='Pwd' id='Pwd' /><br />
 city: <input type='text' name='city' id='city' /><br />
 PHno: <input type='text' name='Phno' id='Phno' /><br />
  ID: <input type='text' name='EID' id='EID' /><br />
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

  $users_name = $_POST['ename'];
  $users_email = $_POST['mail'];
  $users_pass = $_POST['Pwd'];
  $users_city = $_POST['city'];
  $users_phno = $_POST['Phno'];
  $userid =$_POST['EID'];


  $users_name = mysql_real_escape_string($users_name);
  $users_email = mysql_real_escape_string($users_email);
  $users_pass = mysql_real_escape_string($users_pass);
  $users_city = mysql_real_escape_string($users_city);
  $users_phno = mysql_real_escape_string($users_phno);
  $userid = mysql_real_escape_string($userid);

  $query = " INSERT INTO `fashion_loft`.`employee` (`EID`, `ename`, `mail`, `city`,
        `Phno`, `Pwd`) VALUES ('$userid', '$users_name',
        '$users_email', '$users_city', '$users_phno', '$users_pass');";

  mysql_query($query);

  echo "<h2>Thank you for your Comment!</h2>";

  mysql_close($con);
}
?>
</form>
</div>
</body>
</html>