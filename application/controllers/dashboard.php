<?php 
    class Dashboard extends CI_Controller 
    {
        public function index()
        {
            $data['barang'] = $this->model_barang->tampil_data()->result();
            $this->load->view('templats/header');
            $this->load->view('templats/sidebar');
            $this->load->view('dashboard', $data);
            $this->load->view('templats/footer');
            
        }
    }
    
?>