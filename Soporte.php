<?php
class Soporte
{
    public string $titulo;
    protected int $numero;
    private float $precio;

    const IVA = 0.21;

   public function __construct($titulo, $numero, $precio ) {
    $this->titulo = $titulo;
    $this->numero = $numero;
    $this->precio = $precio;
   }


   public function muestraResumen(){
    echo "<br> El titulo es:  $this->titulo <br>
    El precio es: $this->precio <br>";
   }

    public function getNumero(): int
    {
        return $this->numero;
    }


    public function getPrecio(): float
    {
        return $this->precio;
    }

    public function getPrecioConIva(): float
    {
        return $this->precio * 1 +self::IVA;
    }

}
?>