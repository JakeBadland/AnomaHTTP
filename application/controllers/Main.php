<?php

require_once 'Base.php';

class Main extends CI_Controller {

	public function index()
	{
		die('index');
	}

	public function screen()
	{
		if ($this->input->method() == 'post'){
			$data = $this->input->post();

			$sql = "SELECT * FROM screens WHERE width = {$data['width']} AND height = {$data['height']}";
			$query = $this->db->query($sql);

			if ($query->result()){
				$sql = "UPDATE screens SET count = count + 1 WHERE width = {$data['width']} AND height = {$data['height']}";
			} else {
				$sql = "INSERT INTO screens SET width = {$data['width']}, height = {$data['height']}, count = 1";
			}

			$this->db->query($sql);
		}

		$this->load->view('screen');
	}

	public function dbTest()
	{
		echo "<PRE>";
		var_dump('dbTest');
		echo "</PRE>";
		$sql = "SELECT * FROM test";
		$query = $this->db->query($sql);

		echo "<PRE>";
		var_dump($query->result());
		echo "</PRE>";

		foreach ($query->result() as $item){
			echo "<PRE>";
			var_dump($item);
			echo "</PRE>";
		}
	}
}
