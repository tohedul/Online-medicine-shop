<!DOCTYPE html>
<html>
<head>
	<title>ProductList | customer</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


    <div class="container">
      <h1>Product List </h1>
      <a href="{{route('home.customer')}}">Back</a><a href="{{route('logout.index')}}">|Logout</a>

      <form method="get">
          <div class="form-group">
            <input type="search" name="search" class="form-control">
            <span class="input-group-prepend">
              <button type="submit" class="btn btn-primary" >Search</button>
            </span>

          </div>

      </form>

      <form method="post">

        <table border="1">
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Genre</th>
            <th>Form</th>
            <th>Vendor</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Add to cart</th>
          </tr>
          @foreach($products as $prd)
          <tr>
            <td>{{$prd->id}}</td>

            <td><input type="text" name="medicinename" value="{{$prd->name}}"></td>

            <td>{{$prd->genre}}</td>
            <td>{{$prd->form}}</td>
            <td>{{$prd->vendor}}</td>
            <td>{{$prd->quantity}}</td>

            
            <td><input type="text" name="price" value="{{$prd->price}}"></td>
            <td> 
              <select name="quantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <input type="submit" class="btn btn-primary" value="add" >

            </td>
          </tr>
          @endforeach
        </table>

      </form>

    </div>


</body>
</html>
