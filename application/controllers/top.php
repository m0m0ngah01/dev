<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author user
 *
 */
class Top extends CI_Controller {

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
		$this->page(0);
	}
	

	/**
	 * @param unknown_type $_offset_
	 */
	public function page($_offset_ = 0) {
		$ROWS_PER_PAGE = 5;
		$offset        = 0;
		$total_rows    = $this->pr->countRowsJoinedClientForTopMenue();

		if(is_numeric($_offset_)
				&& $_offset_ <= ($total_rows/$ROWS_PER_PAGE)) {

			$offset = $_offset_;
		}

		$pr_list = $this->pr->findLimitAllListForTopMenue($ROWS_PER_PAGE ,$offset);
		$this->setViewParams('main', array('pr_list' => $pr_list,));

		// setting pagenation
		$config['base_url']         = base_url() .'top/page/';
		$config['total_rows']       = $total_rows;
		$config['per_page']         = $ROWS_PER_PAGE;
		$config['use_page_numbers'] = TRUE;
		$config['first_link']       = '<button class="btn btn-xs btn-primary"><i class="fa fa-backward"></i></button>';
		$config['prev_link']       = '<button class="btn btn-xs btn-primary"><i class="fa fa-caret-left"></i></button>';
		$config['next_link']       = '<button class="btn btn-xs btn-primary"><i class="fa fa-caret-right"></i></button>';
		$config['last_link']       = '<button class="btn btn-xs btn-primary"><i class="fa fa-forward"></i></button>';
		
		$this->pagination->initialize($config);

		$this->setViewParams('main', array('pagination' => $this->pagination->create_links()));

		// 		var_dump($main);
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
				"main"    => $this->parser->parse('container/vw_top'    ,$this->viewparams_['main']),// set params
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