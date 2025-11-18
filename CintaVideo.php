<?php
class CintaVideo extends Soporte{
    private $duracion;
    public function __construct($titulo , $numero, $precio, $duracion ) {
    parent::__construct($titulo, $numero, $precio);
    $this->duracion = $duracion;
   }
   function muestraResumen(){
    parent::muestraResumen();
    echo"La duracion es: $this->duracion";
   }
}
