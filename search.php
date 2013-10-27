<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<head>
	<title>CEG BOOK SHELF|SEARCH RESULTS</title>
</head>
	<body>
		<?include('menu.php');?>
	<div class="container">
	<div class="row-fluid">
		<div class="span12">
<?

require_once('data/db_conn.php');
$we=$_POST["term"];
$opt=$_POST["cla"];
echo '<span class="label label-info">SEARCH TERM:'.strtoupper($we).'</span><br><br>';
echo '<span class="label label-info">SEARCH FILTER:'.strtoupper($opt).'</span>';

if($opt)
{
	
	$pri1="SELECT *  FROM docs WHERE $opt LIKE '%$we%' AND priority=1";
	$pri2="SELECT *  FROM docs where $opt LIKE '%$we%'AND priority=2";
	$pri3="SELECT *  FROM docs where $opt LIKE '%$we%' AND priority=3";
	$book[1]=mysql_query($pri1);
	$book[2]=mysql_query($pri2);
	$book[3]=mysql_query($pri3);
	for($i=1;$i<=3;$i++)
	{
		echo '<br><br><span class="label label-info">SPECILIZATION:'.$i.'</span><br><br>';
	if($book[$i])
	{
		echo'<link href="http://fonts.googleapis.com/css?family=Trocchi" rel="stylesheet" type="text/css">
		<table class="table table-bordered" >
		<tr>
		<td class="span8 title">Entry Number</td>
		<td class="span8 title">Subject</td>
		<td class="span8 title">Author</td>
		<td class="span8 title">Link</td>
		</tr> 
		<tr>';
	while($qui=mysql_fetch_array($book[$i]))
	{
	
	echo '<td class="content">'.$qui["no"].'</td>';
	echo '<td class="content">'.$qui["area"].'</a></td>';
	echo '<td class="content">'.$qui["author"].'</td>';
	echo '<td class="content"><a href="'.$qui["location"].'">Download</a></td>';
	}
	echo '</tr></table>';
}
	else
	{
		echo "Search failed";
		echo mysql_errno();
		echo mysql_error();

	}
}
}

else
echo "Choose the filter option";

