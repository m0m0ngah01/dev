<?php 
/**
 * @author user
 *
 */
class Item extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->_names = array(
				'taro' => '太郎',
				'hanako' => '花子'
		);
		
		try {
			$this->load->database();
			
			if ($this->db->conn_id === FALSE)
			{
				echo "データベースに接続されていません。";
			}
			else
			{
				$stmt = $this->db->query('SELECT * FROM item');
			}
			
			if(!$stmt) {
				exit($this->db->erroinfo());
			}
			
			$result = $stmt->result('object');
			
			var_dump($stmt);

			//echo $stmt->num_rows();
			
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
	
	public function getNameJa($name)
	{
		if (isset($this->_names[$name])) {
			return $this->_names[$name];
		}
		return FALSE;
	}
	
	
	public function getName() {
		return "succeed!";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */