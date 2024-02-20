<?php

require_once BASEPATH.'core/CodeIgniter.php';

class BaseController extends CI_Controller {

	protected $user;

	public function __construct()
	{
		parent::__construct();

		$acceptedPages =[
			'/login',
			'/screen',
			'/test'
		];

		/*
		echo "<PRE>";
		var_dump($_SERVER['REQUEST_URI']);
		echo "</PRE>";
		*/

		if (in_array($_SERVER['REQUEST_URI'], $acceptedPages)){
			return;
		}

		$userModel = new UserModel();
		$this->user = $userModel->get();

		if (!$this->user){
			$this->redirect('\login');
		}

	}

	public function redirect($to)
	{
		header('Location: ' . $to);
		exit;
	}

	public function isPost()
	{
		return !empty($_POST);
	}
}
