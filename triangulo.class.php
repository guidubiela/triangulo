<?php
    class Triangulo {

        // Atributos da class
        private $id;           //int
        private $tipoTriangulo;
        private $lado1;
        private $lado2;
        private $lado3;         //int  
        private $cor;          //string
        private $medida;
        private $area;

        public function __construct($pid, $ptipoTriangulo, $plado1, $plado2, $plado3, $pcor, $pmedida) {
            $this->setId($pid);
            $this->setTipoTriangulo($ptipoTriangulo);
            $this->setLado1($plado1);
            $this->setLado2($plado2);
            $this->setLado3($plado3);
            $this->setCor($pcor);
            $this->setMedida($pmedida);
            $this->setArea($ptipoTriangulo, $plado1, $plado2, $plado3);
        }

        // método de get (ler as informações dos atributos)
        public function getId() {
            return $this->id;
        }
        public function getTipoTriangulo() {
            return $this->TipoTriangulo;
        }
        public function getLado1() {
            return $this->lado1;
        }
        public function getLado2() {
            return $this->lado2;
        }
        public function getLado3() {
            return $this->lado3;
        }
        public function getCor() {
            return $this->cor;
        }
        public function getMedida() {
            return $this->medida;
        }
        public function getArea() {
            return $this->area;
        }       
        
        // método de set (definir ou alterar a informações dos atributos)
        public function setId($id) {
           $this->id = $id;
        }
        public function setTipoTriangulo($tipoTriangulo) {
            if($tipoTriangulo != '')
                $this->tipoTriangulo = $tipoTriangulo;
            else
                throw new Exception('Tipo do triângulo inválido. Informe um tipo existente.');
        }
        public function setLado1($lado1) {
            if($lado1 > 0)
                $this->lado1 = $lado1;
            else    
                throw new Exception('Lado do triângulo inválido. Informe um valor válido.');
        }
        public function setLado2($lado2) {
            if($lado2 > 0)
                $this->lado2 = $lado2;
            else    
                throw new Exception('Lado do triângulo inválido. Informe um valor válido.');
        }
        public function setLado3($lado3) {
            if($lado3 > 0)
                $this->lado3 = $lado3;
            else    
                throw new Exception('Lado do triângulo inválido. Informe um valor válido.');
        }
        public function setCor($cor) {
            if($cor != '')    
                $this->cor =  $cor;
            else
                throw new Exception('Cor do triângulo inválida. Informe uma cor válida');
        }
        public function setMedida($medida) {
            if($medida != '')
                $this->medida =  $medida;
            else
                throw new Exception('Medida do triângulo inválida. Informe uma medida válida');
        }
        public function setArea($tipoTriangulo, $lado1, $lado2, $lado3) {
            if($tipoTriangulo == 'equilatero' || $tipoTriangulo == 'isosceles'){
                $area = $lado1 * $lado2 / 2;
            }
            else{
                $p = ($lado1 + $lado2 + $lado3) / 2;
                $area = sqrt($p * ($p - $lado1) * ($p - $lado2) * ($p - $lado3));
            }
            $this->area = $area;
        }

        // métodos do banco

        public function inserir() {}
        public function excluir() {}
        public function editar() {}
        public function listar() {}

        // método desenho do triangulo
        public function desenhar($tipoTriangulo) {
            if($tipoTriangulo == 'equilatero'){
                $desenho = "<div class='desenhoT' style='
                                    height: 0;
                                    width: 0;
                                    border-bottom:{$this->getArea()}{$this->getMedida()} solid {$this->getCor()};
                                    border-left:{$this->getArea()}{$this->getMedida()} solid transparent;
                                    border-right:{$this->getArea()}{$this->getMedida()} solid transparent;
                                    border-top:{$this->getArea()}{$this->getMedida()} solid transparent;'>";
            }
            elseif($tipoTriangulo == 'isosceles'){
                $desenho = "<div class='desenhoT' style='
                                    height: 0;
                                    width: 0;
                                    border-bottom:{$this->getArea()}{$this->getMedida()} solid {$this->getCor()};
                                    border-left:{$this->getArea()}{$this->getMedida()} solid transparent;
                                    border-right:{$this->getArea()}{$this->getMedida()} solid transparent;'>";
            }
            return $desenho;
        }
    }
?>