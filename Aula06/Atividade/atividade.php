<?php 
    class Veiculo{
        protected $id;
        protected $velocidade = 0;
        public $cor;
        public $ano;
        public $marca;


        public function Veiculo($cor,$marca,$ano){
            $this->marca = $marca;
            $this->cor = $cor;
            $this->ano = $ano;
        }
        protected function Acelerar(){
            return $this-> velocidade;
        }
        public function exibirDetalhes(){
            echo("Marca:");
        }
    }

    class Carro extends Veiculo{

    }
    class Moto extends Veiculo{

    }
?>
