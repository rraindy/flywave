<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // $this->load->model('farmasi/M_TrxOrder');
    }

    public function index()
    {
        $data['error'] = 0;
        // $data['data_dashboard'] = $this->M_dashboard->getDataDashboar();
        $this->render('dashboard_flywave', 'dashboard', $data);
    }
}
