<?php
    class Forma {
        private $id = 0;
        private $lado;
        private $cor;
        private $medida;
        
        public function __construct($pid, $plado, $pcor, $pmedida) {
            $this->setId($pid);
            $this->setLado($plado);
            $this->setCor($pcor);
            $this->setMedida($pmedida);
        }

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
    }
?>