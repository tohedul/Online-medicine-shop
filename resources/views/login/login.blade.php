<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container" style="margin-top:5%;margin-left: 40%;text-align:center;">

		<form method="post" >
			{{ csrf_field() }}
			<table >
				<tr>
					<td colspan="2"><h3>Login</h3><br> </td>
				</tr>
				<tr>
					<td>Username: </td>
					<td><input type="text" name="username" autofocus required></td>
				</tr>
				<br><br>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="password" required></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" value="Login"></td>
				</tr>

			</table>


		</form>
	</div>

</body>
</html>
