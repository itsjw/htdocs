<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bookCategory extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get($id){
        // return $this->db->get_where('posts', array('id' => $id))->row();
    }

    public function get_all() {
        $query = $this->db->get('bookCategory');
        return $query->result();
    }

    public function insert() {
        // $this->title = 'CodeIgniter 101';
        // $this->content = '<p>Say what you want about CI, it still rocks</p>';
        // $this->date = time();
        //
        // $this->db->insert('posts', $this);
    }

    public function update($id) {
        // $this->title = 'CodeIgniter 101';
        // $this->content = '<p>Say what you want about CI, it still rocks</p>';
        // $this->date = time();
        //
        // $this->db->update('posts', $this, array('id' => $id));
    }

    public function delete($id){
        // $this->db->delete('posts', array('id' => $id));
    }
}
