<?php 

    require_once("IComemoracao");

    Class Jogador implements IComemoracao{

        protected $nome;
        protected $posicao;
        protected $pontuacaoGeral;
        protected $time;
        protected $nacionalidade;

        public function comemoracao()
        {
            echo "\nGooooooooooool de $this->nome!\n ";
        }

        /**
         * Get the value of nome
         */
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of posicao
         */
        public function getPosicao()
        {
                return $this->posicao;
        }

        /**
         * Set the value of posicao
         */
        public function setPosicao($posicao): self
        {
                $this->posicao = $posicao;

                return $this;
        }

        /**
         * Get the value of pontuacaoGeral
         */
        public function getPontuacaoGeral()
        {
                return $this->pontuacaoGeral;
        }

        /**
         * Set the value of pontuacaoGeral
         */
        public function setPontuacaoGeral($pontuacaoGeral): self
        {
                $this->pontuacaoGeral = $pontuacaoGeral;

                return $this;
        }

        /**
         * Get the value of time
         */
        public function getTime()
        {
                return $this->time;
        }

        /**
         * Set the value of time
         */
        public function setTime($time): self
        {
                $this->time = $time;

                return $this;
        }

        /**
         * Get the value of nacionalidade
         */
        public function getNacionalidade()
        {
                return $this->nacionalidade;
        }

        /**
         * Set the value of nacionalidade
         */
        public function setNacionalidade($nacionalidade): self
        {
                $this->nacionalidade = $nacionalidade;

                return $this;
        }
    }