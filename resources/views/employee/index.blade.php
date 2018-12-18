<!DOCTYPE html>
<html>
<head>
	<title>Manage</title>
</head>
<body>
		<h1> Employee List </h1>

		@foreach($emps as $emp)
			<table border="1">
				<tr>
					<th>Emp Id</th>
					<th>Emp name</th>
					<th>Action</th>
				</tr>
				<tr>
					<td>{{$emp->id}}</td>
					<td>{{$emp->username}}</td>
					<td><a href="#">Update</a> | <a href="#">Delete</a></td>
				</tr>
			</table>
		@endforeach
		

</body>
</html>