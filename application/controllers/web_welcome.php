<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Web_Welcome extends CI_Controller {

    public function index() {
        $data = array();
        $data['project_category'] = $this->welcome_model->select_all_published_project_category();
        $data['mission_info'] = $this->super_admin_model->select_mission();

//        echo '<pr>';
//        print_r($data['mission_info']);
//        exit();
        $data['latest_news'] = $this->welcome_model->select_latest_news();
        $data['slider'] = 1;
        $data['title'] = 'Home';
        $data['current1'] = 'current';
        $data['current2'] = '';
        $data['current3'] = '';
        $data['current4'] = '';
        $data['current5'] = '';
        $data['current6'] = '';
        $data['web_main_content'] = $this->load->view('mainsite/home_content', $data, true);
        $this->load->view('mainsite/web_master', $data);
    }

    public function what_we_do() {

        $data = array();
        $data['our_project'] = $this->welcome_model->select_our_project();
        $data['latest_project'] = $this->welcome_model->select_latest_project();
//                echo '<pr>';
//        print_r($data['latest_project']);
//        exit();
        $data['upcomming_events'] = $this->welcome_model->select_upcomming_events();
        $data['slider'] = '';
        $data['title'] = 'What We Do';
        $data['current1'] = '';
        $data['current2'] = 'current';
        $data['current3'] = '';
        $data['current4'] = '';
        $data['current5'] = '';
        $data['current6'] = '';
        $data['web_main_content'] = $this->load->view('mainsite/what_we_do_content', $data, true);
        $this->load->view('mainsite/web_master', $data);
    }

    public function contacts() {
        $data = array();
        $data['slider'] = '';
        $data['title'] = 'Contacts';
        $data['current1'] = '';
        $data['current2'] = '';
        $data['current3'] = '';
        $data['current4'] = '';
        $data['current5'] = 'current';
        $data['current6'] = '';
        $data['web_main_content'] = $this->load->view('mainsite/contacts_content', '', true);
        $this->load->view('mainsite/web_master', $data);
    }

    public function see_more_projects() {
        $data = array();
        $data['see_all_project'] = $this->welcome_model->see_all_published_project();
//        echo '<pr>';
//        print_r($data);
//        exit();
        $data['slider'] = '';
        $data['title'] = 'Projects';
        $data['current1'] = '';
        $data['current2'] = 'current';
        $data['current3'] = '';
        $data['current4'] = '';
        $data['current5'] = '';
        $data['current6'] = '';
        $data['web_main_content'] = $this->load->view('mainsite/see_more_projects_content', $data, true);
        $this->load->view('mainsite/web_master', $data);
    }

    public function gallery() {
        $data = array();
        $data['latest_news'] = $this->welcome_model->select_latest_news();
        $data['photo_album'] = $this->welcome_model->select_all_published_photo_album();
        $data['slider'] = '';
        $data['title'] = 'Gallery';
        $data['current1'] = '';
        $data['current2'] = '';
        $data['current3'] = 'current';
        $data['current4'] = '';
        $data['current5'] = '';
        $data['current6'] = '';
        $data['web_main_content'] = $this->load->view('mainsite/gallery_album_content', $data, true);
        $this->load->view('mainsite/web_master', $data);
    }

    public function member_login() {
        $data = array();
        $data['slider'] = '';
        $data['title'] = 'Login';
        $data['current1'] = '';
        $data['current2'] = '';
        $data['current3'] = '';
        $data['current4'] = '';
        $data['current5'] = '';
        $data['current6'] = 'current';
        $data['web_main_content'] = $this->load->view('mainsite/member_login_content', '', true);
        $this->load->view('mainsite/web_master', $data);
    }
    public function forgot_password() {
        $data = array();
        $data['slider'] = '';
        $data['title'] = 'Login';
        $data['current1'] = '';
        $data['current2'] = '';
        $data['current3'] = '';
        $data['current4'] = '';
        $data['current5'] = '';
        $data['current6'] = 'current';
        $data['web_main_content'] = $this->load->view('mainsite/forgot_password_content', '', true);
        $this->load->view('mainsite/web_master', $data);
    }

    public function member_signup() {
        $data = array();
        $data['slider'] = '';
        $data['title'] = 'Sign Up';
        $data['current1'] = '';
        $data['current2'] = '';
        $data['current3'] = '';
        $data['current4'] = '';
        $data['current5'] = '';
        $data['current6'] = '';
        $data['web_main_content'] = $this->load->view('mainsite/member_registration_content', '', true);
        $this->load->view('mainsite/web_master', $data);
    }

    public function check_user_login() {

        $user_email_address = $this->input->post('user_email_address', true);
        $user_password = $this->input->post('user_password', true);
//        echo '<pre>';
//        print_r($user_password);
//        exit();
        $result = $this->user_model->check_user_login_info($user_email_address, $user_password);


        $sdata = array();
        if ($result) {
            $sdata['user_first_name'] = $result->user_first_name;
            $sdata['user_last_name'] = $result->user_last_name;
            $sdata['user_full_name'] = $sdata['user_first_name'] . ' ' . $sdata['user_last_name'];
            $sdata['user_id'] = $result->user_id;
            $sdata['access_level'] = $result->access_level;
            $sdata['user_image1'] = $result->user_image1;
            $this->session->set_userdata($sdata);
            redirect('web_welcome');
        } else {
            $sdata['message'] = 'Your Email / Password Invalide!!';
            $this->session->set_userdata($sdata);
            redirect('web_welcome/member_login');
        }
    }

    public function user_logout() {
        $this->session->unset_userdata('user_first_name');
        $this->session->unset_userdata('user_last_name');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_image');
        $this->session->unset_userdata('access_level');


//        echo '<pr>';
//        print_r($s);
//        exit();
        $sdata = array();
        $sdata['message'] = 'You are Successfully Logout!!';
        $this->session->set_userdata($sdata);
        redirect('web_welcome/member_login');
    }

    public function news_details($news_id) {

        $data = array();
        $data['our_project'] = $this->welcome_model->select_our_project();
        $data['latest_project'] = $this->welcome_model->select_latest_project();
        $data['upcomming_events'] = $this->welcome_model->select_upcomming_events();
        $data['news_details'] = $this->super_admin_model->select_news_details_by_id($news_id);
        $data['slider'] = '';
        $data['title'] = 'News Details';
        $data['current1'] = '';
        $data['current2'] = 'current';
        $data['current3'] = '';
        $data['current4'] = '';
        $data['current5'] = '';
        $data['current6'] = '';
        $data['web_main_content'] = $this->load->view('mainsite/news_details', $data, true);
        $this->load->view('mainsite/web_master', $data);
    }

    public function events_details($events_id) {

        $data = array();
        $data['our_project'] = $this->welcome_model->select_our_project();
        $data['latest_project'] = $this->welcome_model->select_latest_project();
        $data['upcomming_events'] = $this->welcome_model->select_upcomming_events();
        $data['events_details'] = $this->super_admin_model->select_events_details_by_id($events_id);
        $data['slider'] = '';
        $data['title'] = 'Events Details';
        $data['current1'] = '';
        $data['current2'] = 'current';
        $data['current3'] = '';
        $data['current4'] = '';
        $data['current5'] = '';
        $data['current6'] = '';
        $data['web_main_content'] = $this->load->view('mainsite/events_details', $data, true);
        $this->load->view('mainsite/web_master', $data);
    }

    public function project_details($news_id) {

        $data = array();
        $data['our_project'] = $this->welcome_model->select_our_project();
        $data['latest_project'] = $this->welcome_model->select_latest_project();
        $data['upcomming_events'] = $this->welcome_model->select_upcomming_events();
        $data['project_details'] = $this->super_admin_model->select_project_details_by_id($news_id);
        $data['slider'] = '';
        $data['title'] = 'Project Details';
        $data['current1'] = '';
        $data['current2'] = 'current';
        $data['current3'] = '';
        $data['current4'] = '';
        $data['current5'] = '';
        $data['current6'] = '';
        $data['web_main_content'] = $this->load->view('mainsite/project_details', $data, true);
        $this->load->view('mainsite/web_master', $data);
    }

    public function category_projects($project_category_id) {
        $data = array();
        // $data['all_published_project_category'] = $this->super_admin_model->select_all_published_project_category();
        $data['select_project_by_category'] = $this->welcome_model->select_project_by_category_id($project_category_id);
//        echo '<pr>';
//        print_r($data);
//        exit();
        $data['slider'] = '';
        $data['title'] = 'Projects';
        $data['current1'] = '';
        $data['current2'] = 'current';
        $data['current3'] = '';
        $data['current4'] = '';
        $data['current5'] = '';
        $data['current6'] = '';
        $data['web_main_content'] = $this->load->view('mainsite/category_project_content', $data, true);
        $this->load->view('mainsite/web_master', $data);
    }

    public function mission_details() {

        $data = array();
        $data['our_project'] = $this->welcome_model->select_our_project();
        $data['mission_info'] = $this->super_admin_model->select_mission();
        $data['latest_project'] = $this->welcome_model->select_latest_project();
        $data['upcomming_events'] = $this->welcome_model->select_upcomming_events();
        $data['slider'] = '';
        $data['title'] = 'What We Do';
        $data['current1'] = '';
        $data['current2'] = 'current';
        $data['current3'] = '';
        $data['current4'] = '';
        $data['current5'] = '';
        $data['current6'] = '';
        $data['web_main_content'] = $this->load->view('mainsite/mission_details_content', $data, true);
        $this->load->view('mainsite/web_master', $data);
    }

    public function album_photos($album_id) {

        //  $data['all_published_photo_album'] = $this->super_admin_model->select_all_published_project_category();

        $data = array();
//        $config['base_url'] = base_url() . 'web_welcome/album_photos/';
//        $config['total_rows'] = $this->db->count_all('tbl_photo_gallery');
//        $config['per_page'] = 2;
//        $config['num_links'] = $this->db->count_all('tbl_photo_gallery');
//        $config['use_page_numbers'] = TRUE;
//        $config['full_tag_open'] = '<ul class="pagination pagination-centered">';
//        $config['full_tag_close'] = '</ul>';
//        $config['prev_link'] = '&laquo Prev';
//        $config['prev_tag_open'] = '<li>';
//        $config['prev_tag_close'] = '</li>';
//        $config['next_link'] = 'Next &raquo';
//        $config['next_tag_open'] = '<li>';
//        $config['next_tag_close'] = '</li>';
//        $config['cur_tag_open'] = '<li class="active"><a href="#">';
//        $config['cur_tag_close'] = '</a></li>';
//        $config['num_tag_open'] = '<li>';
//        $config['num_tag_close'] = '</li>';
//
//        $this->pagination->initialize($config);
//        echo '<pr>';
//        print_r($data);
//        exit();
        $data['slider'] = '';
        $data['title'] = 'Gallery';
        $data['current1'] = '';
        $data['current2'] = 'current';
        $data['current3'] = '';
        $data['current4'] = '';
        $data['current5'] = '';
        $data['current6'] = '';
//        $data['select_photos_by_album'] = $this->welcome_model->select_photos_by_album_id($album_id,$config['per_page'], $this->uri->segment(3));
        $data['select_photos_by_album'] = $this->welcome_model->select_photos_by_album_id($album_id);
//        echo '<pr>';
//        print_r($data);
//        exit();
        $data['web_main_content'] = $this->load->view('mainsite/album_photos_content', $data, true);
        $this->load->view('mainsite/web_master', $data);
    }

    public function our_team() {
        $data = array();
        $data['latest_news'] = $this->welcome_model->select_latest_news();
        $data['our_team'] = $this->welcome_model->select_all_admin();
        $data['slider'] = '';
        $data['title'] = 'Gallery';
        $data['current1'] = '';
        $data['current2'] = '';
        $data['current3'] = 'current';
        $data['current4'] = '';
        $data['current5'] = '';
        $data['current6'] = '';
//        echo '<pr>';
//        print_r($data);
//        exit();
        $data['web_main_content'] = $this->load->view('mainsite/our_team_content', $data, true);
        $this->load->view('mainsite/web_master', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */