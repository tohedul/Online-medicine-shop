<!DOCTYPE html>
<html>
<head>
	<title>Search | Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


    <div class="container">
      <h1>Search Employee</h1>
      <a href="<?php echo e(route('home.admin')); ?>">Back</a><a href="<?php echo e(route('logout.index')); ?>">|Logout</a>

        <form method="get">
          <div class="form-group">
            <input type="search" name="search" class="form-control">
            <span class="input-group-prepend">
              <button type="submit" class="btn btn-primary" >Search</button>
            </span>

          </div>


        </form>
        <table border="1">
          <tr>
            <th>Emp name</th>
            <th>Contact no</th>
            <th>Username</th>
            <th colspan="2">Actions</th>
          </tr>
          <?php $__currentLoopData = $searchresults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($emp->empName); ?></td>
            <td><?php echo e($emp->contactNo); ?></td>
            <td><?php echo e($emp->username); ?></td>
            <td><a href="<?php echo e(route('home.update', [$emp->id])); ?>" class="btn">Update</a>|<a href="<?php echo e(route('home.delete', [$emp->id])); ?>" class="btn">Delete</a> </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

    </div>


</body>
</html>
