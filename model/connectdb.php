<?php

class connectdb{
	public function connect()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "taleas";
		$con = mysqli_connect($servername, $username, $password, $dbname);
		return $con;
	}
}

?>