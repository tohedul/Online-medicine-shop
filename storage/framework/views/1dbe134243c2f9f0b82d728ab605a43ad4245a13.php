<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>

  </head>
  <body>
    <h1>Welcome Home!</h1>
    Logged in as:<a href="<?php echo e(route('home.profile', [session('id')])); ?>"><?php echo e(session('un')); ?></a><br><br>
    <div class="">
      <a href="#">UserList </a>|<a href="<?php echo e(url('/logout')); ?>"> LogOut</a>
    </div>
  </body>
</html>
