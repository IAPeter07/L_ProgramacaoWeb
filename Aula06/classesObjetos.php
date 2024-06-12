<?php
    class Usuario{
        //Atributos da Classe
        public $nome;
        protected $cpf;
        private $endereco;

        //construtor da classe
        function Usuario(){
            $this-> prepararUsuario();
        }

        //Metodos
        private function prepararUsuario(){
            $this-> nome = "Leonardo";
            $this-> cpf = "777.151.777.51";
            $this-> endereco = "Rua fulano de Tal";
        }

        public function getCpf(){
            return $this-> cpf;
        }

        public function getNome(){
            return $this->nome;
        }

        function getEndereco(){
            return $this->endereco;
        }
    }

    //Instanciando o objeto e acessando seus respectivos métodos
    $usu = new Usuario();
    $usu -> getCpf();
    $usu -> getNome();
?>
