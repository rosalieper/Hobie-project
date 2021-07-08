<html>
	<head>
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<?php include "head.php"; ?>
	<script type="text/javascript">
//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
</script>
<!-- link to external stylesheet -->
<link rel= "stylesheet" type ="text/css" href="CSS/login.css"

	</head>
	<body class = "">
		<form class="form-style-7" method = "post" action = "../Scripts/accountManager.php">
		<h1>Fill Form To Login</h1>
		<ul>
			<li>
			    <label for="email">Email</label>
			    <input type="email" name="email" maxlength="100" required>
			    <span>Enter a valid email address</span>
			</li>
			<li>
			    <label for="password">Password</label>
			    <input type="password" name="Password" maxlength="100" required>
			    <span>Enter your password please</span>
			</li>
			<li>
			    <input type="submit" value="Login" class="btn btn-primary" >
			</li>
		</ul>
		</form>
	</body>
	<script type="text/javascript" href = "../js/materialize.min.js"></script>
</html>







<!--form class = "container" method = "post" action = "../Scripts/accountManager.php">
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
