<?php
session_start();
echo $_SESSION['idcard'];
if($_SESSION['idcard'])
{
  echo "Unsetting";
  unset($_SESSION['idcard']);
  session_unset('idcard');
  session_destroy();
  echo "h".$_SESSION['idcard'];
}
?>
