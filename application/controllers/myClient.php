<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author user
 *
 */
class MyClient extends CI_Controller {

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
		$this->load->model('Client', 'cl');
		$this->cl->getName();
		
		$cl_list = $this->cl->getAllClientListInArray();
		
//  		var_dump($cl_list);
		
// 		$data = array(
// 				'title' => 'Hello!',
// 		);
// 		$data = array(
// 				'title' => "Hello!",
// 				'comp_tree' => array(
// 						array("comp_name" => "hoge"),
// 						array("comp_name" => "poyo"),
// 						array("comp_name" => "niko")				
// 						)
// 		);
		$data = array(
				'title' => "Hello!",
				'comp_tree' => $cl_list;
		);
		$this->next($data);
	}
	

	/**
	 *
	 */
	public function next($data){
		// user parse library  http://codeigniter.jp/user_guide_ja/libraries/parser.html
		$this->load->library('parser');

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		// set params
		$this->parser->parse('container/client', $data);
		$this->load->view('template/footer');
	}
}
