<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cart | Customer </title>

  </head>
  <body>
    <h1>Cart</h1>
    <a href="{{route('home.customer')}}">Back</a> | <a href="{{ url('/logout')}}"> Logout</a>
    <form method="post">

        <table border="1">
          <tr>
            
            <th>MedicineName</th>
            <th>Quantity</th>
            <th>TPrice</th>
          </tr>
          @foreach($data as $prd)
          <tr>
            
            <td>{{$prd->medicinename}}</td>
            <td>{{$prd->quantity}}</td>
            <td>{{$prd->quantity*$prd->price}}</td>
          </tr>
          @endforeach

        </table>
          <input type="submit" name="" value="Purchase" class="btn btn-primary">

      </form>
  </body>
</html>
