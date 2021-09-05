<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class User extends CI_Controller {

    public function add_user() {

        $month = $this->input->post('BirthMonth', true);
        $day = $this->input->post('BirthDay', true);
        $year = $this->input->post('BirthYear', true);

        $date_of_birth = $year . '-' . $month . '-' . $day;
        $user_first_name = $this->input->post('user_first_name', true);
        $user_last_name = $this->input->post('user_last_name', true);
        $user_full_name = $user_first_name . ' ' . $user_last_name;

        $udata = array();
        $udata['user_first_name'] = $user_first_name;
        $udata['user_last_name'] = $user_last_name;
        $udata['user_email_address'] = $this->input->post('user_email_address', true);
        $udata['user_password'] = md5($this->input->post('user_password', true));
        $udata['date_of_birth'] = $date_of_birth;
        $udata['gender'] = $this->input->post('gender', true);
        $udata['address'] = $this->input->post('address', true);
        $udata['country'] = $this->input->post('country', true);
        $udata['city'] = $this->input->post('city', true);
        $udata['zip_code'] = $this->input->post('zip_code', true);
//        echo '<pr>';
//        print_r($udata);
//        exit();
        $this->user_model->save_user_info($udata);

        $sdata = array();
        $sdata['mess'] = 'asas';
        $this->session->set_userdata($sdata);


//        //email_start
        $mdata = array();
        $mdata['from_address'] = 'abc@gmail.com';
        $mdata['user_full_name'] = 'Basis';
        $mdata['to_address'] = $udata['user_email_address'];
        $mdata['subject'] = 'Account activation e-mail';
        $mdata['last_name'] = $udata['user_last_name'];
        $mdata['user_id'] = $this->session->userdata('user_id');
        $mdata['password'] = $this->input->post('user_password', true);
        $this->mailer_model->sendEmail($mdata, 'activation_email');
        //email_end
        redirect('web_welcome/member_signup');
    }

    public function check_user_email($user_email_address) {

        $result = $this->user_model->check_user_email_info($user_email_address);

        if ($result) {
            echo 'Email Address Already Exists';
        } else {
            echo 'Email Address Available';
        }
    }

    public function check_login_email($user_email_address) {

        $result = $this->user_model->check_user_email_info($user_email_address);

        if ($result) {
            echo 'User Found!';
        } else {
            echo 'User Not Found!';
        }
    }

    public function update_user_status($en_user_id) {


        $id = str_replace("%F2", "/", $en_user_id);
        $user_id = $this->encrypt->decode($id);

        $this->user_model->update_user_activation_status($user_id);
        $sdata = array();
        $sdata['message'] = 'Your Account Successfully Activated. You May Login Now!!';
        $this->session->set_userdata($sdata);
        redirect('web_welcome/member_login');
    }

//    public function user_dashboard() {
//
//        $data = array();
//        $data['profile_main_content'] = $this->load->view('mainsite/user_dashboard_content', '', true);
//        $this->load->view('mainsite/user_profile_master', $data);
//    }

    public function user_profile($user_id) {
        $data = array();
        $data['show_edit'] = 1;
        $data['title']='User | Profile';
        $data['user_profile_info'] = $this->user_model->select_user_profile_info_by_id($user_id);
        $data['profile_main_content'] = $this->load->view('mainsite/user_profile_content', $data, true);
        $this->load->view('mainsite/user_profile_master', $data);
    }

    public function edit_user_profile($user_id) {
        $data = array();
        $data['title']='User | Edit Profile';
        $data['user_profile_info'] = $this->user_model->select_user_profile_info_by_id($user_id);
        $data['profile_main_content'] = $this->load->view('mainsite/edit_user_profile_content', $data, true);
        $this->load->view('mainsite/user_profile_master', $data);
    }

    public function update_user_profile() {

        $data = array();
        $user_id = $this->input->post('user_id');
        $data['user_first_name'] = $this->input->post('user_first_name', true);
        $data['user_last_name'] = $this->input->post('user_last_name', true);
        $data['user_email_address'] = $this->input->post('user_email_address', true);
//        $data['user_password'] = md5($this->input->post('user_password', true));
        $data['date_of_birth'] = $this->input->post('date_of_birth', true);
        $data['gender'] = $this->input->post('gender', true);
        $data['address'] = $this->input->post('address', true);
        $data['country'] = $this->input->post('country', true);
        $data['city'] = $this->input->post('city', true);
        $data['zip_code'] = $this->input->post('zip_code', true);
        $data['about'] = $this->input->post('about', true);


//        ---------start Image Upload--------------
//        $config['upload_path'] = 'images/member_images/';
//        $config['allowed_types'] = 'gif|jpg|png';
//        $config['max_size'] = '100';
//        $config['max_width'] = '1024';
//        $config['max_height'] = '768';
//
//        $this->load->library('upload', $config);
//        $this->upload->initialize($config);
//        $error = '';
//        $fdata = array();
//        if (!$this->upload->do_upload('user_image')) {
//
//            $error = $this->upload->display_errors();
//            echo $error;
//            exit();
//        } else {
//    
//            $fdata = $this->upload->data();
//            $data['user_image'] = $config['upload_path'] . $fdata['file_name'];
//        }

        foreach ($_FILES as $eachFile) {
            if ($eachFile['size'] > 0) {

                $config['upload_path'] = 'images/member_images/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['max_width'] = '1500';
                $config['max_height'] = '1500';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('user_image1')) {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } else {
                    $fdata = $this->upload->data();
                    $index = 'user_image1';
                    $data[$index] = $config['upload_path'] . $fdata['file_name'];
                }

                $config['image_library'] = 'gd2';
                $config['new_image'] = 'images/member_images/full_images';
                $config['source_image'] = $data[$index];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = '100';
                $config['height'] = '100';
                $this->load->library('image_lib', $config);

                $this->image_lib->resize();

                if (!$this->image_lib->resize()) {
                    echo $this->image_lib->display_errors();
                } else {
                    $index = 'user_image2';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                }
            }
        }

//        ---------start Image Upload--------------



        $this->user_model->update_user_profile_info($data, $user_id);
        redirect("web_welcome/user_logout");
    }

    public function all_post() {
        $data = array();
        $data['profile_main_content'] = $this->load->view('mainsite/all_post_content', '', true);
        $this->load->view('mainsite/user_profile_master', $data);
    }

    public function add_new_blog() {
        $data = array();
        $data['profile_main_content'] = $this->load->view('mainsite/add_new_blog_content', '', true);
        $this->load->view('mainsite/user_profile_master', $data);
    }

}
