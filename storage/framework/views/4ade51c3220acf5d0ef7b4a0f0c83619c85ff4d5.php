<!DOCTYPE html>
<html>
<head>
	<title>Accounts</title>
</head>
<body>
	<h2>List of Accounts</h2>
	<a href="<?php echo e(route('account.create')); ?>"> Create New Account</a> |
	<a href="<?php echo e(route('logout.index')); ?>"> Logout</a> 

	<ul>
		<?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><a href="<?php echo e(route('account.show', [$acc->accId])); ?>"> <?php echo e($acc->accNo); ?> (<?php echo e($acc->typeName); ?>)</a></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</body>
</html>