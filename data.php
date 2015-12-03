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

//execute the SQL query and return records
$result = mysql_query("SELECT * FROM user");
//fetch tha data from the database 
while ($row = mysql_fetch_array($result)) {
   $res[] = array("id"=>$row['user_id'],"username"=>$row['username'],"is_active"=>$row['is_active']);
}
$resu = array("records"=>$res);
        echo json_encode($resu);
///echo $resu;
//close the connection
//mysql_close($dbhandle);
?>