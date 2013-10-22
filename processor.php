<?php
$con=mysqli_connect("localhost","clib","123456","clib");
if (mysqli_connect_errno($con))
  {
  	echo "first check";
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
echo $_POST['check'];
$val=$_POST['check'];
if($con)
{
	echo "success";
}

$sql = "INSERT INTO `docs` (`name`, `edition`, `author`) VALUES ('".$val."', '".$val."', '".$val."');";
mysqli_query($con, $sql);
//$res=mysqli_execute($con);

{
	echo "Sucss";
}
?>