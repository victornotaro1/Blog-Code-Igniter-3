<?php

class BuscaPost_model extends CI_Model
{
    public function buscar($busca)
    {
        if(empty($busca)) {
            return [];
        }

        // Realiza a busca no banco de dados com o termo fornecido
        if (!empty($busca)) {
            $this->db->like("titulo", $busca); // Filtra por título
            $this->db->or_like("autor", $busca); // Filtra por autor, se não encontrar por título
            $this->db->or_like("categoria", $busca); // Filtra por autor, se não encontrar por título
        }
        
        
        
        return $this->db->get("tb_post")->result_array();
    }
}
