<?

class DBC
{
	var $con;
	var $res;
	
	function DBC()
	{
		$con=NULL;
		$res=NULL;

	}
	function connector($db,$table)
	{
		try
		{
		$con=mysqli_connect("localhost","clib","123456",$db);
		}
		catch(Exception $e)
		{
			echo $e;
		}

		try 
		{
			$ans=mysqli_query($con,"SELECT * FROM menu");
			while($ans1=mysqli_fetch_array($ans))
			{
			
				echo '<li><a href="'.$ans1['item'].'.php">'.strtoupper($ans1['item']).'</a></li>';
			}
		} 
		catch (Exception $e) 
		{
			echo $e;
		}
		function __destruct() 
		{
      	 
   		}
		
	}
}
?>