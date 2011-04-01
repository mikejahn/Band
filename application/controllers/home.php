<?php 

if (! defined('BASEPATH')) exit('No direct script access');

class Home extends CI_Controller {

	
	
	function index() {

		
		    echo "bob";
	   
		
	}
	
	
	function profile(){
		$this->load->helper('url');
		
		echo $this->uri->segment(2, 0);
	}

}