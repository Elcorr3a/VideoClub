<?php

class Juego extends Soporte
{
    public string $consola;
    private int $minNumJugadores;
    private int $maxNumJugadores;

    public function __construct($titulo, $numero, $precio, $consola, $minNumJugadores, $maxNumJugadores)
    {
        parent::__construct($titulo, $numero, $precio);
        $this->consola = $consola;
        $this->minNumJugadores = $minNumJugadores;
        $this->maxNumJugadores = $maxNumJugadores;
    }

    public function muestraResumen(){
        parent::muestraResumen();
        //$this->muestraJugadoresPosibles($this->minNumJugadores, $this->maxNumJugadores);
        $this->muestraJugadoresPosibles();
    }
/*
    public function muestraJugadoresPosibles($minNumJugadores_, $maxNumJugadores_)
    {
        if ($maxNumJugadores_ == 1) {
            echo "Para un solo jugador";
        } else if ($minNumJugadores_ == $maxNumJugadores_) {
            echo "Para $minNumJugadores_  jugadores";
        } else if ($minNumJugadores_ >= 1) {
            echo "Entre $minNumJugadores_ y $maxNumJugadores_";
        }
    }
        */
    public function muestraJugadoresPosibles()
    {
        if ($this->maxNumJugadores == 1) {
            echo "Para un solo jugador";
        } else if ($this->minNumJugadores == $this->maxNumJugadores) {
            echo "Para $this->minNumJugadores  jugadores";
        } else if ($this->minNumJugadores >= 1) {
            echo "Entre $this->minNumJugadores y $this->maxNumJugadores";
        }
    }


}

?>