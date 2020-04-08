<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/login.css">
</head>
<body style="background-color:#FFFF00">
<div id="main-wrapper">
<center><h1>USERLOGIN HERE</h1>
<img src="logo.jpg" class="logo"/>
</center>
<form class="form" action="login.php" method="post">
<label><b>USERNAME OR ID</label><br>
<input name="uname" type="text" class="inputvalues" placeholder="enter text here"/><br>
<label><b>PASSWORD</label><br>
<input name="pass" type="password" class="inputvalues" placeholder="type password"/><br>
<input name="log" type="submit" id="login_btn" value="LOGIN"/><br>
<a href="register.php"> <input type="button" id="register_btn" value="REGISTER"/></a>
<a href="welcome.php"> <input type="button" id="register_btn" value="BACK"/></a>
</form>
</div>
</body>
</html>
