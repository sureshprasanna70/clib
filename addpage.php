<?session_start();?>
<html>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link href="http://fonts.googleapis.com/css?family=Trocchi" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<head>
	<script>
	function safety()
    	{
      
   		if(document.addpage.home.value == "" )
   		{
     		alert( "Provide your username!" );
     		document.addpage.use.focus() ;
     		return false;
   		}
   		if(document.addpage.notit.value == "" )
   		{
     		alert( "Provide your Password!" );
     		document.addpage.pass.focus() ;
     		return false;
   		}
   		</script>
<title>CEG BOOK SHELF|Add</title>
</head>
<body>
	<?include('menu.php');
	if(isset($_SESSION['idcard'])){?>
<div class="container">

<div class="row-fluid">	 
<div class="span12">
<form name="addpage" action="insert.php"  method="post" onsubmit="return(safety());">
<label>Add Page</label><br>
<label>Page title</label><input type="text" name="home" autofocus required><br>
<label>No of Title</label><input type="text" name="notit" required><br>
<input class="btn btn-success" type="submit" value="Finish">
<input class="btn btn-danger" type="reset" value="Reset">
</form>
</div>
</div>
</div>
<?}
else {
include('forbidden.html');
}?>
</body>
</html>