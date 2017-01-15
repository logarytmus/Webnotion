<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/public/css/styles.css"/>
	<title>Webnotion-zadanie</title>
</head>
<body>
<h1 style = "color: white" class="text-center">Login</h1>

<div class="container">
	<div class="row">
		<div class="center-block col-md-4 well" style="float:none; background-color:#FFFFFF">
		<form method="POST" action="/dashboard">
			<input style = "background-color: #F4F5F7" type="text" name='email'  placeholder='Email Address' class="form-control" required/><br>
			<input style="background-color: #F4F5F7" type="password" name='password'  placeholder='Password' class="form-control" required/><br>
			<label><input type="checkbox" name="remember" value="">Remember me</label><br>
			<button type="submit" class=" center-block btn btn-lg ">SIGN IN</button><br>
			</form>
		</div>
	</div>
</div>
</body>
</html>