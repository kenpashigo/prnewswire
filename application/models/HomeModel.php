<?php
  class HomeModel extends CI_Model {
    public function getData() {
      $query = $this->db->query('SELECT * FROM noticias ORDER BY data DESC, titulo ASC');
      return $query->result();
    }
  }
?>