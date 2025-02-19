<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends MY_Controller
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
        extract(populateform());
        $data['titlehead'] = 'Aera | Testimoni';
        $data['titleview'] = "Testimoni";


        $sql = "select id,namecustomer,description from testimoni where flag = 1";
        $hasil = $this->Models->showdata($sql);
        // var_dump($sql);die;
        $lists_title = array('Name Customer', 'Description', 'Action');
        if (!empty($hasil)) {
            $lists_key = array('namecustomer', 'description');
            // $lists_key = array_keys(json_decode(json_encode($hasil[0]), true));
            $data['lists_title'] = $lists_title;
            $data['lists_key'] = $lists_key;
            $data['lists'] = $hasil;
        } else {
            $data['lists_title'] = $lists_title;
            $data['lists_key'] = $lists_title;
            $data['lists'] = $hasil;
        }

        $view = 'testimoni/index';
        $this->go_to($view, $data);
    }

    public function addtestimoni()
    {
        extract(populateform());
        $user = $this->input->cookie('cookie_invent_user');
        $sql = "insert into testimoni(namecustomer,description,flag,createddate,createdby) values ('$namecustomer','$description','1',NOW(),'$user')";
        // var_dump($sql);die;
        $hasil = $this->db->query($sql);
        if (!$hasil) {
            $this->session->set_flashdata('message-failed', 'Error');
            redirect(base_url('Testimoni'));
        } else {
            $this->session->set_flashdata('message-success', 'Berhasil');
            redirect(base_url('Testimoni'));
        }
    }

    public function edittestimoni($id)
    {
        extract(populateform());
        $user = $this->input->cookie('cookie_invent_user');
        $sql = "update testimoni set namecustomer='$namecustomer',description='$description',modifieddate=NOW(),modifiedby='$user' where id ='$id'";
        // var_dump($sql);die;
        $hasil = $this->db->query($sql);
        if (!$hasil) {
            $this->session->set_flashdata('message-failed', 'Error');
            redirect(base_url('Testimoni'));
        } else {
            $this->session->set_flashdata('message-success', 'Berhasil');
            redirect(base_url('Testimoni'));
        }
    }
    public function deletetestimoni($id)
    {
        $user = $this->input->cookie('cookie_invent_user');
        $sql = "update testimoni set flag=0,deleteddate=NOW(),deletedby='$user' where id ='$id'";
        // var_dump($sql);die;
        $hasil = $this->db->query($sql);
        if (!$hasil) {
            $this->session->set_flashdata('message-failed', 'Error');
            redirect(base_url('Testimoni'));
        } else {
            $this->session->set_flashdata('message-success', 'Berhasil');
            redirect(base_url('Testimoni'));
        }
    }
}
