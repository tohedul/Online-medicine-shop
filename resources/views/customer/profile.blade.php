<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile | Customer </title>

  </head>
  <body>
    <h1>Profile</h1>
    <a href="{{route('home.customer')}}">Back</a> | <a href="{{ url('/logout')}}"> Logout</a>
    <div class="">
      <form method="post">
      <table >
        <tr>
          <td>Id: </td>
          <td>{{$user->id}}</td>
        </tr>
        <tr>
          <td>Full name: </td>
          <td><input type="text" name="empName" value="{{$user->empName}}" required> </td>
        </tr>
        <tr>
          <td>Username: </td>
          <td><input type="text" name="username" value="{{$user->username}}" required> </td>
        </tr>
        <tr>
          <td>Contactno: </td>
          <td><input type="text" name="contactNo" value="{{$user->contactNo}}" required> </td>
        </tr>
        <tr>
          <td>Password: </td>
          <td><input type="text" name="password" value="{{$user->password}}" required> </td>
        </tr>
        <tr>
          <td><input type="submit" class="btn" value="Update"> </td>
        </tr>
        <tr>
          <td>Photo</td>
          <td><img src="{{asset('upload/'.$user->photo)}}" width="100px" height="100px" /></td>
      </tr>
      <tr>
        <td></td>
        <td><a href="{{route('home.upload')}}"> Change photo</a></td>
      </tr>
      </table> 
    
    </form>
    </div>
  </body>
</html>
