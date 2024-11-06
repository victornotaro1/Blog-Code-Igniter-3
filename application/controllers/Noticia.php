<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia extends CI_Controller {
    
    public function index() {
        $dados['title'] = "Home - Blog";
        $dados['post'] = $this->Noticia_model->index(); // Adiciona a lista de jogos à variável $data
		
        
        // Carrega a view e passa os dados para ela
        $this->load->view('templates/cabecalho', $dados);
        $this->load->view('pages/noticia_ver', $dados);
        $this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
        
    }

    public function ver($id) {
        // Carrega o modelo de notícias
        $this->load->model('Noticia_model');
    
        // Busca o post pelo ID
        $dados['post'] = $this->Noticia_model->get_noticia($id);
    
        // Carrega a view com os dados
        $this->load->view('templates/cabecalho', $dados);
        $this->load->view('pages/noticia_ver', $dados);
		$this->load->view('templates/js', $dados);
    }

    
    
   
}
