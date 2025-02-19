<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends MY_Controller
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
        $data['titlehead'] = 'Aera | Product';
        $data['titleview'] = "Product";


        $sql = "select productcode,name,description,category,price,flag from product where flag = 1";
        $hasil = $this->Models->showdata($sql);
        // var_dump($sql);die;
        $lists_title = array('Product Code', 'Product Name', 'Description', 'Category', 'Price', 'Status', 'Action');
        if (!empty($hasil)) {
            $lists_key = array('productcode', 'name', 'description', 'category', 'price', 'flag');
            // $lists_key = array_keys(json_decode(json_encode($hasil[0]), true));
            $data['lists_title'] = $lists_title;
            $data['lists_key'] = $lists_key;
            $data['lists'] = $hasil;
        } else {
            $data['lists_title'] = $lists_title;
            $data['lists_key'] = $lists_title;
            $data['lists'] = $hasil;
        }

        $view = 'product/index';
        $this->go_to($view, $data);
    }

    public function addproduct()
    {
        extract(populateform());
        $user = $this->input->cookie('cookie_invent_user');
        $code = $this->Models->createnoseries('PRODUCT', 'P', $category, '', '');
        $cekcode = $this->db->query("SELECT * FROM product WHERE productcode = '$code'");
        if ($cekcode->num_rows() > 0) {
            $this->Models->updatenoseries('PRODUCT', 'P', $category, '', 1, '');
            $code = $this->Models->createnoseries('PRODUCT', 'P', $category, '', '');
        }
        $sql = "insert into product(productcode,name,description,category,price,flag,createddate,createdby) values ('$code','$name','$description','$category','$price','1',NOW(),'$user')";
        // var_dump($sql);die;
        $hasil = $this->db->query($sql);
        if ($hasil == false) {
            $this->session->set_flashdata('message-failed', 'Error');
            redirect(base_url('Product'));
        } else if ($hasil == true) {
            $this->Models->updatenoseries('PRODUCT', 'P', $category, '', 1, '');
            $this->session->set_flashdata('message-success', 'Berhasil');
            redirect(base_url('Product'));
        }
    }

    public function editproduct($productcode)
    {
        extract(populateform());
        $user = $this->input->cookie('cookie_invent_user');
        $sql = "update product set name='$name',description='$description',category='$category',price='$price',modifieddate=NOW(),modifiedby='$user' where productcode ='$productcode'";
        // var_dump($sql);die;
        $hasil = $this->db->query($sql);
        if ($hasil == false) {
            $this->session->set_flashdata('message-failed', 'Error');
            redirect(base_url('Product'));
        } else if ($hasil == true) {
            $this->session->set_flashdata('message-success', 'Berhasil');
            redirect(base_url('Product'));
        }
    }
    public function deleteproduct($productcode)
    {
        $user = $this->input->cookie('cookie_invent_user');
        $sql = "update product set flag=0,deleteddate=NOW(),deletedby='$user' where productcode ='$productcode'";
        // var_dump($sql);die;
        $hasil = $this->db->query($sql);
        if ($hasil == false) {
            $this->session->set_flashdata('message-failed', 'Error');
            redirect(base_url('Product'));
        } else if ($hasil == true) {
            $this->session->set_flashdata('message-success', 'Berhasil');
            redirect(base_url('Product'));
        }
    }
}
