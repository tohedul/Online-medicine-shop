<!DOCTYPE html>
<html>
<head>
	<title>EmpList | Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


    <div class="container">
      <h1>Employee List </h1>
      <a href="<?php echo e(route('home.admin')); ?>">Back</a><a href="<?php echo e(route('logout.index')); ?>">|Logout</a>

      <form method="post">

        <table border="1">
          <tr>
            <th>Emp name</th>
            <th>Contact no</th>
            <th>Username</th>
            <th colspan="2">Actions</th>
          </tr>
          <?php $__currentLoopData = $emps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($emp->empName); ?></td>
            <td><?php echo e($emp->contactNo); ?></td>
            <td><?php echo e($emp->username); ?></td>
            <td><a href="<?php echo e(route('home.update', [$emp->id])); ?>" class="btn">Update</a>|<a href="<?php echo e(route('home.delete', [$emp->id])); ?>" class="btn">Delete</a> </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

      </form>

    </div>


</body>
</html>
