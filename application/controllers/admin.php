<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id != NULL) {
            redirect('super_admin', 'refresh');
        }
    }

    public function index() {
        $this->load->view('admin/admin_login');
    }

//    public function admin_register() {
//        $this->load->view('admin/admin_register_form');
//    }


//    public function admin_form_validation() {
//
//        $pass1 = $this->input->post('admin_password', true);
//        $pass2 = $this->input->post('admin_password2', true);
//        if ($pass1 == $pass2) {
//            $this->add_admin();
//        } else {
//            echo 'Your Passsword didnot match';
//        }
//    }
//
//    public function add_admin() {
//
//        $data = array();
//        $data['admin_first_name'] = $this->input->post('admin_first_name', true);
//        $data['admin_last_name'] = $this->input->post('admin_last_name', true);
//        $data['admin_email_address'] = $this->input->post('admin_email_address', true);
//        $data['admin_password'] = $this->input->post('admin_password', true);
//        $this->super_admin_model->save_admin_info($data);
//    }

    public function check_admin_login() {

        $admin_email_address = $this->input->post('admin_email_address', true);
        $admin_password = $this->input->post('admin_password', true);
        $this->load->model('admin_model', 'a_model');
        $result = $this->a_model->check_admin_login_info($admin_email_address, $admin_password);
//        echo '<pre>';
//        print_r($result);
//        exit();

        $sdata = array();
        if ($result) {
            $sdata['first_name'] = $result->admin_first_name;
            $sdata['last_name'] = $result->admin_last_name;
            $sdata['full_name'] = $sdata['first_name'] . ' ' . $sdata['last_name'];
            $sdata['admin_id'] = $result->admin_id;
            $sdata['admin_photo_thumb'] = $result->admin_image1;
            $sdata['admin_photo_full'] = $result->admin_image2;
            $sdata['admin_designation'] = $result->admin_designation;
            $sdata['access_level'] = $result->access_level;
            $this->session->set_userdata($sdata);
            redirect('super_admin');
        } else {
            $sdata['message'] = 'Your Email / Password Invalide!!';
            $this->session->set_userdata($sdata);
            redirect('admin');
        }
    }



}
