<?php 
/**
 * @author user
 *
 */
class Project_model extends MY_Model {
	
	/**
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
	}

	
	/**
	 * @param unknown_type $id
	 */
	public function findById($id) {
		$this->db->select('
				 pr.project_id as pr_id
				,pr.project_name as name
				,pr.status 
				,pr.pre_start_date as pre_start
				,pr.pre_end_date as pre_end
				,pr.start_date as start
				,pr.end_date as end
				,pr.way 
				,pr.view_count 
				,pr.client_owner as owner
				,pr.owner as executor
				,pr.url 
				,pr.connect_ip 
				,pr.location  
				,pr.review'
		);
		//
		$this->db->from('project pr');
		$this->db->where( array('pr.project_id =' => $id ));
	
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
	private function findJoinedAllClientForTopMenue() {
		$this->db->select('
				pj.project_id as p_id
				,pj.project_name as p_name
 				,pj.status as status_code
				,ps.name as status
				,pj.pre_start_date as pre_start_date
				,pj.pre_end_date as pre_end_date
				,pj.start_date as start_date
				,pj.end_date as end_date
				');

		$this->db->from('project pj');
		$this->db->join('project_status ps', 'pj.status = ps.code' ,'left');

	}
	
	/**
	 *
	 */
	public function countRowsJoinedClientForTopMenue() {
		$this ->findJoinedAllClientForTopMenue();
		return $this->db->count_all_results();
	}
	

	/**
	 * @param unknown_type $num
	 * @param unknown_type $offset
	 */
	public function findLimitAllListForTopMenue($num ,$offset = 0) {
		$this ->findJoinedAllClientForTopMenue();
		$this->db->limit($num ,$offset);
		
		$ret = $this->db->get();
		
		if(!$ret) {
			exit($this->db->erroinfo());
		}
		
		return $ret->result_object();
	}
}
