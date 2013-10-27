<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<head>
	<title>CLIB|SEARCH RESULTS</title>
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
	
	$query="SELECT *  FROM docs WHERE $opt LIKE '%$we%' ORDER BY priority";
	$book=mysql_query($query);
		echo '<br><br><span class="label label-info">RESULT</span><br><br>';
	if($book)
	{
		echo'<table class="table content table-bordered table-hover" >
		<tr>
		<td class="span8 title">Book Name</td>
		<td class="span8 title">Subject</td>
		<td class="span8 title">Author</td>
		<td class="span8 title">Expertise</td>
		<td class="span8 title">Link</td>
		</tr> ';
	while($qui=mysql_fetch_array($book))
	{
	echo '<tr>';
	echo '<td class="content">'.$qui["name"].'</td>';
	echo '<td class="content">'.$qui["area"].'</a></td>';
	echo '<td class="content">'.$qui["author"].'</td>';
	echo '<td class="content">'.$qui["priority"].'</td>';
	echo '<td class="content"><a href="'.$qui["location"].'">Download</a></td>';
	echo '<tr>';
	}
	echo '</table>';
}
	else
	{
		echo "Search failed";
		echo mysql_errno();
		echo mysql_error();

	}
}

else
echo "Choose the filter option";

