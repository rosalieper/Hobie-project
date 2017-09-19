<? require_once('../Scripts/user.php');

//logining the user in
if( isset($_POST['login']) ){
	$user = new user($_POST['email']);
	$user->login($_POST['password']);
}

//signup the user
else if( isset($_POST['register']) ){
	$user = new user($_POST['email']);
	$user->signup($_POST['name'], $_POST['password'], $_POST['confirm']);
}

else{
	echo "Error2";
}
?>