<?php

class Welcome_Model extends CI_Model {

    public function select_latest_news() {

        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('news_publication_status', 1);
        $this->db->order_by('news_id', 'desc');
        $this->db->limit(4);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_upcomming_events() {

        $this->db->select('*');
        $this->db->from('tbl_events');
        $this->db->where('events_publication_status', 1);
        $this->db->order_by('events_id', 'desc');
        $this->db->limit(4);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_our_project() {

        $this->db->select('*');
        $this->db->from('tbl_project');
        $this->db->where('project_publication_status', 1);
        $this->db->order_by('project_id', 'desc');
        $this->db->limit(4);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_latest_project() {

        
        $this->db->select('*');
        $this->db->from('tbl_project');
        
        $this->db->where('project_publication_status', 1);
        $this->db->order_by('project_id', 'desc');
//        $this->db->where('project_id', $this->db->select_max('project_id'));
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function see_all_published_project() {

        $this->db->select('*');
        $this->db->from('tbl_project');
        $this->db->where('project_publication_status', 1);
        $this->db->order_by('project_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_project_category() {

        $this->db->select('*');
        $this->db->from('tbl_project_category');
        $this->db->where('project_category_publication_status', 1);
        $this->db->order_by('project_category_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_project_by_category_id($project_category_id) {

        $this->db->select('*');
        $this->db->from('tbl_project');
        $this->db->where('project_category_id', $project_category_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_photo_album() {

        $this->db->select('*');
        $this->db->from('tbl_photo_album');
        $this->db->where('album_publication_status', 1);
        $this->db->order_by('album_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_photos_by_album_id($album_id) {

//        if ($offset == null) {
//            $offset = 0;
//        }

        $this->db->select('*');
        $this->db->from('tbl_photo_gallery');
        $this->db->where('album_id', $album_id);
        $this->db->where('photo_publication_status', 1);
//        $this->db->limit($per_page, $offset);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
        public function select_all_admin() {

        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->order_by('admin_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

}
