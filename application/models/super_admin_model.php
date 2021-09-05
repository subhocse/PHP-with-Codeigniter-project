<?php

class Super_Admin_Model extends CI_Model {

//public function save_admin_info($data){
//    $this->db->insert('tbl_admin',$data);
//    
//}


    public function check_admin_password($admin_password) {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_password', md5($admin_password));

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_my_photo_by_id($data, $admin_id) {

        $this->db->where('admin_id', $admin_id);
        $this->db->update('tbl_admin', $data);
    }

    public function delete_my_image_by_id($admin_id) {
        $sql = "SELECT * FROM tbl_admin WHERE admin_id='$admin_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        unlink("$result->admin_image1");
        $this->db->set('admin_image1', '');
        unlink("$result->admin_image2");
        $this->db->set('admin_image2', '');
        $this->db->where('admin_id', $admin_id);
        $this->db->update('tbl_admin');
    }

    public function select_admin_info_by_id($admin_id) {

        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_id', $admin_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
//        echo '<pr>';
//        print_r($result);
//        exit();
        return $result;
    }

//-----------------------------Start News Related Work--------------------------------
    public function save_news_info($data) {

        $this->db->insert('tbl_news', $data);
    }

    public function select_all_news($per_page, $offset) {

        if ($offset == null) {
            $offset = 0;
        }

        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->limit($per_page, $offset);
        $this->db->order_by('news_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_news_by_id($news_id) {

        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('news_id', $news_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_news_details_by_id($news_id) {

        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('news_id', $news_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_news_publication_status_by_id($news_id) {

        $this->db->set('news_publication_status', 1);
        $this->db->where('news_id', $news_id);
        $this->db->update('tbl_news');
    }

    public function update_news_unpublication_status_by_id($news_id) {

        $this->db->set('news_publication_status', 0);
        $this->db->where('news_id', $news_id);
        $this->db->update('tbl_news');
    }

    public function update_news_info_by_id($data, $news_id) {

        $this->db->where('news_id', $news_id);
        $this->db->update('tbl_news', $data);
    }

    public function delete_news_by_id($news_id) {

        $this->db->where('news_id', $news_id);
        $this->db->delete('tbl_news');
    }

    public function delete_news_image_by_id($news_id) {
        $sql = "SELECT * FROM tbl_news WHERE news_id='$news_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        unlink("$result->news_image");
        $this->db->set('news_image', '');
        $this->db->where('news_id', $news_id);
        $this->db->update('tbl_news');
    }

    //-----------------------------End News Related Work--------------------------------
//-----------------------------Start Events Related Work--------------------------------
    public function save_events_info($data) {

        $this->db->insert('tbl_events', $data);
    }

    public function select_all_events($per_page, $offset) {

        if ($offset == null) {
            $offset = 0;
        }

        $this->db->select('*');
        $this->db->from('tbl_events');
        $this->db->limit($per_page, $offset);
        $this->db->order_by('events_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_events_by_id($events_id) {

        $this->db->select('*');
        $this->db->from('tbl_events');
        $this->db->where('events_id', $events_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_events_details_by_id($events_id) {

        $this->db->select('*');
        $this->db->from('tbl_events');
        $this->db->where('events_id', $events_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_events_publication_status_by_id($events_id) {

        $this->db->set('events_publication_status', 1);
        $this->db->where('events_id', $events_id);
        $this->db->update('tbl_events');
    }

    public function update_events_unpublication_status_by_id($events_id) {

        $this->db->set('events_publication_status', 0);
        $this->db->where('events_id', $events_id);
        $this->db->update('tbl_events');
    }

    public function update_events_info_by_id($data, $events_id) {

        $this->db->where('events_id', $events_id);
        $this->db->update('tbl_events', $data);
    }

    public function delete_events_by_id($events_id) {

        $this->db->where('events_id', $events_id);
        $this->db->delete('tbl_events');
    }

    public function delete_events_image_by_id($events_id) {
        $sql = "SELECT * FROM tbl_events WHERE events_id='$events_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        unlink("$result->events_image");
        $this->db->set('events_image', '');
        $this->db->where('events_id', $events_id);
        $this->db->update('tbl_events');
    }

    //-----------------------------End Events Related Work--------------------------------
    //-----------------------------Start Project Related Work--------------------------------

    public function save_project_category_info($data) {

        $this->db->insert('tbl_project_category', $data);
    }

    public function select_all_project_category($per_page, $offset) {

        if ($offset == null) {
            $offset = 0;
        }

        $this->db->select('*');
        $this->db->from('tbl_project_category');
        $this->db->limit($per_page, $offset);
        $this->db->order_by('project_category_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_project_category_by_id($project_category_id) {

        $this->db->select('*');
        $this->db->from('tbl_project_category');
        $this->db->where('project_category_id', $project_category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

//    public function select_events_details_by_id($events_id) {
//
//        $this->db->select('*');
//        $this->db->from('tbl_events');
//        $this->db->where('events_id', $events_id);
//        $query_result = $this->db->get();
//        $result = $query_result->row();
//        return $result;
//    }

    public function update_project_category_publication_status_by_id($project_category_id) {

        $this->db->set('project_category_publication_status', 1);
        $this->db->where('project_category_id', $project_category_id);
        $this->db->update('tbl_project_category');
    }

    public function update_project_category_unpublication_status_by_id($project_category_id) {

        $this->db->set('project_category_publication_status', 0);
        $this->db->where('project_category_id', $project_category_id);
        $this->db->update('tbl_project_category');
    }

    public function update_project_category_info_by_id($data, $project_category_id) {

        $this->db->where('project_category_id', $project_category_id);
        $this->db->update('tbl_project_category', $data);
    }

    public function delete_project_category_by_id($project_category_id) {

        $this->db->where('project_category_id', $project_category_id);
        $this->db->delete('tbl_project_category');
    }

    public function delete_project_category_image_by_id($project_category_id) {
        $sql = "SELECT * FROM tbl_project_category WHERE project_category_id='$project_category_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        unlink("$result->project_category_image");
        $this->db->set('project_category_image', '');
        $this->db->where('project_category_id', $project_category_id);
        $this->db->update('tbl_project_category');
    }

    public function select_all_published_project_category() {

        $this->db->select('*');
        $this->db->from('tbl_project_category');
        $this->db->where('project_category_publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function save_project_info($data) {

        $this->db->insert('tbl_project', $data);
    }

    public function select_all_project($per_page, $offset) {

        if ($offset == null) {
            $offset = 0;
        }

        $this->db->select('*');
        $this->db->from('tbl_project');
        $this->db->limit($per_page, $offset);
        $this->db->order_by('project_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_project_by_id($project_id) {

        $this->db->select('*');
        $this->db->from('tbl_project');
        $this->db->where('project_id', $project_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_project_details_by_id($project_id) {

        $this->db->select('*');
        $this->db->from('tbl_project');
        $this->db->where('project_id', $project_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_project_publication_status_by_id($project_id) {

        $this->db->set('project_publication_status', 1);
        $this->db->where('project_id', $project_id);
        $this->db->update('tbl_project');
    }

    public function update_project_unpublication_status_by_id($project_id) {

        $this->db->set('project_publication_status', 0);
        $this->db->where('project_id', $project_id);
        $this->db->update('tbl_project');
    }

    public function update_project_info_by_id($data, $project_id) {

        $this->db->where('project_id', $project_id);
        $this->db->update('tbl_project', $data);
    }

    public function delete_project_by_id($project_id) {

        $this->db->where('project_id', $project_id);
        $this->db->delete('tbl_project');
    }

    public function delete_project_image_by_id($project_id) {
        $sql = "SELECT * FROM tbl_project WHERE project_id='$project_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        unlink("$result->project_image1");
        $this->db->set('project_image1', '');
        unlink("$result->project_image2");
        $this->db->set('project_image2', '');
        $this->db->where('project_id', $project_id);
        $this->db->update('tbl_project');
    }

    //-----------------------------End Project Related Work--------------------------------
    //-----------------------------Start Mission Related Work--------------------------------

    public function select_mission() {

        $this->db->select('*');
        $this->db->from('tbl_mission');
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_mission_by_id($mission_id) {

        $this->db->select('*');
        $this->db->from('tbl_mission');
        $this->db->where('mission_id', $mission_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_mission_details_by_id($mission_id) {

        $this->db->select('*');
        $this->db->from('tbl_mission');
        $this->db->where('mission_id', $mission_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_mission_info_by_id($data, $mission_id) {

        $this->db->where('mission_id', $mission_id);
        $this->db->update('tbl_mission', $data);
    }

    //-----------------------------End Mission Related Work--------------------------------
    //-----------------------------Start Album Related Work--------------------------------
    public function save_album_info($data) {

        $this->db->insert('tbl_photo_album', $data);
    }

    public function select_all_album($per_page, $offset) {

        if ($offset == null) {
            $offset = 0;
        }

        $this->db->select('*');
        $this->db->from('tbl_photo_album');
        $this->db->limit($per_page, $offset);
        $this->db->order_by('album_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_album_by_id($album_id) {

        $this->db->select('*');
        $this->db->from('tbl_photo_album');
        $this->db->where('album_id', $album_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_album_details_by_id($album_id) {

        $this->db->select('*');
        $this->db->from('tbl_photo_album');
        $this->db->where('album_id', $album_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_album_publication_status_by_id($album_id) {

        $this->db->set('album_publication_status', 1);
        $this->db->where('album_id', $album_id);
        $this->db->update('tbl_photo_album');
    }

    public function update_album_unpublication_status_by_id($album_id) {

        $this->db->set('album_publication_status', 0);
        $this->db->where('album_id', $album_id);
        $this->db->update('tbl_photo_album');
    }

    public function update_album_info_by_id($data, $album_id) {

        $this->db->where('album_id', $album_id);
        $this->db->update('tbl_photo_album', $data);
    }

    public function delete_album_by_id($album_id) {

        $this->db->where('album_id', $album_id);
        $this->db->delete('tbl_photo_album');
    }

    public function delete_album_image_by_id($album_id) {
        $sql = "SELECT * FROM tbl_photo_album WHERE album_id='$album_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        unlink("$result->album_image");
        $this->db->set('album_image', '');
        $this->db->where('album_id', $album_id);
        $this->db->update('tbl_photo_album');
    }

    //-----------------------------End Album Related Work--------------------------------
    //-----------------------------Start Album Image Upload Related Work--------------------------------

    public function select_all_published_album() {

        $this->db->select('*');
        $this->db->from('tbl_photo_album');
        $this->db->where('album_publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function save_photo($data) {

        $this->db->insert('tbl_photo_gallery', $data);
    }

    public function select_all_photos($per_page, $offset) {

        if ($offset == null) {
            $offset = 0;
        }

        $this->db->select('*');
        $this->db->from('tbl_photo_gallery');
        $this->db->join('tbl_photo_album', 'tbl_photo_album.album_id=tbl_photo_gallery.album_id');
        $this->db->limit($per_page, $offset);
        $this->db->order_by('photo_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
//        echo '<pr>';
//        print_r($result);
//        exit();
        return $result;
    }

    public function select_photo_by_id($photo_id) {

        $this->db->select('*');
        $this->db->from('tbl_photo_gallery');
        $this->db->where('photo_id', $photo_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

//    public function select_photo_details_by_id($photo_id) {
//
//        $this->db->select('*');
//        $this->db->from('tbl_photo_gallery');
//        $this->db->where('photo_id', $photo_id);
//        $query_result = $this->db->get();
//        $result = $query_result->row();
//        return $result;
//    }


    public function update_photo_info_by_id($data, $photo_id) {

        $this->db->where('photo_id', $photo_id);
        $this->db->update('tbl_photo_gallery', $data);
    }

    public function update_photo_publication_status_by_id($photo_id) {

        $this->db->set('photo_publication_status', 1);
        $this->db->where('photo_id', $photo_id);
        $this->db->update('tbl_photo_gallery');
    }

    public function update_photo_unpublication_status_by_id($photo_id) {

        $this->db->set('photo_publication_status', 0);
        $this->db->where('photo_id', $photo_id);
        $this->db->update('tbl_photo_gallery');
    }

    public function select_photos_by_photo_id($photo_id) {

        $this->db->select('*');
        $this->db->from('tbl_photo_gallery');
        $this->db->join('tbl_photo_album', 'tbl_photo_album.album_id=tbl_photo_gallery.album_id');
        $this->db->where('photo_id', $photo_id);
        $this->db->order_by('photo_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->row();
//        echo '<pr>';
//        print_r($result);
//        exit();
        return $result;
    }

    public function delete_photo_image_by_id($photo_id) {
        $sql = "SELECT * FROM tbl_photo_gallery WHERE photo_id='$photo_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        unlink("$result->photo_image1");
        $this->db->set('photo_image1', '');
        unlink("$result->photo_image2");
        $this->db->set('photo_image2', '');
        $this->db->where('photo_id', $photo_id);
        $this->db->update('tbl_photo_gallery');
    }

    //-----------------------------End Album Image Upload Related Work--------------------------------
//------------------------Start Manage User Related Work----------------------------------

    public function select_all_user($per_page, $offset) {

        if ($offset == null) {
            $offset = 0;
        }

        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->limit($per_page, $offset);
        $this->db->order_by('user_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function update_user_activation_status_by_id($user_id) {

        $this->db->set('activation_status', 1);
        $this->db->where('user_id', $user_id);
        $this->db->update('tbl_user');
    }

    public function update_user_inactivation_status_by_id($user_id) {

        $this->db->set('activation_status', 0);
        $this->db->where('user_id', $user_id);
        $this->db->update('tbl_user');
    }

    public function show_user_profile_info_by_id($user_id) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }

    public function delete_user_by_id($user_id) {

        $this->db->where('user_id', $user_id);
        $this->db->delete('tbl_user');
    }

//------------------------End Manage User Related Work----------------------------------
}
