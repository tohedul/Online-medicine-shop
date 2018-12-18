<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>

  </head>
  <body>
    <h1>Profile</h1>
    <a href="<?php echo e(route('home.index')); ?>">Back</a><br><br>
    <div class="">
      <a href="<?php echo e(url('/logout')); ?>"> LogOut</a>
      <table>
        <tr>
          <td>Id: </td>
          <td><?php echo e($pro->id); ?></td>
        </tr>
        <tr>
          <td>Name: </td>
          <td><?php echo e($pro->username); ?></td>
        </tr>
      </table>
    </div>
  </body>
</html>
