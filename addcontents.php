<?php
session_start();
require_once('data/db_conn.php');
if(isset($_SESSION['idcard']))
{
$home=$_POST["home2"];
$arrcontent=$_POST["content"];
$arrtitle=$_POST["twtitle"];
try{
	$try=mysql_query("CREATE TABLE $home(title varchar(10),content varchar(10))");
	for($i=0;$i<count($arrtitle);$i++)
    {
	mysql_query("INSERT INTO $home(title,content) VALUES ('$arrtitle[$i]','$arrcontent[$i]')");
    mysql_query("INSERT INTO menu(item,distext) VALUES ('$arrtitle[$i]','$arrtitle[$i]')");
    $fp=fopen('home.php','w');
    $filecontent="<?php include('menu.php');?>";
    fwrite($fp,$filecontent);
    fclose($fp);
    }
 header('Location:index.php');
}
catch(Exception $e)
{
	echo $e;
}
mysql_close($dbhandle);
}
else
{
	include('forbidden.html');
}
?>
