
<br>
<div class="banner">
<h1>
    
   CEG BOOK SHELF
    
</h1>
</div>
<br><br>
<nav class="top-bar">
<ul class="nav nav-tabs">
<?php


require_once('data/db_conn.php');
try
{
$toquery="SELECT * FROM menu";
$menu_item=mysql_query($toquery);
$co=mysql_num_rows($menu_item);
    
while ($menu = mysql_fetch_array($menu_item))
{
    ?>
<li><a href="<?php echo $menu["item"] ?>.php">
<?php echo $menu["distext"] ?>
</a></li>
    
<?}

if(!isset($_SESSION['idcard']))
{?>
 <li class="pull-right"><a href="login.php">Login</a></li><?}else {?>
 	<li class="pull-right"><a href="logout.php">Logout,<?php echo base64_decode($_SESSION['idcard'])?></a></li>
 <?}?>
</ul>
</nav>
<?}
catch(Exception $e)
{
    echo $e;
}
?>
<br>

<br><br>

      
     

<?
?>
