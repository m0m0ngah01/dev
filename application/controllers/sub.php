<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author user
 *
 */
class Sub extends CI_Controller {

	/**
	 * @var unknown_type
	 */
	private $viewparams_ = [];


	private $pro_id_;
	
	/**
	 *
	 */
	public function __construct() {
		parent::__construct();

		$this->Debug('start top');

		// loading
		$this->load->model('db/Client_model' ,'cl');
		$this->load->model('db/Project_model' ,'pr');
		$this->load->model('db/Project_detail_model' ,'pd');
		$this->load->library('pagination');

		// initializing
		$this->init();
	}


	/**
	 *
	 */
	private function init() {
		// set params
		$this->setViewParams('header' ,array('base_url' => base_url()));
		$this->setViewParams('footer' ,array('base_url' => base_url()));

		// collect client list
		$list = $this->cl->findAllListJoinedProject();
		$this->setViewParams('sidebar', array('cl_tree' => create_clinet_tree($list),));
	}


	/**
	 * @param unknown_type $key
	 * @param unknown_type $data
	 */
	private function setViewParams($key ,$data) {

		if(array_key_exists($key, $this->viewparams_)) {
			$this->viewparams_[$key] += $data ;
		} else {
			$this->viewparams_ += array($key =>$data);;
		}
	}


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->sub_list();
	}


	/**
	 * @param unknown_type $pro_id
	 */
// 	public function sub_list($pro_id = NULL) {
	public function sub_list($pro_id = NULL ,$_offset_ = 0) {
		
		$_SESSION['pro_id'] = "20131219PR1279";
		$this->pro_id_ = "20131219PR1279";
		

		if(!is_null($pro_id) ) {
			
			// valid
			$pro_id_ses = $this->getSessionID('pro_id');
			
			if($pro_id !== $pro_id_ses) {
				$pro_id ="20131219PR1279";
			}

			$db_info = $this->pr->findById($pro_id);
			
			$pro_info = array(
					 'pr_owner' => $db_info ->owner
					,'pr_name' => $db_info ->name
					,'url' => $db_info ->url
			);
		} else {

			$pro_dummy_info = array(
					 'pr_owner' => "TW"
					,'pr_name'  => "TW20140623.sinndann"
					,'pr_urls'  =>  array(
							array('url' => "http://192.168.10.77/mngtool/cl")
							,array('url' => "http://192.168.10.77/mngtool/cl")
							,array('url' => "http://192.168.10.77/mngtool/cl")
							,array('url' => "http://192.168.10.77/mngtool/cl")
							,array('url' => "http://192.168.10.77/mngtool/cl")
							,array('url' => "http://192.168.10.77/mngtool/cl")
					)
			);

			$pro_info = $pro_dummy_info;
		}

		$this-> setViewParams('main', $pro_info);
		
		$this->	set_vul_list($pro_id,$_offset_);
		
		$this-> show();
	}

	
	/**
	 * @param unknown_type $_offset_
	 */
	private function set_vul_list($pro_id ,$_offset_ = 0) {
		
		$ROWS_PER_PAGE = 5;
		$offset        = 0;
		$total_rows    = $this->pd->countRowsJoinedProjectByProjectId($pro_id);
	
		if(is_numeric($_offset_)
				&& $_offset_ <= ($total_rows/$ROWS_PER_PAGE)) {
	
			$offset = $_offset_;
		}
	
		$sub_list = $this->pd->findLimitJoinedProjectWithOffset($pro_id ,$ROWS_PER_PAGE ,$offset);
		$this->setViewParams('main', array('sub_list' => $sub_list,));
	
		// setting pagenation
		$config['base_url']         = base_url() .'pro/page/';
		$config['total_rows']       = $total_rows;
		$config['per_page']         = $ROWS_PER_PAGE;
		$config['use_page_numbers'] = TRUE;
		$config['first_link']       = '<button class="btn btn-xs btn-primary"><i class="fa fa-backward"></i></button>';
		$config['prev_link']       = '<button class="btn btn-xs btn-primary"><i class="fa fa-caret-left"></i></button>';
		$config['next_link']       = '<button class="btn btn-xs btn-primary"><i class="fa fa-caret-right"></i></button>';
		$config['last_link']       = '<button class="btn btn-xs btn-primary"><i class="fa fa-forward"></i></button>';
	
		$this->pagination->initialize($config);
		
		$this->setViewParams('main', array('pagination' => $this->pagination->create_links()));
	}
	
	
	/**
	 * @param unknown_type $data
	 *
	 * user parse library  http://codeigniter.jp/user_guide_ja/libraries/parser.html
	 *
	 */
	public function show(){
		$this->load->library('parser');

		$parts = array(
				"header"  => $this->parser->parse('template/vw_header'  ,$this->viewparams_['header']),
				"sidebar" => $this->parser->parse('template/vw_sidebar' ,$this->viewparams_['sidebar']),
				"main"    => $this->parser->parse('container/vw_sub'    ,$this->viewparams_['main']),
				"footer"  => $this->parser->parse('template/vw_footer'  ,$this->viewparams_['footer'])
		);

		$this->load->view('layout',$parts,TRUE);
	}

	
	private function getSessionID($key) {
		return $_SESSION[$key];
	}
	

	/**
	 * @param unknown_type $data
	 */
	private function showDump($data){
		var_dump($data);
	}


	/**
	 * @param unknown_type $msg
	 */
	private function Debug($msg) {
		log_message('hoge',$msg);
	}


	/**
	 *
	 */
	private function profileOn() {
		$this->output->enable_profiler(TRUE);
	}


	/**
	 *
	 */
	private function profileOff() {
		$this->output->enable_profiler(FALSE);
	}
}