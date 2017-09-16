<html>
	<head>
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
	<?php include "head.php"; ?>
	</head>
	<body class = "">
		<form class = "container" method = "post" action = "../Scripts/accountManager.php">
			<div>
				<label>Name</label>
				<input type = "text" name  = "name" placeholder = "name" required>
				<label>Email</label>
				<input type = "text" name  = "email" placeholder = "email" required>
				<label>Password</label>
				<input type = "password" name = "password" placeholder = "password" rewuired>
				<label>Confirm</label>
				<input type = "password" name = "confirm" placeholder = "confirm" rewuired>
			</div>
			<div>
				<button type = "submit" name = "register">SignUp</button>
			</div>
		</form>
	</body>
	<script type="text/javascript" href = "../js/materialize.min.js"></script>
</html>