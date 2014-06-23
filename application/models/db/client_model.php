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
	 * @param unknown_type $id
	 */
	public function findById($id) {
		$this->db->select('
				cl.client_id as cl_id
				,cl.name as name
				,cl.address1 as address
				,cl.owner as owner
				,"http://www.google.com" as hp '  //TODO modify me				
				);
		//
		$this->db->from('client cl');
		$this->db->where( array('cl.client_id =' => $id ));
		
		
		$ret = $this->db->get();
		
		if(!$ret) {
			exit($this->db->erroinfo());
		}
		
		if($ret ->num_rows() !== 1 ) {
			exit($this->db->erroinfo());
		}
		
		return $ret->first_row();
	}
	
	
	/**
	 *
	 */
	public function findAllListJoinedProject() {
	
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
	
	
	/**
	 * @param unknown_type $id
	 */
	public function findJoinedProjectByIdForClientPage($id) {

		$this->db->select('
				 cl.client_id as cl_id
				,cl.name as name
				,pj.project_id as pr_id
				,pj.project_name as pr_name
				,pj.status as pr_status
				,pj.pre_start_date as pre_start_date
				,pj.start_date as start_date
				,10 as error_count'  //TODO error count
				);
		
		$this->db->from('client cl');
		$this->db->join('project pj', 'cl.client_id = pj.client_id' ,'left');
		$this->db->where( array('cl.client_id =' => $id ));
		$this->db->order_by('pj.project_id', 'asc');
		
		
		$ret = $this->db->get();
		
		if(!$ret) {
			exit($this->db->erroinfo());
		}
		return $ret->result_array();
	}
	
}
