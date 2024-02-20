<?php

class Auth extends BaseController {

	public function login()
	{
		/*
		echo "<PRE>";
		var_dump($this->isPost());
		echo "</PRE>";
		*/

		$this->load->view('login', []);

		/*
		$user = new UserModel();
		$user->get();

		echo "<PRE>";
		var_dump($user);
		echo "</PRE>";
		*/
	}

	public function logout()
	{
		$this->session->token = null;
		$this->redirect('\login');
	}


}
