<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author user
 *
 * 
 */
class Test extends CI_Controller {

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
		$test= array('first' => 'Lincoln', 'last' => 'Nebraska');
		if(is_array($test))
		{
// 			$this-> enableModelClass();	
// 			$this->load->view('info');
			$vw_params = array(
					"first" => "test",
					"last" => "OK!",
			);
// 			$this->load->view('my_action', $vw_params);
			$this->load->view('m_index', $vw_params);				
		}
		else 
		{
			$this->load->view('welcome_message');
		}
	}
	
	
	
	public function view() {
		
		$vw_params = array(
				"first" => "test",
				"last" => "OK!",
				);
		$this->load->view('my_action', $vw_params);
	}
	
	
	private function enableModelClass() {
		
		$this->load->model('Item', 'user');
		
		$firstname = 'taro';
		
		if ($name = $this->user->getNameJa($firstname)) {
			return '名前= ' . $name."</br>";
		}
		
		return FALSE;
	}
	
	/**
	 * @param unknown_type $id
	 * @param unknown_type $pass
	 */
	public function search($id="test" , $pass="pass") {
		if($id==="test") {
			$this->load->view('info');
		}else {
		    $this->load->view('welcome_message');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */