<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		permission();
		$this->load->model("home_model");
		$this->load->model("Posts_model"); // Carrega o modelo de postagens
		
	}

    public function index() {
        $dados['title'] = "Minha primeira view no CodeIgniter!";
        $dados['message'] = "Olá, este é o seu primeiro teste com CodeIgniter 3.";
        $dados['games'] = $this->home_model->index(); // Adiciona a lista de jogos à variável $data
		$dados["posts"] = $this->Posts_model->index(); // Recupera todas as postagens
		
        
        // Carrega a view e passa os dados para ela
        $this->load->view('templates/cabecalho', $dados);
        $this->load->view('pages/home', $dados);
        $this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
        
    }

    
	public function listarPosts()
	{
		$dados["posts"]  = $this->posts_model->index();
		$dados["title"] = "posts - CodeIgniter";

		$this->load->view('pages/posts', $dados);
	}

	public function listarGames()
	{
		$dados["games"]  = $this->home_model->index();
		$dados["title"] = "Games - CodeIgniter";

		$this->load->view('pages/games', $dados);
	}
}
