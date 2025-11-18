<?php

class Cliente
{
    public string $nombre;
    private int $numero;
    private $soportesAlquilados = [];
    private int $numSoportesAlquilados=0;
    private int $maxAlquilerConcurrente;


    public function __construct($nombre, $numero, $maxAlquilerConcurrente = 3)
    {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->maxAlquilerConcurrente = $maxAlquilerConcurrente;
    }


    public function muestraResumen()
    {
        echo "Nombre cliente:  $this->nombre <br>
        $this->numSoportesAlquilados";
    }

    public function tieneAlquilado(Soporte $s): bool
    {
        foreach ($this->soportesAlquilados as $soporteAlquilado) {
            if ($soporteAlquilado == $s)
                return true;
        }
        return false;
    }

    public function alquilar(Soporte $s): bool
    {
        if ($this->tieneAlquilado($s) == true || $this-> numSoportesAlquilados >= 3)
            return false;
        else {
            array_push($this->soportesAlquilados, $s);
            $this->actualizarNumSoportesAlquilados();
            return true;
        }
        ;
    }

    public function devolver(int $numSoporte): bool
    {
        foreach ($this->soportesAlquilados as $soporteAlquilado) {
            if ($numSoporte == $soporteAlquilado->getNumero()) {
                $this->soportesAlquilados = array_diff($this->soportesAlquilados, $soporteAlquilado);
                $this->actualizarNumSoportesAlquilados();
                echo "Soporte devuelto";
                return true;

            }
            ;
        }
        echo "Soporte no devuelto";
        return false;
    }

    public function listaAlquileres()
    {
        echo "El cliente tiene $this->numSoportesAlquilados que son: ";
        foreach ($this->soportesAlquilados as $soporteAlquilado){
            echo "".$soporteAlquilado->muestraResumen() ."";
        }
    }




    private function actualizarNumSoportesAlquilados()
    {
        $this->numSoportesAlquilados = count($this->soportesAlquilados);
    }






    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;
        return $this;
    }

    public function getNumSoportesAlquilados(): int
    {
        return $this->numSoportesAlquilados;
    }
}