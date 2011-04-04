<?php 

if (! defined('BASEPATH')) exit('No direct script access');

class Home extends CI_Controller {

	
	
	function index() {

		
		    echo "bob";
	   
		
	}
	
	
	function profile(){
		$this->load->helper('url');
		//$this->load->model('ion_auth_model', 'auth');
		$this->load->library('ion_auth');
	 	$userName = $this->uri->segment(1, 0);
		
		$data = array(
		               'username' => $this->uri->segment(1, 0)
		              
		          );
		
		
		
		
		if($this->ion_auth->get_user_by_username($userName))
		{
			
		
			$this->load->view('profile', $data);
		}
		else{
				echo "No user by this username!";
		}
	}

}