<?session_start();?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Trocchi' rel='stylesheet' type='text/css'>
<title>
  CEG BOOK SHELF|HOME
</title>
</head>

<body>
<?php include('menu.php');?>
<div class="container">
	<div class="row-fluid">
		<div class="span12">
			<form name="search" action="search.php" method="post">
				
					<div class="span2">
						<input type="text" name="term" size="200">
					</div>
					<div class="span4 offset2">
						<input type="radio" name="cla" value="author">PROF
						<input type="radio" name="cla" value="area">SUB
						<input type="radio" name="cla" value="name">TITLE
					</div>
					<br>
					<div class="span12 form-controls">
						<div class="controls">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-success" value="Get it">
						</div>
					</div>
					</div>
					</form>
					</div>
					</div>
					</div>					
	
</body>

</html>
