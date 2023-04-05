<?php

    include "./model/BD.class.php";

    class ProdutoController{

        private $model;
        private $table = "produto";
        
        public function __construct(){
           
            $this->model = new BD();

        }
    //____________________________________________________________________________________

        public function salvar($dados){

            $this->model->inserir($this->table, $dados);
        }
    //____________________________________________________________________________________

        public function carregar(){

            return $this->model->select($this->table);
        }
    //____________________________________________________________________________________

        public function deletar($id){

            return $this->model->remove($this->table,$id);
        }
    //____________________________________________________________________________________

        public function update($dados){

            $this->model->update($this->table, $dados);
        }
    //____________________________________________________________________________________

        public function buscar($id){

            return $this->model->buscar($this->table,$id);
        }
    //____________________________________________________________________________________ 
    public function pesquisar($dados){

        return $this->model->pesquisar($this->table, $dados);
    }
    //____________________________________________________________________________________

    
}


   

?>