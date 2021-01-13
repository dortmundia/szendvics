<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Szendvicsek_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    

    public function selectAll()
    {
        return $this->db->get('szendvics')->result_array();
    }


    public function insert($data)
    {
        $this->db->insert('szendvics', $data);
        return $this->db->insert_id();
    }


    public function update($id,$data)
    {
        $this->db->where('id',$id);        
        $this->db->update('szendvics',$data);
    }


    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('szendvics');
    }
}

?>