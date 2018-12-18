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
      <h1>customer List </h1>
      <a href="{{route('home.admin')}}">Back</a><a href="{{route('logout.index')}}">|Logout</a>

      <form method="post">

        <table border="1">
          <tr>
            <th>Emp name</th>
            <th>Contact no</th>
            <th>Username</th>
            <th colspan="2">Actions</th>
          </tr>
          @foreach($emps as $emp)
          <tr>
            <td>{{$emp->empName}}</td>
            <td>{{$emp->contactNo}}</td>
            <td>{{$emp->username}}</td>
            <td><a href="{{route('home.update', [$emp->id])}}" class="btn">Update</a>|<a href="{{route('home.delete', [$emp->id])}}" class="btn">Delete</a> </td>
          </tr>
          @endforeach
        </table>

      </form>

    </div>


</body>
</html>
