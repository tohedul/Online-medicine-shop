<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>

  </head>
  <body>
    <h1>Welcome Home!</h1>
    Logged in as:<a href="{{route('home.profile', [session('id')])}}">{{session('un')}}</a><br><br>
    <div class="">
      <a href="{{route('home.manage')}}">Manage </a>|<a href="{{route('home.register')}}"> Create account</a> | <a href="{{ url('/logout')}}"> LogOut</a>
    </div>
  </body>
</html>
