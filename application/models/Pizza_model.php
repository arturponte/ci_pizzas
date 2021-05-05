
<?php 

    class Pizza_model extends CI_Model{

        // CONSTRUCTOR PARA O LOAD DA BASE DE DADOS
        public function __construct(){
            $this->load->database();
        }


        //---------------------- GET PIZZAS METHOD // DEFAULT DE ID COMO FALSE

        public function get_pizzas($id = FALSE){

            // SE NÃO TIVER ID DEVOLVE TODAS AS PIZZAS
            
            if($id === FALSE){
                $this->db->order_by('id', 'DESC'); // ORDEM DECRESCENTE
                $query = $this->db->get('pizzas'); // SELECT * FROM pizzas
                return $query->result_array();
            }
            
            // SE TIVER ID DEVOLVE SÓ A PIZZA DESSE ID

            $query =  $this->db->get_where('pizzas', array('id' => $id));
            // SELECT * FROM pizzas WHERE $id = 'id'
            return $query->row_array();

        }


        //---------------------- ADD PIZZA

        public function add_pizza(){

            // PROTEGER OS DADOS DO NAME
            $name = htmlspecialchars($this->input->post('pizza-name'));

            
            // PROTEGER OS DADOS DOS INGREDIENTS
            $ingredients = htmlspecialchars($this->input->post('pizza-ingredients'));

            // RECOLHER TODOS OS DADOS INSERIDOS DENTRO DE UM ARRAY PARA IR PARA A BASE DE DADOS
            $data = array(
                'name' => $name,
                'ingredients' => $ingredients
            );

            return $this->db->insert('pizzas', $data);
            // INSERT INTO pizzas (name, ingredients) VALUES ('name', 'ingredients')

        }


        //---------------------- DELETE PIZZA

        public function delete_pizza($id){

            //$this->db->where('id', $id); // WHERE $id = 'id'
            //$this->db->delete('pizzas'); // DELETE FROM pizzas
            // OU:
            $this->db->delete('pizzas', array('id' => $id)); // DELETE FROM pizzas WHERE 'id' = $id

            return true;

        }

        //---------------------- UPDATE PIZZA

        public function update_pizza(){

            //echo $this->input->post('pizza-id');

            $name = htmlspecialchars($this->input->post('pizza-name'));
            $ingredients = htmlspecialchars($this->input->post('pizza-ingredients'));

            $data = array(
                'name' => $name,
                'ingredients' => $ingredients
            );
            
            $this->db->where('id', $this->input->post('pizza-id'));
            return $this->db->update('pizzas', $data);

        }


    }

?>