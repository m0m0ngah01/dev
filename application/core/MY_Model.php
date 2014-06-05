<?php 
/**
 * @author user
 *
 */
class MY_Model extends CI_Model {

	protected $_table;

	/**
	 *
	 */
	public function __construct()
	{
		parent::__construct();
		$this-> init_connect();

		$DELIMITER="_";
		$clazz = get_class($this);
		$this->_table = strtolower(substr($clazz,0, strpos($clazz, $DELIMITER)));
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
	protected function findAll() {
		try {
			$ret = $this->db->get($this->_table);

			if(!$ret) {
				exit($this->db->erroinfo());
			}
			return $ret;
		} catch (PDOException $e) {
			echo $e -> getMessage();
			die();
		}
	}

	/**
	 * @return boolean
	 */
	public function insert() {
		try {
			// sample
			$now = date('Y-m-d H:i:s');
			$this->db ->set(array(
					'upd_time' => $now,
			));

			$ret = $this->db->insert($this->_table.$this);

			if($ret === FALSE) {
				return FALSE;
			}
			return $this -> db -> insert_id();
		} catch (PDOException $e) {
			echo $e -> getMessage();
			die();
		}
	}

	/**
	 * @param unknown_type $id
	 * @param unknown_type $data
	 * @return boolean
	 */
	public function update($id ,$data = NULL) {
		try {
			if($data === NULL) {
				$data = $this;
			}
			$ret = $this -> db ->update($this->_table, $data ,array('id' => $id));

			if($ret === FALSE) {
				return FALSE;
			}
		} catch (PDOException $e) {
			echo $e -> getMessage();
			die();
		}
	}

	/**
	 * @param unknown_type $id
	 */
	public function delete($id) {
		try {
			$this-> db -> delete($this->_table, array('id' =>  $id));
		} catch (PDOException $e) {
			echo $e -> getMessage();
			die();
		}
	}
}

