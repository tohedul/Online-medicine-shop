<!DOCTYPE html>
<html>
<head>
	<title>Create | Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


    <div class="container">
      <h1>Create Account </h1>
      <a href="{{route('home.admin')}}">Back</a><a href="{{route('logout.index')}}">|Logout</a>

      <form method="post">

        <table border="1">
          <tr>
            <td>customer name: </td>
            <td><input type="text" name="empName" value="" required> </td>

          </tr>
          <tr>
            <td>Contact no: </td>
            <td><input type="text" name="contactNo" value="" required> </td>

          </tr>
          <tr>
            <td>Username: </td>
            <td><input type="text" name="username" value="" required> </td>

          </tr>
          <tr>
            <td>Password: </td>
            <td><input type="text" name="password" value="" required><br> </td>

          </tr>


        </table>
        <br>
        <input type="submit" name="" value="Create" class="btn-primary">

      </form>

    </div>


</body>
</html>
