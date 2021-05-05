<?php 

    // PIZZAS CONTROLLER

    class Pizzas extends CI_Controller{

        // TODAS AS PIZZAS
        
        public function index(){
            
            $data['title'] = 'Latest Pizzas';
            $data['pizzas'] = $this->Pizza_model->get_pizzas();

            // PARA VER O RESULTADO DA FUNÇÃO get_pizzas() --> print_r($data['pizzas']);

            // LOAD DAS VIEWS PARA PÁGINAS ESTÁTICAS
            $this->load->view('templates/header', $data);
            $this->load->view('pizzas/index', $data);
            $this->load->view('templates/footer');

        }

        // PÁGINA DA PIZZA

        public function view($id = NULL){
            
            // PROCURA OS DADOS DESSE ID
            $data['pizza'] = $this->Pizza_model->get_pizzas($id);

            // SE NÃO EXISTIR ID, FAZ REDIRECT
            if(empty($data['pizza'])){
                redirect('pizzas');
            }

            // DADOS PARA ENVIAR AO HEADER 
            $data['title'] = $data['pizza']['name'];

            // LOAD DAS VIEWS PARA AS PÁGINAS DINÂMICAS
            $this->load->view('templates/header', $data);
            $this->load->view('pizzas/view', $data);
            $this->load->view('templates/footer');

        }

        // ADD PIZZA

        public function add(){

            $data['title'] = 'Add a Pizza';

            // CRIAR AS REGRAS PARA A VALIDAÇÃO DO FORMULÁRIO

            $this->form_validation->set_rules('pizza-name', '<strong>name</strong>', 'required');
            $this->form_validation->set_rules('pizza-ingredients', '<strong>ingredients</strong>', 'required');

            // SE ENTRAR NA PRIMEIRA VEZ OU TIVER ERROS NO FORM, CONTINUA NA PÁGINA ADD A PIZZA
            if($this->form_validation->run() === FALSE){

                $this->load->view('templates/header', $data);
                $this->load->view('pizzas/add', $data);
                $this->load->view('templates/footer');

            } else {

                // SE O FORM FOR SUBMETIDO, CORRE A FUNÇÃO add_pizza() DESCRITA NO MODEL E REDICIONA PARA AS LATEST PIZZAS
                $this->Pizza_model->add_pizza();
                redirect('pizzas');
            }

        }


        // DELETE PIZZA

        public function delete($id){

            // SÓ PARA TESTAR: echo $id;

            // CORRE A FUNÇÃO PARA APAGAR E REDIRECIONA A TODAS AS PIZZAS
            $this->Pizza_model->delete_pizza($id);
            redirect('pizzas');

        }


        // EDIT PIZZA

        public function edit($id){

            // PROCURA OS DADOS DESSE ID
            $data['pizza'] = $this->Pizza_model->get_pizzas($id);

            // SE NÃO EXISTIR ID, FAZ REDIRECT
            if(empty($data['pizza'])){
                redirect('pizzas');
            }

            // DADOS PARA ENVIAR AO HEADER 
            $data['title'] = 'Edit Pizza';

            $this->form_validation->set_rules('pizza-name', '<strong>name</strong>', 'required');
            $this->form_validation->set_rules('pizza-ingredients', '<strong>ingredients</strong>', 'required');

            if($this->form_validation->run() === FALSE){

                // LOAD DAS VIEWS PARA AS PÁGINAS DINÂMICAS
                $this->load->view('templates/header', $data);
                $this->load->view('pizzas/edit', $data);
                $this->load->view('templates/footer');
            
            } else {

                $this->Pizza_model->update_pizza();
                redirect('pizzas/'.$data['pizza']['id']);

            }

        }

    }

?>





