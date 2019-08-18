<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct() {
	    parent::__construct();
	    // Your own constructor code
	    if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/logout', 'refresh');
		}
	}

	public function index(){
		$this->render('welcome');
	}

	public function myprofile(){
		$data['errors'] =0;
		$this->render('myprofile',$data);
	}

	
}
