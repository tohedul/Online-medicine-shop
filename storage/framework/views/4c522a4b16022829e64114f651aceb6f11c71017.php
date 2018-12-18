<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
		<h2> Welcome Home!</h2>
		<a href="<?php echo e(route('account.index')); ?>"> List of Accounts</a> |
		<a href="<?php echo e(route('home.profile')); ?>"> Profile</a> |
		<a href="<?php echo e(route('logout.index')); ?>"> Logout</a> 
</body>
</html>