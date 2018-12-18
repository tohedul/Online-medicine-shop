<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<p> Hi</p>
<form method="post" >
	@csrf    <!-- token -->
	Name:<input type="text" name="username">
	Password:<input type="password" name="password">
	<input type="submit" name="submit" value="submit">


</form>
</body>
</html>