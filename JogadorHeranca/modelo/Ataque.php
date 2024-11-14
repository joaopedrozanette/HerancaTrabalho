<?php 

    require_once("Jogador.php");

Class Ataque extends Jogador {
    private $habilidadePenalti;
    private $habilidadeFalta;
    


        public function cobrarPenalti(){

        }
        
        public function cobrarFalta(){
            
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