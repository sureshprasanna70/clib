<?
include('data/db_conn.php');
$from= $_POST["form-name"];
if($from)
{
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
				session_start();
				$_SESSION['idcard']=base64_encode($u_name);
				
				header('Location:adminpanel.php');
			}
	
		}
		

	}
	
}
catch(Exception $e)
{
	echo $e;
}
}
else
{
	echo '<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<div class="alert alert-error">
	You are not authorized
	</div>';
}
?>
