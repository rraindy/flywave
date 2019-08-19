<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_penerimaan_barang extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // $this->load->model('farmasi/M_TrxOrder');
    }

    public function v_penerimaan_barang
    ()
    {
        $data['error'] = 0;
        // $data['data_dashboard'] = $this->M_dashboard->getDataDashboar();
        $this->render('v_penerimaan_barang', 'penerimaan_barang', $data);
    }
}
