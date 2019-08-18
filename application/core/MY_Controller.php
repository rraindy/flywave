<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class MY_Controller extends CI_Controller
{
	public $login;

    public function __construct()
	{
        parent::__construct();

        ini_set('upload_max_filesize', '20M');
        ini_set('post_max_size', '20M');
        ini_set('max_input_time', 300);
        ini_set('max_execution_time', 300);

         
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		date_default_timezone_set("Asia/Makassar");
		$force_logout= 0;

		$this->var_controller = $this->router->fetch_class();
		$this->var_function = $this->router->fetch_method();

		$folder1= $this->uri->segment(1);
		$folder2= $this->uri->segment(2);


		

		// $grup_login = $this->session->user_grup;
	    // $grup_admin_pole = $this->config->item('grup_admin_pole', 'ion_auth');
	    // $grup_regis_pole = $this->config->item('grup_regis_pole', 'ion_auth');
	    // $grup_kasir_pole = $this->config->item('grup_kasir_pole', 'ion_auth');
	    

	    //require APPPATH . 'libraries/REST_Controller.php';
	    $this->load->library('encryption');

		

		//echo $grup_akuntansi; 
		//die();
		//phpinfo();
		
		
    }

	public function render($file,$data=null)
	{
		$d['layout']=$this->load->view($file,$data,true);

		$this->parser->parse("layout",$d);
	}


	public function _render_page($view, $data=null, $returnhtml=false)//I think this makes more sense
	{

		$this->viewdata = (empty($data)) ? $this->data: $data;

		$view_html = $this->load->view($view, $this->viewdata, $returnhtml);

		if ($returnhtml) return $view_html;//This will return html on 3rd argument being true
	}

	public function req($url=null,$methods="get",$data=0)

	{
		$this->load->library('PHPRequests');

		//http basic auth
		$options = array(
			'auth' => new Requests_Auth_Basic(array('adminx', '12344'))
		);

		$headers = array('x-pass' => '123FCece2ad38d915c38fdbb5c0dae87cbx7k');

		if($methods=='get'){
			$response = Requests::get(base_url().$url,$headers, $options);
		}else{
			$response = Requests::post(base_url().$url,$headers, $data, $options);
		}
    	return($response->body);
	}
}
?>