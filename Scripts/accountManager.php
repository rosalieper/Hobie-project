<? require_once('../Scripts/user.php');

//logining the user in
if( isset($_POST['login']) ){
	$user = new user($_POST['email']);
	$login = $user->login($_POST['password']);
	if($login){
		header('location: ../Patials/userpage.php');
	}
	else{
		echo 'not login';
	}
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