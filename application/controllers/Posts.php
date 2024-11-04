<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        permission(); // Verifica permissões, se necessário
        $this->load->model("Posts_model"); // Carrega o modelo de postagens
    }

    // Exibe a lista de postagens
    public function index()
    {
        $dados["posts"] = $this->Posts_model->index(); // Recupera todas as postagens
        $dados["title"] = "Postagens - CodeIgniter";

        // Carrega as views
        $this->load->view('templates/header', $dados);
        $this->load->view('templates/nav-top', $dados);
        $this->load->view('pages/posts', $dados); // View para listar postagens
        $this->load->view('templates/footer', $dados);
        $this->load->view('templates/js', $dados);
    }
    
	

    // Exibe o formulário para criar uma nova postagem
    public function new()
    {
        $dados["title"] = "Nova Postagem - CodeIgniter";

        $this->load->view('templates/header', $dados);
        $this->load->view('templates/nav-top', $dados);
        $this->load->view('pages/form-posts', $dados); // View para o formulário de nova postagem
        $this->load->view('templates/footer', $dados);
        $this->load->view('templates/js', $dados);
    }

    // Armazena a nova postagem
    public function store()
    {
        $post = $_POST; // Obtém os dados do formulário
        $post["user_id"] = $_SESSION["logged_user"]["id"]; // Adiciona o ID do usuário logado
        $this->Posts_model->store($post); // Chama o método de armazenamento no modelo
        redirect("posts"); // Redireciona para a lista de postagens
    }

    // Exibe o formulário para editar uma postagem
    public function edit($id)
    {
        $dados["post"] = $this->Posts_model->show($id); // Recupera a postagem pelo ID
        $dados["title"] = "Editar Postagem - CodeIgniter";

        $this->load->view('templates/header', $dados);
        $this->load->view('templates/nav-top', $dados);
        $this->load->view('pages/form-posts', $dados); // View para o formulário de edição
        $this->load->view('templates/footer', $dados);
        $this->load->view('templates/js', $dados);
    }

    // Atualiza a postagem
    public function update($id)
    {
        $post = $_POST; // Obtém os dados do formulário
        $this->Posts_model->update($id, $post); // Chama o método de atualização no modelo
        redirect("posts"); // Redireciona para a lista de postagens
    }

    // Exclui a postagem
    public function destroy($id)
    {
        $this->Posts_model->destroy($id); // Chama o método de destruição no modelo
        redirect("posts"); // Redireciona para a lista de postagens
    }
}
