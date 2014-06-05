<?php 
/**
 * @author user
 *
 */
// class Client extends CI_Model {
class Client extends MY_Model {
	
//  sample
// 	public $name;
// 	public $address;
	
	public function __construct()
	{
		parent::__construct();
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
	public function getAllClientListInArray(){
		$ret = $this->findAll();
		return $ret->result_array();
	}


	/**
	 *
	 */
	public function getAllClientListInObject(){
		$ret = $this->findAll();
		return $ret->result_object();
	}

	
// 	/**
// 	 *
// 	 */
// 	private function findAll() {
// 		try {
// 			$ret = $this->db->get($this->_table);

// 			if(!$ret) {
// 				exit($this->db->erroinfo());
// 			}
// 			return $ret;
// 		} catch (PDOException $e) {
// 			echo $e -> getMessage();
// 			die();
// 		}
// 	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */