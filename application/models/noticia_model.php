<?php

class Noticia_model extends CI_Model
{
    public function get_noticia($id) {
        return $this->db->get_where('tb_post', array('id' => $id))->row_array();
    }
}