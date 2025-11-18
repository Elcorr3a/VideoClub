<?php
class Dvd extends Soporte{
    public string $idioma;
    private string $formatPantalla;

    public function __construct($titulo, $numero, $precio, $idioma, $formatPantalla) {
        parent::__construct($titulo, $numero, $precio);
        $this->idioma = $idioma;
        $this->formatPantalla = $formatPantalla;
    }

    public function muestraResumen(){
        parent::muestraResumen();
        echo"El idioma de la pelicula es: $this->idioma
        <br> El formato de pantalla es: $this->formatPantalla";
    }

}