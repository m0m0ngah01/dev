<?php 
/**
 * @author user
 *
 */
class Client extends CI_Model {

	protected $_table_name;

	public function __construct()
	{
		parent::__construct();
		$this->_table_name = "Client";
		$this->init_connect();
	}

	/**
	 *
	 */
	private function init_connect() {

		try {
			$this->load->database();

			if ($this->db->conn_id === FALSE)
			{
				echo "データベースに接続されていません。";
				die();
			}
		} catch (PDOException $e) {
			echo $e -> getMessage();
			die();
		}

	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->_table_name;
	}


	/**
	 *
	 */
	public function getAllClientListInObject(){
		try {
			$stmt = $this->selectAll();
			return $stmt->result('object');
		} catch (PDOException $e) {
			echo $e -> getMessage();
			die();
		}
	}

	/**
	 *
	 */
	private function selectAll() {
		$stmt = $this->db->query('SELECT * FROM item');

		if(!$stmt) {
			exit($this->db->erroinfo());
		}
		return $stmt;
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */