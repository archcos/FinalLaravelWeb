<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
</head>
<body>
<div align="right"><button><a href="{{ url('/')}}">LOG OUT</a></button></div>
<div class="container">
   <div class="row" style="margin-top:45px">
      <div class="col-md-4 col-md-offset-4">
    
<h1 align="center" style="font-family:Segoe UI"> Manage Account Now</h1>
<h5 align="center", style="font-family:Segoe UI, align=center"> Modify Account Data </h5>
  
           @csrf
<form method="POST" action="{{route('update')}}">
@method('PUT')	
	@csrf
		<table align="center">
		<tr>
			<td> Change Password
				<br><input type ="text" name="username" placeholder="UserName"></td>
				<td><br><input type ="text" name="password" placeholder="Password"></td>
			</tr><tr>
			<td> Change Information
				<br><input type ="text" name="firstName" placeholder="First Name"></td>
			<td><br><input type ="text" name="lastName" placeholder="Last Name"></td>
			</tr><tr><br>
			<td colspan="4" align="center">
			<input type ="submit" name="btn_update" value="UPDATE"/>
			</td>
		</tr>
		</table>
</form>

<form method="POST" action="{{route('delete')}}">
@method('PUT')	
	@csrf

		<table align="center">
		<tr>
			<td> Delete Account
				<br><input type ="text" name="username" placeholder="username"></td>
            <br><br>
   <td align="center"><br><input type ="submit" name="btn_delete" value="DELETE"/></td>

</tr>
</form>
</div>
   </div>
</div>
    
</body>
</html>