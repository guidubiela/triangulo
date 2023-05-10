<?php
    class Quadrado {

        // Atributos da class
        private $id;           //int
        private $lado;         //int  
        private $cor;          //string
        private $medida;

        public function __construct($pid, $plado, $pcor, $pmedida) {
            $this->setId($pid);
            $this->setLado($plado);
            $this->setCor($pcor);
            $this->setMedida($pmedida);
        }

        // método de get (ler as informações dos atributos)
        public function getId() {
            return $this->id;
        }
        public function getLado() {
            return $this->lado;
        }
        public function getCor() {
            return $this->cor;
        }
        public function getMedida() {
            return $this->medida;
        }        
        
        // método de set (definir ou alterar a informações dos atributos)
        public function setId($id) {
           $this->id = $id;
        }
        public function setLado($lado) {
            if($lado > 0)
                $this->lado = $lado;
            else    
                throw new Exception('Lado do quadrado inválido. Informe um valor válido.');
        }
        public function setCor($cor) {
            if($cor != '')    
                $this->cor =  $cor;
            else
                throw new Exception('Cor do quadrado inválida. Informe uma cor válida');
        }
        public function setMedida($medida) {
            if($medida != '')
                $this->medida =  $medida;
            else
                throw new Exception('Medida do quadrado inválida. Informe uma medida válida');
        }

        // métodos do banco

        public function inserir() {}
        public function excluir() {}
        public function editar() {}
        public function listar() {}

        // método desenho do quadrado
        public function desenhar() {
            $desenho = "<div class='desenho' style='width:{$this->getLado()}{$this->getMedida()};
                                    height:{$this->getLado()}{$this->getMedida()};
                                    background-color:{$this->getCor()}'>";
            return $desenho;
        }
    }
?>