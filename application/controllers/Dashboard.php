<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->ceklogin();
    }

    public function index()
    {
        $data['titlehead'] = 'Aera | Dashboard';
        $data['titleview'] = "Dashboard";

        $view = 'dashboard/index';
        $this->go_to($view, $data);
    }
}