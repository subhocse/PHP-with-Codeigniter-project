<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class Super_Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect('admin', 'refresh');
        }
    }

//-------------------------------Start Admin Related Work------------------------------

    public function index() {

        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/dashboard_content', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_my_photo($admin_id) {

        $data = array();
        $data['admin_info'] = $this->super_admin_model->select_admin_info_by_id($admin_id);
        $data['admin_main_content'] = $this->load->view('admin/edit_my_photo_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_my_photo() {

        $data = array();
        $admin_id = $this->input->post('admin_id');
        //                print_r($_POST);
//        print_r($_FILES);
//        exit();
//        ---------start Image Upload--------------

        foreach ($_FILES as $eachFile) {
            if ($eachFile['size'] > 0) {

                $config['upload_path'] = 'images/admin_images/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['max_width'] = '1500';
                $config['max_height'] = '1500';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('admin_image1')) {
                    $fdata = $this->upload->data();
                    $index = 'admin_image1';
                    $data[$index] = $config['upload_path'] . $fdata['file_name'];
                }

                $config['image_library'] = 'gd2';
                $config['new_image'] = 'images/admin_images/full_images/';
                $config['source_image'] = $data[$index];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = '100';
                $config['height'] = '100';
                $this->load->library('image_lib', $config);

                $this->image_lib->resize();

                if ($this->image_lib->resize()) {
                    $index = 'admin_image2';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                }
            } else {

                echo "You Didn't Select Any Image";
            }
        }
//        ---------End Image Upload--------------

        $this->super_admin_model->update_my_photo_by_id($data, $admin_id);

        redirect('super_admin/logout');
    }

    public function delete_my_image($admin_id) {

        $data = array();
        $this->super_admin_model->delete_my_image_by_id($admin_id);
        $data['admin_info'] = $this->super_admin_model->select_admin_info_by_id($admin_id);
        $data['admin_main_content'] = $this->load->view('admin/edit_my_photo_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function check_password() {

        $data = array();
        $admin_password = $this->input->post('admin_password', true);
        $result = $this->super_admin_model->check_admin_password($admin_password);
        if ($result) {
            redirect('super_admin');
        } else {
            $data['message'] = 'Your Password is Invalide!!';
            $this->session->set_userdata($data);
            redirect('super_admin/lock_screen');
        }
    }

    public function admin_profile($admin_id) {

        $data = array();
        $data['admin_info'] = $this->super_admin_model->select_admin_info_by_id($admin_id);
        $data['admin_main_content'] = $this->load->view('admin/admin_profile_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function lock_screen() {

//        $data = array();
        $this->load->view('admin/lock_screen_content');
    }

    public function logout() {

        $this->session->unset_userdata('admin_first_name');
        $this->session->unset_userdata('admin_first_name');
        $this->session->unset_userdata('access_level');
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_photo_thumb');
        $this->session->unset_userdata('admin_photo_full');
        $this->session->unset_userdata('admin_designation');


        $sdata = array();
        $sdata['message'] = 'You are Successfully Logout!!';
        $this->session->set_userdata($sdata);
        redirect('admin');
    }

//-------------------------------End Admin Related Work------------------------------
//    public function calendar() {
//
//        $data = array();
//        $data['admin_main_content'] = $this->load->view('admin/calendar_content', '', true);
//        $this->load->view('admin/admin_master', $data);
//    }
//
//    public function mailbox() {
//
//        $data = array();
//        $data['admin_main_content'] = $this->load->view('admin/mailbox_content', '', true);
//        $this->load->view('admin/admin_master', $data);
//    }
//
//    public function add_blog() {
//
//        $data = array();
//        $data['admin_main_content'] = $this->load->view('admin/add_blog_content', '', true);
//        $this->load->view('admin/admin_master', $data);
//    }
//
//    public function manage_blog() {
//
//        $data = array();
//        $data['admin_main_content'] = $this->load->view('admin/manage_blog_content', '', true);
//        $this->load->view('admin/admin_master', $data);
//    }
//-------------------Start Manage User Related Work--------------------------

    public function manage_user() {

        $data = array();
        $config['base_url'] = base_url() . 'Super_Admin/manage_user/';
        $config['total_rows'] = $this->db->count_all('tbl_user');
        $config['per_page'] = 2;
        $config['num_links'] = $this->db->count_all('tbl_user');
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination pagination-centered">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next &raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['all_user'] = $this->super_admin_model->select_all_user($config['per_page'], $this->uri->segment(3));
//                echo '<pr>';
//        print_r($data['all_user']);
//        exit();
        $data['admin_main_content'] = $this->load->view('admin/manage_user_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function show_user_profile($user_id) {
        $data = array();
        $data['show_edit'] = 0;
        $data['user_profile_info'] = $this->super_admin_model->show_user_profile_info_by_id($user_id);
        $data['admin_main_content'] = $this->load->view('mainsite/user_profile_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function active_user($user_id) {

        $this->super_admin_model->update_user_activation_status_by_id($user_id);
        redirect('super_admin/manage_user');
    }

    public function inactive_user($user_id) {

        $this->super_admin_model->update_user_inactivation_status_by_id($user_id);
        redirect('super_admin/manage_user');
    }

    public function delete_user($user_id) {

        $this->super_admin_model->delete_user_by_id($user_id);
        redirect('super_admin/manage_user');
    }

//-------------------End Manage User Related Work--------------------------
//-----------------------------Start News Related Work--------------------------------
    public function add_news() {

        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/add_news_content', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_news() {
        $data = array();
        $data['news_title'] = $this->input->post('news_title', true);
        $data['news_short_description'] = $this->input->post('news_short_description', true);
        $data['news_long_description'] = $this->input->post('news_long_description', true);
        $data['news_publication_date'] = $this->input->post('news_publication_date', true);
        $data['news_publication_status'] = $this->input->post('news_publication_status', true);

//        ---------start Image Upload--------------

        $config['upload_path'] = 'images/news_images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '1500';
        $config['max_height'] = '1500';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $fdata = array();
        if ($this->upload->do_upload('news_image')) {

            $fdata = $this->upload->data();
            $data['news_image'] = $config['upload_path'] . $fdata['file_name'];
        }



//        ---------start Image Upload--------------
//        print_r($_POST);
//        print_r($data['news_image']);
//        exit();
        $this->super_admin_model->save_news_info($data);
        $sdata = array();
        $sdata['message'] = 'Save News Information Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_news');
    }

    public function edit_news($news_id) {

        $data = array();
        $data['news_info'] = $this->super_admin_model->select_news_by_id($news_id);
        $data['admin_main_content'] = $this->load->view('admin/edit_news_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function manage_news() {

        $data = array();
        $config['base_url'] = base_url() . 'Super_Admin/manage_news/';
        $config['total_rows'] = $this->db->count_all('tbl_news');
        $config['per_page'] = 2;
        $config['num_links'] = $this->db->count_all('tbl_news');
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination pagination-centered">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next &raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['all_news'] = $this->super_admin_model->select_all_news($config['per_page'], $this->uri->segment(3));
        $data['admin_main_content'] = $this->load->view('admin/manage_news_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function publish_news($news_id) {

        $this->super_admin_model->update_news_publication_status_by_id($news_id);
        redirect('super_admin/manage_news');
    }

    public function unpublish_news($news_id) {

        $this->super_admin_model->update_news_unpublication_status_by_id($news_id);
        redirect('super_admin/manage_news');
    }

    public function update_news() {

        $data = array();
        $news_id = $this->input->post('news_id');
        $data['news_title'] = $this->input->post('news_title', true);
        $data['news_short_description'] = $this->input->post('news_short_description', true);
        $data['news_long_description'] = $this->input->post('news_long_description', true);
        $data['news_publication_date'] = $this->input->post('news_publication_date', true);
        $data['news_publication_status'] = $this->input->post('news_publication_status', true);
//                print_r($_POST);
//        print_r($_FILES);
//        exit();
//        ---------start Image Upload--------------

        $config['upload_path'] = 'images/news_images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '1500';
        $config['max_height'] = '1500';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $fdata = array();
        if ($this->upload->do_upload('news_image')) {

            $fdata = $this->upload->data();
            $data['news_image'] = $config['upload_path'] . $fdata['file_name'];
        }



//        ---------start Image Upload--------------

        $this->super_admin_model->update_news_info_by_id($data, $news_id);
//        $sdata = array();
//        $sdata['message'] = 'Save Category Information Successfully !';
//        $this->session->set_userdata($sdata);

        redirect('super_admin/manage_news');
    }

    public function delete_news($news_id) {

        $this->super_admin_model->delete_news_by_id($news_id);
        redirect('super_admin/manage_news');
    }

    public function delete_news_image($news_id) {

        $data = array();
        $this->super_admin_model->delete_news_image_by_id($news_id);
        $data['news_info'] = $this->super_admin_model->select_news_by_id($news_id);
        $data['admin_main_content'] = $this->load->view('admin/edit_news_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

//-----------------------------End News Related Work--------------------------------
//-----------------------------Start Events Related Work--------------------------------
    public function add_events() {

        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/add_events_content', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_events() {
        $data = array();
        $data['events_title'] = $this->input->post('events_title', true);
        $data['events_short_description'] = $this->input->post('events_short_description', true);
        $data['events_long_description'] = $this->input->post('events_long_description', true);
        $data['events_publication_date'] = $this->input->post('events_publication_date', true);
        $data['events_publication_status'] = $this->input->post('events_publication_status', true);

//        ---------start Image Upload--------------

        $config['upload_path'] = 'images/events_images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '1500';
        $config['max_height'] = '1500';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $fdata = array();
        if ($this->upload->do_upload('events_image')) {

            $fdata = $this->upload->data();
            $data['events_image'] = $config['upload_path'] . $fdata['file_name'];
        }



//        ---------End Image Upload--------------
//        print_r($_POST);
//        print_r($data['events_image']);
//        exit();
        $this->super_admin_model->save_events_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Events Information Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_events');
    }

    public function edit_events($events_id) {

        $data = array();
        $data['events_info'] = $this->super_admin_model->select_events_by_id($events_id);
        $data['admin_main_content'] = $this->load->view('admin/edit_events_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function manage_events() {

        $data = array();
        $config['base_url'] = base_url() . 'Super_Admin/manage_events/';
        $config['total_rows'] = $this->db->count_all('tbl_events');
        $config['per_page'] = 2;
        $config['num_links'] = $this->db->count_all('tbl_events');
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination pagination-centered">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next &raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['all_events'] = $this->super_admin_model->select_all_events($config['per_page'], $this->uri->segment(3));
        $data['admin_main_content'] = $this->load->view('admin/manage_events_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function publish_events($events_id) {

        $this->super_admin_model->update_events_publication_status_by_id($events_id);
        redirect('super_admin/manage_events');
    }

    public function unpublish_events($events_id) {

        $this->super_admin_model->update_events_unpublication_status_by_id($events_id);
        redirect('super_admin/manage_events');
    }

    public function update_events() {

        $data = array();
        $events_id = $this->input->post('events_id');
        $data['events_title'] = $this->input->post('events_title', true);
        $data['events_short_description'] = $this->input->post('events_short_description', true);
        $data['events_long_description'] = $this->input->post('events_long_description', true);
        $data['events_publication_date'] = $this->input->post('events_publication_date', true);
        $data['events_publication_status'] = $this->input->post('events_publication_status', true);
//                print_r($_POST);
//        print_r($_FILES);
//        exit();
//        ---------start Image Upload--------------

        $config['upload_path'] = 'images/events_images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '1500';
        $config['max_height'] = '1500';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $fdata = array();
        if ($this->upload->do_upload('events_image')) {
            $fdata = $this->upload->data();
            $data['events_image'] = $config['upload_path'] . $fdata['file_name'];
        }



//        ---------End Image Upload--------------

        $this->super_admin_model->update_events_info_by_id($data, $events_id);
//        $sdata = array();
//        $sdata['message'] = 'Save Category Information Successfully !';
//        $this->session->set_userdata($sdata);

        redirect('super_admin/manage_events');
    }

    public function delete_events($events_id) {

        $this->super_admin_model->delete_events_by_id($events_id);
        redirect('super_admin/manage_events');
    }

    public function delete_events_image($events_id) {

        $data = array();
        $this->super_admin_model->delete_events_image_by_id($events_id);
        $data['events_info'] = $this->super_admin_model->select_events_by_id($events_id);
        $data['admin_main_content'] = $this->load->view('admin/edit_events_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

//-----------------------------End Events Related Work--------------------------------
//-----------------------------Start Project Related Work--------------------------------
//    public function add_category() {
//
//        $data = array();
//        $data['admin_main_content'] = $this->load->view('admin/add_category_content', '', true);
//        $this->load->view('admin/admin_master', $data);
//    }

    public function add_project_category() {

        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/add_project_category_content', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_project_category() {

        $data = array();
        $data['project_category_name'] = $this->input->post('project_category_name', true);
        $data['project_category_description'] = $this->input->post('project_category_description', true);
        $data['project_category_publication_status'] = $this->input->post('project_category_publication_status', true);
//                print_r($_POST);
//        print_r($_FILES);
//        exit();
//        ---------start Image Upload--------------

        $config['upload_path'] = 'images/project_category_images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '1500';
        $config['max_height'] = '1500';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $fdata = array();
        if ($this->upload->do_upload('project_category_image')) {

            $fdata = $this->upload->data();
            $data['project_category_image'] = $config['upload_path'] . $fdata['file_name'];
        }



//        ---------start Image Upload--------------

        $this->super_admin_model->save_project_category_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Category Information Successfully !';
        $this->session->set_userdata($sdata);

        redirect('super_admin/add_project_category');
    }

    public function manage_project_category() {

        $data = array();
        $config['base_url'] = base_url() . 'Super_Admin/manage_project_category/';
        $config['total_rows'] = $this->db->count_all('tbl_project_category');
        $config['per_page'] = 3;
        $config['num_links'] = $this->db->count_all('tbl_project_category');
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination pagination-centered">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next &raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['all_project_category'] = $this->super_admin_model->select_all_project_category($config['per_page'], $this->uri->segment(3));
        $data['admin_main_content'] = $this->load->view('admin/manage_project_category_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

//    public function manage_category() {
//
//        $data = array();
//        $data['admin_main_content'] = $this->load->view('admin/manage_category_content', '', true);
//        $this->load->view('admin/admin_master', $data);
//    }

    public function edit_project_category($news_id) {

        $data = array();
        $data['project_category_info'] = $this->super_admin_model->select_project_category_by_id($news_id);
        $data['admin_main_content'] = $this->load->view('admin/edit_project_category_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function publish_project_category($project_category_id) {

        $this->super_admin_model->update_project_category_publication_status_by_id($project_category_id);
        redirect('super_admin/manage_project_category');
    }

    public function unpublish_project_category($project_category_id) {

        $this->super_admin_model->update_project_category_unpublication_status_by_id($project_category_id);
        redirect('super_admin/manage_project_category');
    }

    public function update_project_category() {

        $data = array();
        $project_category_id = $this->input->post('project_category_id');
        $data['project_category_name'] = $this->input->post('project_category_name', true);
        $data['project_category_description'] = $this->input->post('project_category_description', true);
        $data['project_category_publication_status'] = $this->input->post('project_category_publication_status', true);
//                print_r($_POST);
//        print_r($_FILES);
//        exit();
//        ---------start Image Upload--------------

        $config['upload_path'] = 'images/project_category_images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '1500';
        $config['max_height'] = '1500';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $fdata = array();
        if ($this->upload->do_upload('project_category_image')) {

            $fdata = $this->upload->data();
            $data['project_category_image'] = $config['upload_path'] . $fdata['file_name'];
        }



//        ---------End Image Upload--------------

        $this->super_admin_model->update_project_category_info_by_id($data, $project_category_id);
//        $sdata = array();
//        $sdata['message'] = 'Save Category Information Successfully !';
//        $this->session->set_userdata($sdata);

        redirect('super_admin/manage_project_category');
    }

    public function delete_project_category($project_category_id) {

        $this->super_admin_model->delete_project_category_by_id($project_category_id);
        redirect('super_admin/manage_project_category');
    }

    public function delete_project_category_image($project_category_id) {

        $data = array();
        $this->super_admin_model->delete_project_category_image_by_id($project_category_id);
        $data['project_category_info'] = $this->super_admin_model->select_project_category_by_id($project_category_id);
        $data['admin_main_content'] = $this->load->view('admin/edit_project_category_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_project() {

        $data = array();
        $data['all_published_project_category'] = $this->super_admin_model->select_all_published_project_category();
//        echo '<pr>';
//        print_r($data);
//        exit();
        $data['admin_main_content'] = $this->load->view('admin/add_project_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_project() {

        $data = array();
        $data['project_title'] = $this->input->post('project_title', true);
        $data['project_category_id'] = $this->input->post('project_category_id', true);
        $data['project_short_description'] = $this->input->post('project_short_description', true);
        $data['project_long_description'] = $this->input->post('project_long_description', true);
        $data['project_date'] = $this->input->post('project_date', true);
        $data['project_publication_status'] = $this->input->post('project_publication_status', true);
//                print_r($_POST);
//        print_r($_FILES);
//        exit();
//        ---------start Image Upload--------------

        foreach ($_FILES as $eachFile) {
            if ($eachFile['size'] > 0) {

                $config['upload_path'] = 'images/project_images/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['max_width'] = '1500';
                $config['max_height'] = '1500';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('project_image1')) {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } else {
                    $fdata = $this->upload->data();
                    $index = 'project_image1';
                    $data[$index] = $config['upload_path'] . $fdata['file_name'];
                }

                $config['image_library'] = 'gd2';
                $config['new_image'] = 'images/project_images/image_thumbnail/';
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
                    $index = 'project_image2';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                }
            }
        }
//        ---------End Image Upload--------------

        $this->super_admin_model->save_project_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Project Information Successfully !';
        $this->session->set_userdata($sdata);

        redirect('super_admin/add_project');
    }

    public function edit_project($project_id) {

        $data = array();
        $data['all_published_project_category'] = $this->super_admin_model->select_all_published_project_category();
//        echo '<pr>';
//        print_r($data['all_published_project_category']);
//        exit();
        $data['project_info'] = $this->super_admin_model->select_project_by_id($project_id);
        $data['admin_main_content'] = $this->load->view('admin/edit_project_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function manage_project() {

        $data = array();
        $config['base_url'] = base_url() . 'Super_Admin/manage_project/';
        $config['total_rows'] = $this->db->count_all('tbl_project');
        $config['per_page'] = 4;
        $config['num_links'] = $this->db->count_all('tbl_project');
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination pagination-centered">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next &raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['all_project'] = $this->super_admin_model->select_all_project($config['per_page'], $this->uri->segment(3));
        $data['admin_main_content'] = $this->load->view('admin/manage_project_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function publish_project($project_id) {

        $this->super_admin_model->update_project_publication_status_by_id($project_id);
        redirect('super_admin/manage_project');
    }

    public function unpublish_project($project_id) {

        $this->super_admin_model->update_project_unpublication_status_by_id($project_id);
        redirect('super_admin/manage_project');
    }

    public function update_project() {

        $data = array();
        $project_id = $this->input->post('project_id');
        $data['project_title'] = $this->input->post('project_title', true);
        $data['project_short_description'] = $this->input->post('project_short_description', true);
        $data['project_long_description'] = $this->input->post('project_long_description', true);
        $data['project_date'] = $this->input->post('project_date', true);
        $data['project_publication_status'] = $this->input->post('project_publication_status', true);
//                print_r($_POST);
//        print_r($_FILES);
//        exit();
//        ---------start Image Upload--------------

        foreach ($_FILES as $eachFile) {
            if ($eachFile['size'] > 0) {

                $config['upload_path'] = 'images/project_images/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['max_width'] = '1500';
                $config['max_height'] = '1500';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('project_image1')) {
                    $fdata = $this->upload->data();
                    $index = 'project_image1';
                    $data[$index] = $config['upload_path'] . $fdata['file_name'];
                }

                $config['image_library'] = 'gd2';
                $config['new_image'] = 'images/project_images/image_thumbnail/';
                $config['source_image'] = $data[$index];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = '100';
                $config['height'] = '100';
                $this->load->library('image_lib', $config);

                $this->image_lib->resize();

                if ($this->image_lib->resize()) {
                    $index = 'project_image2';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                }
            }
        }
//        ---------End Image Upload--------------

        $this->super_admin_model->update_project_info_by_id($data, $project_id);

        redirect('super_admin/manage_project');
    }

    public function delete_project($project_id) {

        $this->super_admin_model->delete_project_by_id($project_id);
        redirect('super_admin/manage_project');
    }

    public function delete_project_image($project_id) {

        $data = array();
        $this->super_admin_model->delete_project_image_by_id($project_id);
        $data['project_info'] = $this->super_admin_model->select_project_by_id($project_id);
        $data['admin_main_content'] = $this->load->view('admin/edit_project_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

//-----------------------------End Project Related Work--------------------------------
//-----------------------------Start Mission Related Work--------------------------------

    public function manage_mission() {

        $data = array();
        $data['all_mission_info'] = $this->super_admin_model->select_mission();
//                print_r($_POST);
//        print_r($data['all_mission_info'] );
//        exit();
        $data['admin_main_content'] = $this->load->view('admin/manage_mission_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_mission($mission_id) {

        $data = array();
        $data['mission_info'] = $this->super_admin_model->select_mission_by_id($mission_id);
        $data['admin_main_content'] = $this->load->view('admin/edit_mission_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_mission() {

        $data = array();
        $mission_id = $this->input->post('mission_id');
        $data['mission_title'] = $this->input->post('mission_title', true);
        $data['mission_short_description'] = $this->input->post('mission_short_description', true);
        $data['mission_long_description'] = $this->input->post('mission_long_description', true);
//                        print_r($_POST);
//        exit();

        $this->super_admin_model->update_mission_info_by_id($data, $mission_id);
        redirect('super_admin/manage_mission');
    }

//-----------------------------End Mission Related Work--------------------------------
//-----------------------------Start Gallery Related Work--------------------------------
    public function create_photo_album() {

        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/create_photo_album_content', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_photo_album() {
        $data = array();
        $data['album_name'] = $this->input->post('album_name', true);
        $data['album_publication_status'] = $this->input->post('album_publication_status', true);


//        ---------start Image Upload--------------

        $config['upload_path'] = 'images/album_images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '1500';
        $config['max_height'] = '1500';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $fdata = array();
        if ($this->upload->do_upload('album_image')) {

            $fdata = $this->upload->data();
            $data['album_image'] = $config['upload_path'] . $fdata['file_name'];
        }



//        ---------End Image Upload--------------
//        print_r($_POST);
//        print_r($data['album_image'] );
//        exit();
        $this->super_admin_model->save_album_info($data);
        $sdata = array();
        $sdata['message'] = 'Create Photo Album Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/create_photo_album');
    }

    public function edit_photo_album($album_id) {

        $data = array();
        $data['album_info'] = $this->super_admin_model->select_album_by_id($album_id);
        $data['admin_main_content'] = $this->load->view('admin/edit_photo_album_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function manage_photo_album() {

        $data = array();
        $config['base_url'] = base_url() . 'Super_Admin/manage_photo_album/';
        $config['total_rows'] = $this->db->count_all('tbl_photo_album');
        $config['per_page'] = 2;
        $config['num_links'] = $this->db->count_all('tbl_photo_album');
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination pagination-centered">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next &raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['all_album'] = $this->super_admin_model->select_all_album($config['per_page'], $this->uri->segment(3));
        $data['admin_main_content'] = $this->load->view('admin/manage_photo_album_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function publish_album($album_id) {

        $this->super_admin_model->update_album_publication_status_by_id($album_id);
        redirect('super_admin/manage_photo_album');
    }

    public function unpublish_album($album_id) {

        $this->super_admin_model->update_album_unpublication_status_by_id($album_id);
        redirect('super_admin/manage_photo_album');
    }

    public function update_album() {

        $data = array();
        $album_id = $this->input->post('album_id');
        $data['album_name'] = $this->input->post('album_name', true);
        $data['album_publication_status'] = $this->input->post('album_publication_status', true);


//        ---------start Image Upload--------------

        $config['upload_path'] = 'images/album_images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '1500';
        $config['max_height'] = '1500';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $fdata = array();
        if ($this->upload->do_upload('album_image')) {

            $fdata = $this->upload->data();
            $data['album_image'] = $config['upload_path'] . $fdata['file_name'];
        }



//        ---------End Image Upload--------------

        $this->super_admin_model->update_album_info_by_id($data, $album_id);
//        $sdata = array();
//        $sdata['message'] = 'Save Category Information Successfully !';
//        $this->session->set_userdata($sdata);

        redirect('super_admin/manage_photo_album');
    }

    public function delete_album($album_id) {

        $this->super_admin_model->delete_album_by_id($album_id);
        redirect('super_admin/manage_photo_album');
    }

    public function delete_album_image($album_id) {

        $data = array();
        $this->super_admin_model->delete_album_image_by_id($album_id);
        $data['album_info'] = $this->super_admin_model->select_album_by_id($album_id);
        $data['admin_main_content'] = $this->load->view('admin/edit_photo_album_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    //-----------------------Start Album Image Upload Related Work--------------
    public function upload_album_image() {

        $data = array();
        $data['all_published_album'] = $this->super_admin_model->select_all_published_album();
//        echo '<pr>';
//        print_r($data);
//        exit();
        $data['admin_main_content'] = $this->load->view('admin/upload_album_image_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_photo() {

//               print_r($_FILES);
//        exit(); 
        $data = array();
        $data['album_id'] = $this->input->post('album_id', true);
        $data['photo_publication_status'] = $this->input->post('photo_publication_status', true);
//        ---------start Image Upload--------------
        foreach ($_FILES as $eachFile) {
            if ($eachFile['size'] > 0) {

                $config['upload_path'] = 'images/gallery_images/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['max_width'] = '1500';
                $config['max_height'] = '1500';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('photo_image1')) {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } else {
                    $fdata = $this->upload->data();
                    $index = 'photo_image1';
                    $data[$index] = $config['upload_path'] . $fdata['file_name'];
                }

                $config['image_library'] = 'gd2';
                $config['new_image'] = 'images/gallery_images/gallery_image_thumbnail/';
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
                    $index = 'photo_image2';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                }
            }
        }
// $cnt=0;
//        foreach ($_FILES['photo_image1'] as $eachFile) {
//           
//            if ($eachFile) {
//                $data['album_id'] = $this->input->post('album_id', true);
//                $data['photo_publication_status'] = $this->input->post('photo_publication_status', true);
//                $config['upload_path'] = 'images/gallery_images/';
//                $config['allowed_types'] = 'gif|jpg|png';
//                $config['max_size'] = '2048';
//                $config['max_width'] = '1500';
//                $config['max_height'] = '1500';
//                $error = '';
//                $fdata = array();
//                $this->load->library('upload', $config);
//                $this->upload->initialize($config);
//
//                if (!$this->upload->do_multi_upload('photo_image1')) {
//                    $error = $this->upload->display_errors();
//                    echo $error;
//                    exit();
//                } else {
//                    $fdata = $this->upload->data();
//                    $index = 'photo_image1';
//                    $data[$index] = $config['upload_path'] . $fdata['file_name'];
//                }
//
//                $config['image_library'] = 'gd2';
//                $config['new_image'] = 'images/gallery_images/gallery_image_thumbnail/';
//                $config['source_image'] = $data[$index];
//                $config['create_thumb'] = TRUE;
//                $config['maintain_ratio'] = TRUE;
//                $config['width'] = '100';
//                $config['height'] = '100';
//                $this->load->library('image_lib', $config);
//
//                $this->image_lib->resize();
//
//                if (!$this->image_lib->resize()) {
//                    echo $this->image_lib->display_errors();
//                } else {
//                    $index = 'photo_image2';
//                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
//                }
//            }
//        
////                                    print_r($_POST);
////        print_r($_FILES);
////        exit();
////        ---------End --------------
//         $cnt++;}

        $this->super_admin_model->save_photo($data);

//               print_r($cnt);
//        exit();
        $sdata = array();
        $sdata['message'] = 'Upload Photos Successfully !';
        $this->session->set_userdata($sdata);

        redirect('super_admin/upload_album_image');
    }

//
//    public function edit_project($project_id) {
//
//        $data = array();
//        $data['all_published_project_category'] = $this->super_admin_model->select_all_published_project_category();
////        echo '<pr>';
////        print_r($data['all_published_project_category']);
////        exit();
//        $data['project_info'] = $this->super_admin_model->select_project_by_id($project_id);
//        $data['admin_main_content'] = $this->load->view('admin/edit_project_content', $data, true);
//        $this->load->view('admin/admin_master', $data);
//    }
//
    public function manage_photo() {

        $data = array();
        $config['base_url'] = base_url() . 'Super_Admin/manage_photo/';
        $config['total_rows'] = $this->db->count_all('tbl_photo_gallery');
        $config['per_page'] = 2;
        $config['num_links'] = $this->db->count_all('tbl_photo_gallery');
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination pagination-centered">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next &raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['all_photos'] = $this->super_admin_model->select_all_photos($config['per_page'], $this->uri->segment(3));
        $data['admin_main_content'] = $this->load->view('admin/manage_photo_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function publish_photo($photo_id) {

        $this->super_admin_model->update_photo_publication_status_by_id($photo_id);
        redirect('super_admin/manage_photo');
    }

    public function unpublish_photo($photo_id) {

        $this->super_admin_model->update_photo_unpublication_status_by_id($photo_id);
        redirect('super_admin/manage_photo');
    }

    public function edit_photo_info($photo_id) {

        $data = array();
        $data['photo_info'] = $this->super_admin_model->select_photos_by_photo_id($photo_id);
        $data['admin_main_content'] = $this->load->view('admin/update_photo_info_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_photo_info() {

        $data = array();
        $photo_id = $this->input->post('photo_id');
        $data['album_id'] = $this->input->post('album_id', true);
        $data['photo_publication_status'] = $this->input->post('photo_publication_status', true);
//                print_r($_POST);
//        print_r($_FILES);
//        exit();
//        ---------start Image Upload--------------

        foreach ($_FILES as $eachFile) {
            if ($eachFile['size'] > 0) {

                $config['upload_path'] = 'images/gallery_images/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['max_width'] = '1500';
                $config['max_height'] = '1500';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('photo_image1')) {
                    $fdata = $this->upload->data();
                    $index = 'photo_image1';
                    $data[$index] = $config['upload_path'] . $fdata['file_name'];
                }

                $config['image_library'] = 'gd2';
                $config['new_image'] = 'images/gallery_images/gallery_image_thumbnail/';
                $config['source_image'] = $data[$index];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = '100';
                $config['height'] = '100';
                $this->load->library('image_lib', $config);

                $this->image_lib->resize();

                if ($this->image_lib->resize()) {
                    $index = 'photo_image2';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                }
            }
        }
//        ---------End Image Upload--------------

        $this->super_admin_model->update_photo_info_by_id($data, $photo_id);

        redirect('super_admin/manage_photo');
    }

//
//    public function delete_project($project_id) {
//
//        $this->super_admin_model->delete_project_by_id($project_id);
//        redirect('super_admin/manage_project');
//    }
//
    public function delete_photo_image($photo_id) {

        $data = array();
        $this->super_admin_model->delete_photo_image_by_id($photo_id);
        $data['photo_info'] = $this->super_admin_model->select_photos_by_photo_id($photo_id);
        $data['admin_main_content'] = $this->load->view('admin/update_photo_info_content', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    //-----------------------End Album Image Upload Related Work----------------
//-----------------------------End Gallery Related Work--------------------------------
}
