<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author user
 *
 * Client class
 */
class Cl extends CI_Controller {

	/**
	 * @var unknown_type
	 */
	private $viewparams_ = [];


	/**
	 *
	 */
	public function __construct() {
		parent::__construct();

		$this->Debug('start top');

		// loading
		$this->load->model('db/Client_model' ,'cl');
		$this->load->model('db/Project_model' ,'pr');
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
	private function setViewParams($part ,$data) {

		if(array_key_exists($part, $this->viewparams_)) {
			$this->viewparams_[$part] += $data ;
		} else {
			$this->viewparams_ += array($part =>$data);;
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
		$this->pro_list();
	}
	
	
	/**
	 * @param unknown_type $cl_id
	 */
	public function pro_list($cl_id = NULL) {
		if(!is_null($cl_id) && is_numeric($cl_id)) {
			$dummy_cl_id ="CL13120157";
			$cl_id = $dummy_cl_id;
		
			$cl_info = $this->cl->findById($cl_id);
				
			$cl_info = array(
					'cl_name' => $cl_info->name
					,'link' => $cl_info->hp
					,'address' => $cl_info->address
					,'owner' => $cl_info->owner
					,'pr_list' => $this->cl->findJoinedProjectByIdForClientPage($cl_id)
			);
		
		} else {
				
			$cl_dummy_info = array(
					'cl_name' => '-'
					,'link' => ''  //TODO add  $cl_info->url
					,'address' => '-'
					,'owner' => '-'
					,'pr_list' =>array(
							array(
									'pr_id' => ''
									,'pr_name' => '-'
									,'pr_status' => '-'
									,'pre_start_date' => '-'
									,'start_date' => '-'
									,'error_count' => '-'
							))
			);
		
			$cl_info = $cl_dummy_info;
		}
		
		$this->setViewParams('main', $cl_info);
		$this->show();
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
				"main" => $this->parser->parse('container/vw_client' ,$this->viewparams_['main']),
				// 				"main" => $this->load->view('container/vw_client'),
				"footer"  => $this->parser->parse('template/vw_footer'  ,$this->viewparams_['footer'])
		);

		$this->load->view('layout',$parts,TRUE);
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