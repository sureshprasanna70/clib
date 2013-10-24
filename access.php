<?
include('data/db_conn.php');
$from= $_POST["form-name"];
try
{
if(strcasecmp($from,"admin")==0)
	{

		$u_name=$_POST["use"];
		$u_pass=$_POST["pass"];
		$ques="select username,password from users where username='$u_name'";
		$ans=mysql_query($ques);
		while($qui=mysql_fetch_array($ans))
		{
			if(strcmp($qui["password"],$u_pass)==0)
			{
				session_start('idcard');
				$_SESSION['idcard']=md5("admin");
				echo $_SESSION['idcard'];
				
				
				
				


			}
			else
			{
				echo "Invalid Credentials";
			}
		}
		

	}
	
}
catch(Exception $e)
{
	echo $e;
}
?>
<a href="logout.php">LOgOut</a>