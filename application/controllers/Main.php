<?php

class Main extends BaseController {

	public function index()
	{
		die(__METHOD__);
	}

	public function screen()
	{

		if ($_POST){
			$data = $_POST;

			$sql = "SELECT * FROM screens WHERE width = {$data['width']} AND height = {$data['height']}";
			$query = $this->db->query($sql);

			if ($query->result()){
				$sql = "UPDATE screens 
					SET 
					    count = count + 1 
					WHERE width = {$data['width']} AND height = {$data['height']}";
			} else {
				$sql = "INSERT INTO screens 
					SET 
						width = {$data['width']},
					    height = {$data['height']},
					    system = '{$data['system']}',
					    count = 1";
			}

			$this->db->query($sql);
			die();
		}

		$sql = "SELECT * FROM screens ORDER BY count DESC LIMIT 10";
		$query = $this->db->query($sql);

		$data['sizes'] = $query->result();

		$this->load->view('screen', ['data' => $data]);
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
