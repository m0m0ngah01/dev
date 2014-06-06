<?php 
/**
 * @author user
 *
 */
class Client_model extends MY_Model {
	
//  sample
// 	public $name;
// 	public $address;
	
	public function __construct()
	{
		parent::__construct();
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
	
	public function getClientListJoinedProject() {
		$ret = $this->db->query("select 
  cl.client_id,
  cl.name as name,
  pj.project_name as p_name
  from client cl 
left join project pj on cl.client_id = pj.client_id 
order by cl.client_id asc");
		
		if(!$ret) {
			exit($this->db->erroinfo());
		}
		return $ret->result_array();
		
	}
	
	
}
