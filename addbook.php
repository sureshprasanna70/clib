<?session_start();?>
<!DOCTYPE HTML5>

<html>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="css/style.css">

<head>
	<script>
	function safety()
    	{
      
   		if(document.addbook.bname.value == "" )
   		{
     		alert( "Provide book name!" );
     		document.addbook.bname.focus() ;
     		return false;
   		}
   		if(document.addbook.blink.value == "" )
   		{
     		alert( "Provide book link!" );
     		document.addbook.blink.focus() ;
     		return false;
   		}
   		if(document.addbook.bautor.value == "" )
   		{
     		alert( "Provide book author!" );
     		document.addbook.bautor.focus() ;
     		return false;
   		}
   		if(document.addbook.bexpert.value == "" )
   		{
     		alert( "Provide book expert!" );
     		document.addbook.bexpert.focus() ;
     		return false;
   		}
   		if(document.addbook.barea.value == "" )
   		{
     		alert( "Provide book area!" );
     		document.addbook.barea.focus() ;
     		return false;
   		}
   	}
   		</script>
<title>CLIB|Add</title>
</head>
<body>
	<?include('menu.php');
	if(isset($_SESSION['idcard'])){?>
<div class="container">
<div class="row-fluid">	 
<div class="span12">
	
	<form name="addbook" method="post" action="bookprocessor.php" onsubmit="return(safety());">
		<label>Book Name</label><input type="text" name="bname"/>
		<div class="label label-inverse">Name of the material</div>
		<label>Book link</label><input type="text" name="blink"/>
		<div class="label label-inverse">Link to your documents repository</div>
		<label>Book author</label><input type="text" name="bautor"/>
		<div class="label label-inverse">Name of the author</div>
		<label>Expertise</label><select name="bexpert">
			<?for($i=1;$i<=3;$i++){?>
				<option value="<?echo $i;?>"><?echo $i;?></option>
				<?}?>
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="label label-inverse">Rate authors expertise on this subject on scale of three</div>
		<label>Subject</label><input type="text" name="barea"/>
		<div class="label label-inverse">Which subject is this book relevant</div>
		<div class="form controls">
			<div class="controls">
				<input class="btn btn-success" type="submit" value="Add to collection"/>
				<input class="btn btn-danger" type="reset" value="Cancel"/>
			</div>
		</div>
		<?}?>