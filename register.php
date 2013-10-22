<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<head>
  <title>REGISTER</title>
  <script src="js/jquery.js" type="text/javascript"></script>
<script src="js/custom.js" type="text/javascript"></script>
</head>
<body>
  <?include('menu.php'); ?>
  <form class="form-horizontal" name="register" action="" onsubmit="return verify();"  method="post">
  <div class="control-group">
    <label class="control-label" for="email">Email</label>
    <div class="controls">
      <input type="text" id="email" placeholder="Email">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="pass">Password</label>
    <div class="controls">
      <input type="password" id="pass" placeholder="Password">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="verpass">Re-enter Password</label>
    <div class="controls">
      <input type="password" id="verpass" placeholder="Password">
    </div>
  </div>
   <!--div class="control-group">
    
    <div class="controls">
      <button onclick="do_check()">check password</button>
    </div>
  </div!-->
  
  <div class="control-group">
    <div class="controls">
       <input type="submit" class="btn btn-success" name="sub" value="Register"/>
       <input type="reset" class="btn btn-danger" name="res" value="Reset"/>
    </div>
  </div>
</form>

</body>

</html>