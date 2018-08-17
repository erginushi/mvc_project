<?php

require_once('model/models.php');

class Controller{
	public $model;

	public function __construct()
	{
		$this->model = new Model();
	}

	public function login()
	{
		$gjendet=$this->model->login();
		if($gjendet==1)
			include 'view/loggedin.php';
		else if($gjendet==2)
			include 'view/notloggedin.php';
		else
			include 'view/login.php';
	}
}

?>