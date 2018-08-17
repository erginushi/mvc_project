<?php
include 'connectdb.php';

$con=connectdb::connect();

class Model{
	public function exists()
	{
		$email=$_REQUEST['email'];
		$sql="SELECT email,password,name,surname,active FROM users WHERE email='$email'";
		global $con;
		$result=$con->query($sql);
		if($result->num_rows>0)
			return 1;
		return 2
	}
	public function login()
	{
		if (isset($_REQUEST['email'])&&isset($_REQUEST['password'])) {
			;
		}
		return 3;
	}
	public function register()
	{
		if (isset($_REQUEST['name'])&&isset($_REQUEST['surname'])&&isset($_REQUEST['email'])&&isset($_REQUEST['name'])) {
			# code...
		}
	}
}

?>