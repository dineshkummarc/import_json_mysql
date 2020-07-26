<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Simple Import JSON File Using PDO</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-5">
			<form method="POST" action="upload.php" enctype="multipart/form-data">
				<div class="form-group">
					<input type="file" name="filename" class="form-control"/>
				</div>
				<div class="form-group">
					<button name="upload" class="btn btn-primary form-control"><span class="glyphicon glyphicon-upload"></span> Upload</button>
				</div>
			</form>
		</div>
		<div class="col-md-7">
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Gender</th>
						<th>Address</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require 'conn.php';
						$query = $conn->prepare("SELECT * FROM `member`");
						$query->execute();
						while($fetch = $query->fetch()){
					?>
					<tr>
						<td><?php echo $fetch['firstname']?></td>
						<td><?php echo $fetch['lastname']?></td>
						<td><?php echo $fetch['gender']?></td>
						<td><?php echo $fetch['address']?></td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>