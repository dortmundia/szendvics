<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Szendvics extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Szendvics_model');      
    }


    public function index()
    {
        $szendvics = $this->szendvics_model->selectAll();        
        $data['szendvics']=$szendvics;
        $this->load->view('szendvics_list', $data);
    }


    public function add_szendvics()
    {
        $this->load->view('szendvics_add');
    }

    public function add_szendvics_post()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nev', 'Név', 'trim|required|min_length[3]|max_length[100]');
        $this->form_validation->set_rules('ar', 'Ár', 'trim|required|numeric|min_length[0]|max_length[10]');
        $this->form_validation->set_rules('ido', 'Elkészítési idő', 'trim|required|numeric|min_length[0]|max_length[10]');
        $this->form_validation->set_rules('leiras', 'Leírás', 'trim|required||min_length[10]|max_length[1000]');
    
        
        if ($this->form_validation->run() == FALSE) {
            
            redirect('add-szendvics');
        } 

        $nev= $this->input->post('nev');
        $ar = $this->input->post('ar');
        $ido = $this->input->post('ido');
        $leiras = $this->input->post('leiras');
        $data = array(
            'nev'=>$nev,
            'ar'=>$ar,
            'ido'=>$ido,
            'leiras'=>$leiras
        )
        
        $this->szendvics_model->insert($data);
    
        
        redirect('');
        
    }



}



?>