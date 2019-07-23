<html>
<head>
<title>  login system  </title>

</head>
<body>

<h2> Login </h2>

<?php echo validation_errors();?>


<form action="LoginController/checkLogin" method="post">
<label>username</label><br>

<input type="text" name="username"/>
</br>
<label>password</label><br>
<input type="text" name="password"/>
</br>
<input type="submit" value="Login" name="submit"/>
</form>
</body>
</html>