 <?php
class Connection {

	public $servername = "localhost";
	public $dbusername = "root";
	public $dbpassword = "root";
	public $dbname = "Stack";

// Create connection
	function connect(){
		$conn = new mysqli($this->servername, $this->dbusername, $this->dbpassword, $this->dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected successfully";
		return $conn;
	}
}
?> 
