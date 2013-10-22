<br>
<div class="banner">
<h1>
    
   COMMON LIBRARY
    
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
    
<?}?>
 <li class="pull-right"><a href="login.php">Login</a></li>
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
