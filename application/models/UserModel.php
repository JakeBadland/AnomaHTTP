<?php

class UserModel extends BaseModel {

	public function get()
	{

		if (!$this->session->token){
			return false;
		}

		$sql = "SELECT * FROM users WHERE token = '{$this->session->token}'";
		$result = $this->db->query($sql);

		/*
		echo "<PRE>";
		var_dump($result);
		echo "</PRE>";


		die(__METHOD__);
		*/
	}

}
