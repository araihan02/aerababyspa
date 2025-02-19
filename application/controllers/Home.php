<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('models', '', TRUE);
        $this->load->helper('cookie');
        // $this->Models->queryhandle("SET ANSI_NULLS ON;");
        // $this->Models->queryhandle("SET ANSI_WARNINGS ON;");
        ini_set('max_execution_time', 0);
    }

    public function index()
    {
        $data['product'] = $this->Models->showdata("select productcode,name,description,category,price,flag from product where flag = 1");
        $data['testimoni'] = $this->Models->showdata("select id,namecustomer,description from testimoni where flag = 1");
        $this->load->view('home/index', $data);
    }

    public function reservasi()
    {
        extract(populateform());
        $this->form_validation->set_rules('name', 'Your Nama', 'required');

        $this->form_validation->set_rules('handphone', 'Nomor Handphone', 'required|numeric|min_length[10]|max_length[13]');

        $this->form_validation->set_rules('email', 'Email', 'valid_email|required');

        $this->form_validation->set_rules('product', 'Treatment', 'required');

        $this->form_validation->set_rules('date', 'Tanggal', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['product'] = $this->Models->showdata("select productcode,name,description,category,price,flag from product where flag = 1");
            $data['choose'] = $_GET['choose'];
            $this->load->view('home/reservasi', $data);
        } else {
            $this->reservasi_proses($name, $handphone, $email, $product, $date);
        }
    }

    function reservasi_proses($name, $handphone, $email, $product, $date)
    {
        $code = $this->Models->createnoseries('RESERVASI', 'SRV', 'RESERVASI', '', '');
        $cekcode = $this->db->query("SELECT * FROM reservasi WHERE reservasicode = '$code'");
        if ($cekcode->num_rows() > 0) {
            $this->Models->updatenoseries('RESERVASI', 'SRV', 'RESERVASI', '', 1, '');
            $code = $this->Models->createnoseries('RESERVASI', 'SRV', 'RESERVASI', '', '');
        }
        $sql = "insert into reservasi(reservasicode,name,nohp,email,productcode,datebefore,createddate,createdby) values ('$code','$name','$handphone','$email','$product','$date',NOW(),'system')";
        // var_dump($sql);die;
        $hasil = $this->db->query($sql);
        if ($hasil == false) {
            // $this->session->set_flashdata('message-failed', 'Error');
            $data['msg'] = 'Error';
            $this->load->view('home/afterreservasi', $data);
        } else if ($hasil == true) {
            $this->Models->updatenoseries('RESERVASI', 'SRV', 'RESERVASI', '', 1, '');
            // $this->session->set_flashdata('message-success', 'Berhasil');
            $data['msg'] = 'Berhasil';
            $this->load->view('home/afterreservasi', $data);
        }
    }
}
