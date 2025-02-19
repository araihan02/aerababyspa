<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends MY_Controller
{
    function index()
    {
        $this->load->helper('cookie');

        $username = $this->input->cookie('cookie_invent_user');
        $tipe = $this->input->cookie('cookie_invent_tipe');
        // var_dump($username);
        // die;
        delete_cookie('cookie_invent_user');
        delete_cookie('cookie_invent_tipe');
        delete_cookie('cookie_invent_sesi');
        $this->Models->queryhandle("UPDATE userlogin SET loginstatus = 0 WHERE username = '" . $username . "' ");
        // $this->Models->queryhandle("UPDATE dbo.user_login_admin SET loginstatus = 0 WHERE username = '" . $username . "' ");
        $this->Models->queryhandle("DELETE FROM loginlog  WHERE username = '" . $username . "' ");

        // if ($tipe != 'TP003') {
        //     redirect('Login_admin');
        // } else {
        redirect('Login');
        // }
    }
}
