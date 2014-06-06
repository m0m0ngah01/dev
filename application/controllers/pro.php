<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author user
 *
 */
class Pro extends CI_Controller {

	
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
		$this->Debug('start profile');
		
		$this->load->model('db/Client_model', 'cl');
		$cl_list = $this->cl->getClientListJoinedProject();
		
		$data = array(
				'cl_tree' => $cl_list,
				'comp_tree' => $cl_list
		);
		$this->show($data);
	}
	


	/**
	 * @param unknown_type $data
	 * 
	 * user parse library  http://codeigniter.jp/user_guide_ja/libraries/parser.html
	 * 
	 */
	public function show($data){
		$this->load->library('parser');

		$parts = array(
				"header" => $this->load->view('template/vw_header'),
				"sidebar" => $this->parser->parse('template/vw_sidebar',$data),
// 				"sidebar" => $this->load->view('template/vw_sidebar'),
				"main" => $this->parser->parse('container/vw_profile', $data),// set params
				"footer" => $this->load->view('template/vw_footer')
		);
		
		$this->load->view('layout',$parts,TRUE);
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