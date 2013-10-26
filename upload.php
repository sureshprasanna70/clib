<?php
echo "Book name:".$_FILES['book']['name'];
if( $_FILES['book']['name'] != "" )
{
   
   move_uploaded_file($_FILES['book']['name'], "docs/" )or die($_FILES['book']['error']);
    
   
}
else
{
    die("No book specified!");
}
?>
<html>
<head>
<title>Uploading Complete</title>
</head>
<body>
<h2>Uploaded File Info:</h2>
<ul>
<li>Sent book: <?php echo $_FILES['book']['name'];  ?>
<li>File size: <?php echo $_FILES['book']['size'];  ?> bytes
<li>File type: <?php echo $_FILES['book']['type'];  ?>
</ul>
</body>
</html>
