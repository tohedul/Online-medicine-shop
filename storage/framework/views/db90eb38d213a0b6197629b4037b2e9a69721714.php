<!DOCTYPE html>
<html>
<head>
	<title>ProductList | Employee</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


    <div class="container">
      <h1>Product List </h1>
      <a href="<?php echo e(route('home.employee')); ?>">Back</a><a href="<?php echo e(route('logout.index')); ?>">|Logout</a>

      <form method="post">

        <table border="1">
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
          </tr>
          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($prd->id); ?></td>
            <td><?php echo e($prd->name); ?></td>
            <td><?php echo e($prd->quantity); ?></td>
            <td><?php echo e($prd->price); ?></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

      </form>

    </div>


</body>
</html>
