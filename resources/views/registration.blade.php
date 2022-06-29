<html>
	<title> Registration </title>
<body><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<h1 style="font-family:Segoe UI; text-align:center"> Register Now</h1>
<br><br>

<form method="POST" action="{{route('store')}}">	
	@csrf
		<table align="center">
		<tr>
			<td> Account Details
				<br><input type ="text" name="username" placeholder="UserName"></td>
				<td><br><input type ="text" name="password" placeholder="Password"></td>
			</tr><tr>
			<td> Personal Information
				<br><input type ="text" name="firstName" placeholder="First Name"></td>
			<td><br><input type ="text" name="lastName" placeholder="Last Name"></td>
			</tr><tr>
			<td colspan="4" align="center">
			<input type ="submit" name="btn_register" value="Register"/>
			</td>
			<tr><td colspan="4" align="center"><a href="{{ url('/')}}">Already have an Account?</a><td></tr>
		</tr>
		</table>
</form>
</body>
</html>
