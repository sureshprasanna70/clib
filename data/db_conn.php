<?
require_once('db_cred.php');
try
{
$dbhandle = mysql_connect($host, $user, $pass);
$selected = mysql_select_db("clib");
}
catch(Exception $e)
{
	echo $e;
}

?>
