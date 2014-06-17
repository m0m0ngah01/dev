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


	public function getClientListJoinedProject() {
		
		$this->db->select('
				cl.client_id as cl_id
				,cl.name as name
				,pj.project_id as p_id
				,pj.project_name as p_name');

		$this->db->from('client cl');
		$this->db->join('project pj', 'cl.client_id = pj.client_id' ,'left');
		$this->db->order_by('cl.client_id', 'asc');
		
		$ret = $this->db->get();
		
		if(!$ret) {
			exit($this->db->erroinfo());
		}
		return $ret->result_array();
	}
}
