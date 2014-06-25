<?php 
/**
 * @author user
 *
 */
class Project_detail_model extends MY_Model {
	
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
// 		$this->db->select('
// 				 pr.project_id as pr_id
// 				,pr.project_name as name
// 				,pr.pre_start_date as pre_start
// 				,pr.pre_end_date as pre_end
// 				,pr.start_date as start
// 				,pr.end_date as end
// 				,pr.owner as owner
// 				,"http://www.google.com" as url '  //TODO modify me
// 		);
// 		//
// 		$this->db->from('project pr');
// 		$this->db->where( array('pr.project_id =' => $id ));
	
// 		$ret = $this->db->get();
	
// 		if(!$ret) {
// 			exit($this->db->erroinfo());
// 		}
	
// 		if($ret ->num_rows() !== 1 ) {
// 			exit($this->db->erroinfo());
// 		}
	
// 		return $ret->first_row();
	}
	
	
	/**
	 * 
	 */
	private function findListJoinedProject() {
		$this->db->select('
				 pd.project_detail_id as sub_id
				,pd.name as sub_name
				,pj.pre_start_date as pre_start_date
				,pj.pre_end_date as pre_end_date
				,pj.start_date as start_date
				,pj.end_date as end_date
				');

		$this->db->from('project_detail pd');
		$this->db->join('project pj', 'pd.project_id = pj.project_id' ,'left');
	}
	
	
	private function findListJoinedProjectWhereProjectId($id) {
		$this ->findListJoinedProject();
		$this->db->where( array('pd.project_id =' => $id ));
	}
	
	
	/**
	 * @param unknown_type $id
	 */
	public function countRowsJoinedProjectByProjectId($id){
		$this ->findListJoinedProjectWhereProjectId($id);
		return $this->db->count_all_results();
	}
	
	
	/**
	 *
	 */
	public function findListJoinedProjectByProjectId($id) {
		$this ->findListJoinedProjectWhereProjectId($id);
		$ret = $this->db->get();
		
		if(!$ret) {
			exit($this->db->erroinfo());
		}
		
		return $ret->result_object();
	}

	
	/**
	 * @param unknown_type $limit
	 * @param unknown_type $offset
	 */
	public function findLimitJoinedProjectWithOffset($id, $limit ,$offset = 0) {
		$this ->findListJoinedProjectWhereProjectId($id);
		$this->db->limit($limit ,$offset);
		
		$ret = $this->db->get();
		
		if(!$ret) {
			exit($this->db->erroinfo());
		}
		
		return $ret->result_object();
	}
}
