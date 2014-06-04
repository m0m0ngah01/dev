<?php 
/**
 * @author user
 *
 */
class Client extends CI_Model {

	protected $_table;

	public function __construct()
	{
		parent::__construct();
		$this->_table = "client";
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
		return $this->_table;
	}


	/**
	 *
	 */
	public function getAllClientListInObject(){
		try {
			$ret = $this->findAll();
			return $ret->result('object');
		} catch (PDOException $e) {
			echo $e -> getMessage();
			die();
		}
	}
	
	
	/**
	 * 
	 */
	public function getAllClientListInArray(){
		try {
			$ret = $this->findAll();
			return $ret->result();
		} catch (PDOException $e) {
			echo $e -> getMessage();
			die();
		}
	}
	

	/**
	 *
	 */
	private function findAll() {
		$ret = $this->db->get($this->_table);

		if(!$ret) {
			exit($this->db->erroinfo());
		}
		return $ret;
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */