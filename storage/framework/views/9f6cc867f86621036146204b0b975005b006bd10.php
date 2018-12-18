<!DOCTYPE html>
<html>
<head>
	<title>Home | Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


    <div class="container">
      <h1>Home </h1>
      <a href="<?php echo e(route('home.emplist')); ?>">Employee List</a> | <a href="<?php echo e(route('home.search')); ?>">Search Employee</a> | <a href="<?php echo e(route('home.create')); ?>">Create account</a> | <a href="<?php echo e(route('logout.index')); ?>">|Logout</a>
    </div>


</body>
</html>
