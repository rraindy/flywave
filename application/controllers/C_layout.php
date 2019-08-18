<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_layout extends MY_controller {

	public function __construct() {
	    parent::__construct();
	    // Your own constructor code

		//$this->load->model("wayfinder/M_wayfinder");
		
	}

	public function index(){
		$data['error']  = 0;
		$this->render('Welcome','', $data);
	}

}

