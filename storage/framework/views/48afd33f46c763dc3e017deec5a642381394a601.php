<!DOCTYPE html>
<html>
<head>
	<title>Home | Employee</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

		<div class="container">
			<h1>Home</h1>
				<a href="<?php echo e(route('home.product')); ?>">Product List</a> | <a href="<?php echo e(route('home.newproduct')); ?>">Add new product</a> | <a href="<?php echo e(route('logout.index')); ?>">Logout</a>
		</div>



</body>
</html>
