<?
function submenu($tablename)
{

$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");
$selected = mysql_select_db("test",$dbhandle)
  or die("Could not select examples");
$result = mysql_query("SELECT sublist FROM $tablename")
 or die("error");
while ($row = mysql_fetch_array($result)) {
   echo $row['sublist']."<tab align=right>";
}
}
//menu 

$dbhandle = mysql_connect($hostname, $username, $password)
 



$selected = mysql_select_db("test",$dbhandle)
  


$result = mysql_query("SELECT * FROM menu");


while ($row = mysql_fetch_array($result)) {
   echo $row{'items'};
}
//close the connection
mysql_close($dbhandle);
submenu("");


?>


