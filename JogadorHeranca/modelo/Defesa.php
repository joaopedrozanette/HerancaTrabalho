<?php 

    require_once("Jogador.php");

    Class Defesa extends Jogador{
        private $habilidadePenalti;
        private $defenderPenalti;

        public function cobrarPenalti(){
                echo  $this->nome .  " Cobra o Penalti e... ";
        $possibilidade  = (($this->pontuacaoGeral / 2) + $this->habilidadePenalti / 2);

        $numeroAleatorio = rand(0, 100);

        
        

        if ($numeroAleatorio <= $possibilidade) {
            $this->comemoracao();
        } else {
            echo " Que cobrança Horrivel de " . $this->nome . "\n";
        }
        }

        public function defenderPenalti(){
            echo  $this->nome .  " Pula pra defender o Penalti e... ";
        $possibilidade  = (($this->pontuacaoGeral / 2) + $this->defenderPenalti / 2);

        $numeroAleatorio = rand(0, 100);

        
        

        if ($numeroAleatorio <= $possibilidade) {
           echo $this->nome . " defende o penalti!!!\n" ;
        } else {
            echo " Que defesa Horrivel de " . $this->nome . "\n";
        }
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