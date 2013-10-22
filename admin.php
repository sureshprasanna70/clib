<html>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <head>
        <title>
            CLIB|HOME
        </title>
        <script type="text/javascript">
        function safety()
    	{
      
   		if(document.clibadmin.use.value == "" )
   		{
     		alert( "Provide your username!" );
     		document.clibadmin.use.focus() ;
     		return false;
   		}
   		if(document.clibadmin.pass.value == "" )
   		{
     		alert( "Provide your Password!" );
     		document.clibadmin.pass.focus() ;
     		return false;
   		}
		}
   </script>
    </head>
    <body>
    	<?include('menu.php');?>
    	<div class="container">
    		<div class="row-fluid">
    			<div class="span12">
    				<form name="clibadmin" action="access.php" method="post" onsubmit="return(safety());">
    				<label>Username</label>
    				<input type="text" name="use" size="15"/>
    				<label>Password</label>
    				<input type="text" name="pass" size="15"/>
    				<div class="form-controls">
    				<div class="controls">
    				
    				<input class="btn btn-success" type="submit" value="Get Access" name="Get Access"/>
    				<input class="btn btn-danger" type="reset" value="Clear" name="Clear"/>
    			</div>
    		</div>
    	</div>
    </div>
</div>
    </body>
</head>
</html>