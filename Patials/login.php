<html>
	<head>
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
	<?php include "head.php"; ?>
	</head>
	<body class = "">
		<form class = "container" method = "post" action = "../Scripts/accountManager.php">
			<div>
				<label>Email</label>
				<input type = "text" name  = "email" placeholder = "email" required>
				<label>Password</label>
				<input type = "password" name = "password" placeholder = "password" required>
				<p><a href="forgotpass.php">Forgot password??</a></p>
			</div></br>
			<div>
				<button class = "btn btn-primary" type = "submit" name = "login">Login</button>
			</div>
		</form>
	</body>
	<script type="text/javascript" href = "../js/materialize.min.js"></script>
</html>
