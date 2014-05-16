<?php 

/**
 * @author user
 *
 */
class Client extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		
		try {
			$this->load->database();
			
			if ($this->db->conn_id === FALSE)
			{
				echo "データベースに接続されていません。";
			}
			else
			{
				$stmt = $this->db->query('SELECT * FROM hoge');
			}
			
			if(!$stmt) {
				exit($this->db->erroinfo());
			}
			
			$result = $stmt->result('object');
			
			//var_dump($stmt);

			echo 1333;
			
			echo $stmt->num_rows();
			
			/*
			foreach ($stmt-> first_row() as $r) {
				echo $r;
			}
			foreach ($result as $r) {
				echo $r->name;
				echo $r->client_id;
			}
			*/
			
		}catch (PDOException $e) {
			
			echo $e -> getMessage();
			die();
		}
	}
	
	public function getAllById() {
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */