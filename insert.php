<?session_start();?>
<html>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<head>

<title>CLIB|ADDCONTENTS</title>
</head>
<body>
	<?include('menu.php');?>
<div class="container">
<div class="row-fluid">	 
<div class="span12">
	<?php if(isset($_SESSION['idcard'])){?>
<form name="myForm" action="addcontents.php"  method="post" onsubmit="return(safety());">
<?
$num=$_POST["notit"];
$home=$_POST["home"];
for($i=1;$i<=$num;$i++)
{
?>
<div class="row-fluid">
<div class="span8">
<label>Title</label><input type="text" name="twtitle[]" autofocus required><br>
<label>Contents</label><textarea name="content[]" required></textarea><br>
</div>
</div>
<?
}?>
<div class="form-controls">
	<div class="controls">
<input type="hidden" name="home2" value="<?echo  $home; ?>" />
<input class="btn btn-success" type="submit" value="Finish">
<input class="btn btn-danger" type="reset" value="Reset">
</div>
</div>
</form>
<?
}
else
{
include('forbidden.html');}
?>

</div>
</div>
</div>
</body>
</html>