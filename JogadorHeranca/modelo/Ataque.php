<?php

require_once("Jogador.php");

class Ataque extends Jogador
{
    private $habilidadePenalti;
    private $habilidadeFalta;



    public function cobrarPenalti()
    {

        echo  $this->nome .  " Cobra o Penalti e... ";
        $possibilidade  = (($this->pontuacaoGeral / 2) + $this->habilidadePenalti / 2);

        $numeroAleatorio = rand(0, 100);

        
        

        if ($numeroAleatorio <= $possibilidade) {
            $this->comemoracao();
        } else {
            echo " Que cobrança Horrivel de " . $this->nome . "\n";
        }
    }

    public function cobrarFalta() {
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
