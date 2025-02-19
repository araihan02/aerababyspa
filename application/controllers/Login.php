<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        // $this->ceklogin();
    }

    public function index()
    {
        extract(populateform());
        if ($this->input->cookie('cookie_invent_user') != NULL) {
            if ($this->input->cookie('cookie_invent_tipe') == "a001") {
                redirect('Dashboard', 'refresh');
            } else {
                redirect('Dashboard', 'refresh');
            }
        } else {
            $this->form_validation->set_rules('username', 'Username', 'required');

            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');

            if ($this->form_validation->run() == FALSE) {
                $data['titlehead'] = 'Login | Aera';
                $view = 'auth/login';
                $this->go_to_auth($view, $data);
            } else {
                $this->login_proses($username, $password);
            }
        }
    }

    function login_proses($username, $password)
    {
        extract(populateform());
        $query = $this->db->query("SELECT username,type FROM userlogin
                                    WHERE username = '" . $username . "' AND password = '" . md5($password) . "' AND flag = 1 ");

        $username = $query->row()->username;
        if ($query->num_rows() > 0) {
            // var_dump('masuk sini');
            //         die;
            $vToken   = $this->randstring();

            //Delete login data 
            $this->Models->queryhandle("DELETE FROM loginlog WHERE username = '" . $username . "'");

            $this->input_cookie_login($username, $query->row()->type, $vToken);

            //Update Login Status//
            $this->Models->queryhandle("UPDATE userlogin SET loginstatus = 1, lastlogin = NOW()
                                        WHERE username = '" . $username . "' ");

            $jam = $this->db->query("SELECT NOW() AS sekarang, DATE_ADD(NOW(), INTERVAL 3 HOUR) AS hangus")->row();

            $this->db->query("INSERT INTO loginlog (username, sesi, timein, expiredtime) 
                              VALUES ( '" . $username . "','" . $vToken . "','" . $jam->sekarang . "','" . $jam->hangus . "' ) ");
            $this->session->set_flashdata('message-success', 'Your login was successful!');
            redirect(base_url() . "Dashboard");
        } else {
            // var_dump('ga sini');
            //         die;
            $this->session->set_flashdata('message-failed', 'Login Failed');
            redirect(base_url() . "Login");
        }
    }

    function randstring()
    {
        $pass = 60;
        $allchar = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        mt_srand((float) microtime() * 1000000);
        $string = '';
        for ($i = 0; $i < $pass; $i++) {
            $string .= $allchar[mt_rand(0, strlen($allchar) - 1)];
        }
        return $string;
    }

    function input_cookie_login($user, $tipe, $vToken)
    {
        $cookie1 = array(
            'name'   => 'cookie_invent_user',
            'value'  => strtoupper($user),
            'expire' => '86400'
        );
        $this->input->set_cookie($cookie1);

        $cookie2 = array(
            'name'   => 'cookie_invent_sesi',
            'value'  => $vToken,
            'expire' => '86400'
        );
        $this->input->set_cookie($cookie2);

        $cookie3 = array(
            'name'   => 'cookie_invent_tipe',
            'value'  => $tipe,
            'expire' => '86400'
        );
        $this->input->set_cookie($cookie3);
    }
}
