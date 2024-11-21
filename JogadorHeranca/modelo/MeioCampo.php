<?php 

    require_once("Jogador.php");

    Class MeioCampo extends Jogador{
        private $habilidadeEscanteio;
        private $habilidadeFalta;

        public function cobrarEscanteio(){

                echo  $this->nome .  " Cobra o Escanteio e... ";
                $possibilidade  = (($this->pontuacaoGeral / 2) + $this->habilidadeEscanteio / 2);
        
                $numeroAleatorio = rand(0, 100);
        
                
                
        
                if ($numeroAleatorio <= $possibilidade) {
                    echo $this->nome . " Cruza no Pé do atacante que faz o gol de voleio!";
                } else {
                    echo " Que cobrança Horrivel de " . $this->nome . "\n";
                }

        }

        public function cobrarFalta(){
                echo  $this->nome .  " Cobra a Falta e... ";
                $possibilidade  = (($this->pontuacaoGeral / 2) + $this->habilidadeFalta / 2);
        
                $numeroAleatorio = rand(0, 100);
        
                
                
        
                if ($numeroAleatorio <= $possibilidade) {
                    $this->comemoracao();
                } else {
                    echo " Que cobrança Horrivel de " . $this->nome . "\n";
                }
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