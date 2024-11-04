<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teste extends CI_Controller {

    public function index() {
        $data['title'] = "Minha primeira view no CodeIgniter!";
        $data['message'] = "Olá, este é o seu primeiro teste com CodeIgniter 3.";
        
        // Carrega a view e passa os dados para ela
        $this->load->view('minha_view', $data);
    }
}
