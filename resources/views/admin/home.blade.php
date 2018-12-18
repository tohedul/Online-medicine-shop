<!DOCTYPE html>
<html>
<head>
	<title>Home | Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


    <div class="container">
      <h1>Home </h1>
      <a href="{{route('home.emplist')}}">customer List</a> |
       <a href="{{route('home.search')}}">Search customer</a> |
        <a href="{{route('home.create')}}">Create account</a> 
        |
        <a href="{{route('home.productadmin')}}">Medicine List</a> |
        <a href="{{route('home.newproduct')}}">New medicine</a> |
         <a href="{{route('logout.index')}}">Logout</a>
    </div>


</body>
</html>
