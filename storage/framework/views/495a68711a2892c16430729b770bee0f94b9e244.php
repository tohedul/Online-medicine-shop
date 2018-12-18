<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<body>
		<h2>Create a New Account</h2>
		<a href="<?php echo e(route('account.index')); ?>">Back</a> | 
		<a href="<?php echo e(route('logout.index')); ?>"> Logout</a> 

		<form method="post">
			@csrf
			<table>
				<tr>
					<td>ACCOUNT NO:</td>
					<td><input type="text" name="accNo" value="<?php echo e(old('accNo')); ?>" /></td>
				</tr>
				<tr>
					<td>ACCOUNT NAME:</td>
					<td><input type="text" name="accName" value="<?php echo e(old('accName')); ?>" /></td>
				</tr>
				<tr>
					<td>ACCOUNT BALANCE:</td>
					<td><input type="text" name="accbalance"/></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Create" /></td>
				</tr>
			</table>
		</form>

		<div>
			<?php if($errors->any()): ?>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php echo e($err); ?> <br>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>
		</div>

</body>
</html>