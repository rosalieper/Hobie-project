 <?php
class Connection {

	public $servername = "localhost";
	public $dbusername = "root";
	public $dbpassword = "";
	public $dbname = "stack";

// Create connection
	function connect(){
		$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected successfully";
	}
}
?> 
