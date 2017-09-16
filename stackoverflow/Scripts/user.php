<?php include "../dbConfig/connect.php"; ?>
<?php

//session_start();

/*This is the user class and has all user functions on the system like login, signup etc...*/

class User extends Connection{ 
	
	Public $email;
	Public $passwd;
	Public $username;
	Public $confirm;
	Public $status;
	Public $userid;

//constructor of user
	function __construct($uemail){
		$this->email = $uemail;
	}

//login functions checks and logs the user in the site
	public function login($password){
		$login;
		$sql = "SELECT * FROM user WHERE email=\"$this->email\" and password=\"$password\"";
		$result = mysqli_query($sql);
			if(mysql_num_rows($result)>0){
				$login = 'true';
			}
			else{
				echo "<p class = ''>Wrong credentials or account not found</p>";
				header('../index.php');
			}
	}

//signup function creates a user account on the site
	public function signup($passwd, $confirm){
		if ($passwd == $confirm){
			$sql = "SELECT * FROM Users WHERE email=\"$this->email\"";
			$result = mysql_query($sql);
			if(mysql_num_rows($result)<1){
				$sql = "INSERT INTO user(email, name, password, status, num_follower, num_following) VALUES 
				($this->email, $this->username, $passwd, 0, 0, 0)";
			}
			else{
				echo "<p class = \"email\">Email already in use please try with another</p>";
			}
		}
	}

// to be continued : Register class, Connection handler, Insert post, PageUser, login :)
}