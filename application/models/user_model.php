<?php

class User_Model extends CI_Model {

    public function check_user_login_info($user_email_address, $user_password) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_email_address', $user_email_address);
        $this->db->where('user_password', md5($user_password));

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;   
    }
    public function check_user_email_info($user_email_address) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_email_address', $user_email_address);
        $this->db->where('activation_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;   
    }

    public function save_user_info($udata) {
        $this->db->insert('tbl_user',$udata);
        $user_id=$this->db->insert_id();
        $sdata=array();
        $sdata['user_id']=$user_id;
        $this->session->set_userdata($sdata);
    }
    
    public function update_user_activation_status($user_id) {
        $this->db->set('activation_status',1);
        $this->db->where('user_id',$user_id);
        $this->db->update('tbl_user');
    }
    public function select_user_profile_info_by_id($user_id) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_id',$user_id);
        $query_result=  $this->db->get();
        $result=$query_result->row();

        return $result ;
    }
    public function update_user_profile_info($data,$user_id) {

        $this->db->where('user_id',$user_id);
        $this->db->update('tbl_user',$data);
        
    }
    
}
