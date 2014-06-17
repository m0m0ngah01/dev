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
	 * 
	 */
	public function getTotalRowsForTopMenue() {
		$ret = $this ->findJoinedAllClientForTopMenue();

		if(!$ret) {
			exit($this->db->erroinfo());
		}
		return $ret->num_rows();
	}

	/**
	 * 
	 */
	public function getAllListForTopMenue() {
		$ret = $this ->findJoinedAllClientForTopMenue();
		
		if(!$ret) {
			exit($this->db->erroinfo());
		}
		return $ret->result_object();
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

		return$this->db->get();
	}
	
}
