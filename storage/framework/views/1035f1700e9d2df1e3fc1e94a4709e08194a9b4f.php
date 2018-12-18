<!DOCTYPE html>
<html>
<head>
	<title>Mew Product| Employee</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


    <div class="container">
      <h1>New Product Entry </h1>
      <a href="<?php echo e(route('home.employee')); ?>">Back</a><a href="<?php echo e(route('logout.index')); ?>">|Logout</a>

      <form method="post">

        <table border="1">
          <tr>
            <td>Product name: </td>
            <td><input type="text" name="name" value="" required> </td>

          </tr>
          <tr>
            <td>Quantity: </td>
            <td><input type="text" name="quantity" value="" required> </td>

          </tr>
          <tr>
            <td>Price: </td>
            <td><input type="text" name="price" value="" required> </td>

          </tr>


        </table>
        <br>
        <input type="submit" name="" value="Entry" class="btn-primary">

      </form>

    </div>


</body>
</html>
