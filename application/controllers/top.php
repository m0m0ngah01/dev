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
		$cl_list = $this->cl->getClientListJoinedProject();
		$cl_tree = $this -> makeProLi($cl_list);
		$this->setViewParams('sidebar', array('cl_tree' => $cl_tree,));

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
		$this->test(0);
	}

	public function test($_offset_ = 0) {
		$ROWS_PER_PAGE = 5;
		$offset        = 0;
		$total_rows    = $this->pr->findTotalRowsForTopMenue();

		if(is_numeric($_offset_)
				&& $offset <= ($total_rows/$ROWS_PER_PAGE)) {

			$offset = $_offset_;
		}

		$pr_list = $this->pr->findLimitAllListForTopMenue($ROWS_PER_PAGE ,$offset);
		$this->setViewParams('main', array('pr_list' => $pr_list,));

		// setting pagenation
		$config['base_url']         = 'http://192.168.10.77/mngtool/top/test/';
		$config['total_rows']       = $total_rows;
		$config['per_page']         = $ROWS_PER_PAGE;
		$config['use_page_numbers'] = TRUE;
// 		$config['first_link']       = '';
		$this->pagination->initialize($config);

		$this->setViewParams('main', array('pagination' => $this->pagination->create_links()));

		// 		var_dump($main);
		$this->show();
		
	}

	/**
	 * @param unknown_type $list
	 * @return unknown|Ambigous <multitype:, string>
	 */
	private function makeProLi($list) {
		if( !is_array($list)) {
			return $list;
		}

		$li_ = [];
		foreach ($list as $index => $arr) {

			$cl_id = $arr['cl_id'];
			if( !array_key_exists( $cl_id , $li_ )) {
				$li_ += array(
						$cl_id =>  array(
								'cl_id' => $arr['cl_id'],
								'name' => $arr['name'],
								'p_list' => $this -> makeSubLi($arr)
						));
			} else {
				$li_[$cl_id]['p_list'] .= $this -> makeSubLi($arr);
			}
		}

		$ul_ = NULL;
		foreach ($li_ as $key => $val) {
			$ul_ .= $this -> makeProUl($val);
		}

		return $ul_;
	}


	/**
	 * @param unknown_type $arr
	 * @return Ambigous <string, mixed>
	 */
	private function makeProUl($arr) {


		$temp = '<li class="treeview"><a href="{cl_id}">
		<span>{name}</span> <i class="fa fa-angle-left pull-right"></i>
		</a><ul class="treeview-menu">{p_list}</ul></li>';


		if(array_key_exists('cl_id', $arr)) {
			$temp = str_replace('{cl_id}',  $arr['cl_id'] , $temp);
		}

		if(array_key_exists('name', $arr)) {
			$temp = str_replace('{name}',  $arr['name'] , $temp);
		}

		if(array_key_exists('p_list', $arr)) {
			$temp = str_replace('{p_list}',  $arr['p_list'] , $temp);
		}

		return $temp;
	}

	/**
	 * @param unknown_type $pro
	 * @return string
	 */
	private function makeSubLi($pro) {

		$li = '<li><a href="top/{p_id}"><span>{p_name}</span> <i class="fa fa-angle-left pull-right"></i></a></li>' ;

		if(array_key_exists('p_name', $pro)) {
			$li = str_replace('{p_name}',  $pro['p_name'] , $li);
		}

		if(array_key_exists('p_id', $pro)) {
			$li = str_replace('{p_id}',  $pro['p_id'] , $li);
		}

		return $li;
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