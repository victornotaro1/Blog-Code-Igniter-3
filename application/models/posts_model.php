<?php

class Posts_model extends CI_Model
{
    public function index()
    {
        $this->db->order_by("id", "DESC"); // Ordena as postagens pela ID
        return $this->db->get("tb_post")->result_array(); // Retorna todas as postagens
    }

    public function store($data)
    {
        return $this->db->insert("tb_post", $data); // Insere uma nova postagem
    }

    public function show($id)
    {
        return $this->db->get_where("tb_post", array("id" => $id))->row_array(); // Recupera a postagem pelo ID
    }

    public function update($id, $data)
    {
        $this->db->where("id", $id);
        return $this->db->update("tb_post", $data); // Atualiza a postagem
    }

    public function destroy($id)
    {
        $this->db->where("id", $id);
        return $this->db->delete("tb_post"); // Remove a postagem
    }
}
