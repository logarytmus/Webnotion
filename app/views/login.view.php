<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/styles.css"/>
	<title>Webnotion-zadanie</title>
</head>
<body>
<h1 class="text-center">Login</h1>

<div class="container">
	<div class="row">
		<div class="center-block col-md-4 well" style="float:none">
			<form method="POST" action="/logged">
			<input type="text" name='email'  placeholder='Email Address' class="form-control"/><br>
			<input type="text" name='password'  placeholder='Password' class="form-control"/><br>
			<button type="submit" class="btn btn-success btn-lg ">SIGN IN</button><br>
			</form>
		</div>
	</div>
</div>
</body>
</html>