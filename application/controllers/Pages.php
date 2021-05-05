<?php 

    // PAGE CONTROLLER

    class Pages extends CI_Controller{
        
        // DEFAULT DA PÁGINA É O HOME
        public function view($page = 'home'){
            
            // CRIAR ARRAY $data PARA PASSAR O TÍTULO NO HEADER
            $data['title'] = ucfirst($page);

            // LOAD DAS VIEWS PARA PÁGINAS ESTÁTICAS
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page);
            $this->load->view('templates/footer');

        }

    }

?>