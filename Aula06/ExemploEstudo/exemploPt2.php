<?php
    require_once "exemploPt1.php";
    class Funcionario extends Pessoa{
        //Propiedades especifica da classe funcionario
        private $salario;
        //Construtor da classe funcionario
        public function _constructF($nome,$idade,$salario){
            parent::_construct($nome,$idade);
            $this-> salario = $salario;
        }

        //Metodo para exibir informação do Funcionario
        public function exibirInformacoes()
        {
            parent::exibirInformacoes();
            echo ("Salario: " . $this-> salario . "<br>");
        }
    }
?>