<?php
  class user extends CI_Model {
    public function validate () {
      $arr['username'] = $this->input->post('username');
      $arr['password'] = md5($this->input->post('password'));
      return $this->db->get_where('Users', $arr)->row();
    }

    public function exists () {
      $arr['username'] = $this->input->post('username');
      return $this->db->get_where('Users', $arr)->row();
    }

    public function addUser() {
      $arr['username'] = $this->input->post('username');
      $arr['password'] = md5($this->input->post('password'));
      return $this->db->insert('Users', $arr);  
    }
  }
?>