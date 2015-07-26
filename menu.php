<?php 
echo '<br> <div class="banner"> <h1>  CEG BOOK SHELF </h1> </div>  <br><br><nav class="top-bar"> <ul class="nav nav-tabs">';

require_once('data/db_conn.php');
try
{
  $toquery="SELECT * FROM menu";
  $menu_item=mysql_query($toquery);
  $co=mysql_num_rows($menu_item);

  while ($menu = mysql_fetch_array($menu_item))
  {
    echo '<li><a href="'.$menu["item"].'".php">';
    echo $menu["distext"].'</a></li>';

  }

  if(!isset($_SESSION['idcard']))
  {
    echo ' <li class="pull-right"><a href="login.php"><i class="icon-user"></i>Login</a></li>';
  }
  else {
    echo '  <li class="pull-right"><a href="logout.php">Logout ,'.base64_decode($_SESSION['idcard']).'></a></li>';
  }
  echo '</ul> </nav>';
}
catch(Exception $e)
{
  echo $e;
}
?>
