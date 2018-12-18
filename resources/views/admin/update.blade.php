<!DOCTYPE html>
<html>
<head>
	<title>Update | Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


    <div class="container">
      <h1>Update employee data</h1>
      <a href="{{route('home.emplist')}}">Back</a><a href="{{route('logout.index')}}">|Logout</a>

      <form method="post">

        <table border="1">
          <tr>
            <td>Employee name: </td>
            <td><input type="text" name="empName" value="{{$emp->empName}}"> </td>

          </tr>
          <tr>
            <td>Contact no: </td>
            <td><input type="text" name="contactNo" value="{{$emp->contactNo}}"> </td>

          </tr>
          <tr>
            <td>Username: </td>
            <td><input type="text" name="username" value="{{$emp->username}}"> </td>

          </tr>
          <tr>
            <td>Password: </td>
            <td><input type="text" name="password" value="{{$emp->password}}"><br> </td>

          </tr>


        </table>
        <br>
        <input type="submit" name="" value="Update" class="btn-primary">

      </form>

    </div>


</body>
</html>
