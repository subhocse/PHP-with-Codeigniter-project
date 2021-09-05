<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Blog_Welcome extends CI_Controller {

    public function index() {
        $data=array();
        $data['slider']=1;
        $data['blog_main_content'] = $this->load->view('blogsite/blog_home_content', '', true);
      //  $this->load->view('blogsite/blog_master',$data);
    }
    public function support() {
        $data=array();
        $data['slider']='';
        $data['blog_main_content'] = $this->load->view('blogsite/support_content', '', true);
        $this->load->view('blogsite/blog_master',$data);
    }
    public function about() {
        $data=array();
        $data['slider']='';
        $data['blog_main_content'] = $this->load->view('blogsite/about_content', '', true);
        $this->load->view('blogsite/blog_master',$data);
    }
    public function contact() {
        $data=array();
        $data['slider']='';
        $data['blog_main_content'] = $this->load->view('blogsite/contact_content', '', true);
        $this->load->view('blogsite/blog_master',$data);
    }

}
