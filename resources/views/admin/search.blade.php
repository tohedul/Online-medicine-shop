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
      <h1>Search customer</h1>
      <a href="{{route('home.admin')}}">Back</a><a href="{{route('logout.index')}}">|Logout</a>

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
          @foreach($searchresults as $emp)
          <tr>
            <td>{{$emp->empName}}</td>
            <td>{{$emp->contactNo}}</td>
            <td>{{$emp->username}}</td>
            <td><a href="{{route('home.update', [$emp->id])}}" class="btn">Update</a>|<a href="{{route('home.delete', [$emp->id])}}" class="btn">Delete</a> </td>
          </tr>
          @endforeach
        </table>

    </div>


</body>
</html>
