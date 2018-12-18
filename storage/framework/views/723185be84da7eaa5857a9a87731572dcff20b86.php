<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<body>
		<h2>User Details</h2>
		<a href="<?php echo e(route('home.index')); ?>">Back</a> | 
		<a href="<?php echo e(route('logout.index')); ?>"> Logout</a> 
		<table>
			<tr>
				<td>Username:</td>
				<td><?php echo e($user->username); ?></td>
			</tr>
			<tr>
				<td>User Type:</td>
				<td><?php echo e($user->type); ?></td>
			</tr>
			<tr>
				<td>Photo</td>
				<td><img src="<?php echo e(asset('upload/'.$user->photo)); ?>" width="100px" height="100px" /></td>
			</tr>
			<tr>
				<td></td>
				<td><a href="<?php echo e(route('home.upload')); ?>"> Change photo</a></td>
			</tr>
		</table>

		
		
</body>
</html>