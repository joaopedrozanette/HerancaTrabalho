<?php 

    require_once("Jogador.php");

    Class Defesa extends Jogador{
        private $habilidadePenalti;
        private $defenderPenalti;

        public function cobrarPenalti(){

        }
        public function defenderPenalti(){
            
        }
        

        /**
         * Get the value of habilidadePenalti
         */
        public function getHabilidadePenalti()
        {
                return $this->habilidadePenalti;
        }

        /**
         * Set the value of habilidadePenalti
         */
        public function setHabilidadePenalti($habilidadePenalti): self
        {
                $this->habilidadePenalti = $habilidadePenalti;

                return $this;
        }

        /**
         * Get the value of defenderPenalti
         */
        public function getDefenderPenalti()
        {
                return $this->defenderPenalti;
        }

        /**
         * Set the value of defenderPenalti
         */
        public function setDefenderPenalti($defenderPenalti): self
        {
                $this->defenderPenalti = $defenderPenalti;

                return $this;
        }
    }