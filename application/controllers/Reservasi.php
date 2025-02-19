<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reservasi extends MY_Controller
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
        $data['titlehead'] = 'Aera | Reservasi';
        $data['titleview'] = "Reservasi";

        $data['product'] = $this->Models->showdata("select productcode,name,description,category,price,flag from product where flag = 1");
        $sql = "select a.reservasicode,a.name,a.nohp,a.email,b.name as productname,a.datebefore,
        a.datefix,case when a.status=1 then 'Visit' else 'Cancel' end as status 
        from reservasi a
        inner join product b on a.productcode=b.productcode";
        $hasil = $this->Models->showdata($sql);
        // var_dump($sql);die;
        $lists_title = array('Reservasi Code', 'Name', 'Handphone', 'Email', 'Product Name', 'Date Before', 'Date Fix', 'Status', 'Action');
        if (!empty($hasil)) {
            $lists_key = array('reservasicode', 'name', 'nohp', 'email', 'productname', 'datebefore', 'datefix', 'status');
            // $lists_key = array_keys(json_decode(json_encode($hasil[0]), true));
            $data['lists_title'] = $lists_title;
            $data['lists_key'] = $lists_key;
            $data['lists'] = $hasil;
        } else {
            $data['lists_title'] = $lists_title;
            $data['lists_key'] = $lists_title;
            $data['lists'] = $hasil;
        }

        $view = 'reservasi/index';
        $this->go_to($view, $data);
    }

    public function addreservasi()
    {
        extract(populateform());
        $user = $this->input->cookie('cookie_invent_user');
        $sql = "insert into reservasi(reservasicode,name,nohp,email,productcode,datebefore,status,createddate,createdby) values ('$reservasicode','$name','$nohp','$email','$productcode','$datebefore','1',NOW(),'$user')";
        // var_dump($sql);die;
        $hasil = $this->db->query($sql);
        if (!$hasil) {
            $this->session->set_flashdata('message-failed', 'Error');
            redirect(base_url('Reservasi'));
        } else {
            $this->session->set_flashdata('message-success', 'Berhasil');
            redirect(base_url('Reservasi'));
        }
    }

    public function editreservasi($reservasicode)
    {
        extract(populateform());
        $user = $this->input->cookie('cookie_invent_user');
        $sql = "update reservasi set productcode='$productcode',datefix='$datefix',status='$status',modifieddate=NOW(),modifiedby='$user' where reservasicode ='$reservasicode'";
        // var_dump($sql);die;
        $hasil = $this->db->query($sql);
        if (!$hasil) {
            $this->session->set_flashdata('message-failed', 'Error');
            redirect(base_url('Reservasi'));
        } else {
            $this->session->set_flashdata('message-success', 'Berhasil');
            redirect(base_url('Reservasi'));
        }
    }
}
