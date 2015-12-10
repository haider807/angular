<?php
$username = "root";
$password = "1234";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("test",$dbhandle) 
  or die("Could not select test DB");

//*** The request is a JSON request.
//*** We must read the input.
//*** $_POST or $_GET will not work!
$data = file_get_contents("php://input");
$objData = json_decode($data);
$email = $objData->email;

//$email = "usman.haider@discretelogix.com";
$res = 0;
//execute the SQL query and return records
$sql = "SELECT * FROM user where username = '".$email."'";
$result = mysql_query($sql);
//fetch tha data from the database 
while ($row = mysql_fetch_array($result)) {
   $res = 1;
}
    echo json_encode($res);
mysql_close($dbhandle);
