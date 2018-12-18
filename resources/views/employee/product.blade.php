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
      <a href="{{route('home.employee')}}">Back</a><a href="{{route('logout.index')}}">|Logout</a>

      <form method="post">

        <table border="1">
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
          </tr>
          @foreach($products as $prd)
          <tr>
            <td>{{$prd->id}}</td>
            <td>{{$prd->name}}</td>
            <td>{{$prd->quantity}}</td>
            <td>{{$prd->price}}</td>
          </tr>
          @endforeach
        </table>

      </form>

    </div>


</body>
</html>
