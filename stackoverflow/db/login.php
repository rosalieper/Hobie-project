<?php

session_start();

include("ConnectionHandlers.php");

class LogIn extends Connection {
	private $username;
	private $password;

	function __construct($username, $password){
		$this->username = $username;
		$this->password = $password;
	}

	public function login($username, $password){
		$log = "SELECT * FROM Users WHERE Username=\"$username\" and Password=\"$password\"";
			$rs=mysql_query($log);
			$track = $rs;
			if(mysql_num_rows($rs)<1)
			{

			}
			else
			{
				//session_start();
				require_once("../LoginForm/PageUser.php");
				$_SESSION['username'] = $_POST['username'];
				while($result = mysql_fetch_array($track)){
					$_SESSION['id'] = $result['UserID'];
				}
				header("Location: index1.php?forum=Forum");
			}
		}
}

/*class SignUp extends ConnectionHandlers {

}*/


?>