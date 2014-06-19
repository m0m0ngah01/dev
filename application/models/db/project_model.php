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

// 		$ret = $this->db->get();
		
// 		if(!$ret) {
// 			exit($this->db->erroinfo());
// 		}
// 		return $ret;
	}
	
	/**
	 *
	 */
	public function findTotalRowsForTopMenue() {
		$this ->findJoinedAllClientForTopMenue();
		return $this->db->count_all_results();
	}
	
// 	/**
// 	 *
// 	 */
// 	public function findAllListForTopMenue() {
// 		$this ->findJoinedAllClientForTopMenue();
		
// 		$ret = $this->db->get();
		
// 		if(!$ret) {
// 			exit($this->db->erroinfo());
// 		}
		
// 		return $ret->result_object();
// 	}
	
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
