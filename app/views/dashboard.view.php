<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/public/css/styles.css"/>
	<title>Dashboard</title>
</head>
<body>
<h1 style="color: white" class="text-center">Dashboard</h1><br>
<div class="container">
<div class="row">
<div style="color: white; float:none" class="center-block text-center col-md-4">
<b>You are logged in as: </b><?= $data['name']; ?><br>
<b>Privileges: </b><?= $data['privilege']; ?>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="center-block text-center col-md-4" style="float: none">
<a href="logout" class="btn btn-info btn-lg" role="button">Logout</a>
</div>
</div>
</div> 
</body>
</html>