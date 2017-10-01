<?php include "../dbConfig/connect.php"; ?>
<?php

//session_start();

/*This is the user class and has all user functions on the system like login, signup etc...*/

class User extends Connection{ 
	
	private $email;
	private $passwd;
	private $username;
	private $confirm;
	private $status;
	private $userid;

//constructor of user
	function __construct($uemail){
		$this->email = $uemail;
	}

//login functions checks and logs the user in the site
	public function login($password){
		$con = new Connection();
		$conn = $con->connect();
		$login = 'false';

		$sql = "SELECT * FROM user WHERE email='$this->email' and password='$password'";
		$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				return $login = 'true';
			}
			else{
				return $login = 'false';
			}
	}

//signup function creates a user account on the site
	public function signup($username, $passwd, $confirm){
		$con = new Connection();
		$conn = $con->connect();
		if ($passwd == $confirm){
			$sql = "SELECT * FROM user WHERE email='$this->email'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)<1){
				$sql = "INSERT INTO user(email, name, password, status, num_follower, num_following) VALUES 
				('$this->email', '$username', '$passwd', 0, 0, 0)";
				if(mysqli_query($conn, $sql)) header("../Patials/userpage.php");
			}
			else{
				echo "<p class = \"email\">Email already in use please try with another</p>";
			}
		}
	}

	public function create_post(string $post){

	}

	public function delete_post(){

	}
	public function edit_post(){

	}
	public function comment_post(){
		
	}

// to be continued : Register class, Connection handler, Insert post, PageUser, login :)
}