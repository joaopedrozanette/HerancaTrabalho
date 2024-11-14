<?php 

    require_once("Jogador.php");

    Class MeioCampo extends Jogador{
        private $habilidadeEscanteio;
        private $habilidadeFalta;

        public function cobrarEscanteio(){

        }

        public function cobrarFalta(){

        }

        /**
         * Get the value of habilidadeEscanteio
         */
        public function getHabilidadeEscanteio()
        {
                return $this->habilidadeEscanteio;
        }

        /**
         * Set the value of habilidadeEscanteio
         */
        public function setHabilidadeEscanteio($habilidadeEscanteio): self
        {
                $this->habilidadeEscanteio = $habilidadeEscanteio;

                return $this;
        }

        /**
         * Get the value of habilidadeFalta
         */
        public function getHabilidadeFalta()
        {
                return $this->habilidadeFalta;
        }

        /**
         * Set the value of habilidadeFalta
         */
        public function setHabilidadeFalta($habilidadeFalta): self
        {
                $this->habilidadeFalta = $habilidadeFalta;

                return $this;
        }
    }