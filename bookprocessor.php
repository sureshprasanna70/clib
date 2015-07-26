<?
include_once('data/db_conn.php');
$book_name=$_POST["bname"];
$book_area=$_POST["barea"];
$book_expert=$_POST["bexpert"];
$book_author=$_POST["bautor"];
$book_link=$_POST["blink"];
try
{
	$qu="INSERT INTO docs(name,area,author,priority,location) 
	VALUES ('$book_name','$book_area','$book_author','$book_expert','$book_link')";
	mysql_query($qu)or die(mysql_error());
}
catch(Exception $e)
{
	echo mysql_error();
}
?>