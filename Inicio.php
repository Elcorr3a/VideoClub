<?php

include "Soporte.php";
include "CintaVideo.php";
include "Dvd.php";
include "Juego.php";
include "cliente.php";

$soporte1 = new Soporte("Tenet", 22, 3 ); 
echo "<strong>" . $soporte1->titulo . "</strong>"; 
echo "<br>Precio: " . $soporte1->getPrecio() . " euros"; 
echo "<br>Precio IVA incluido: " . $soporte1->getPrecioConIVA() . " euros";
$soporte1->muestraResumen();

//$soporte2 = new Soporte("La bala que doblo la esquina", 2.12, 21);
//$soporte2->muestraResumen();


$miCinta = new CintaVideo("Los cazafantasmas", 23, 3.5, 107); 
echo "<strong>" . $miCinta->titulo . "</strong>"; 
echo "<br>Precio: " . $miCinta->getPrecio() . " euros"; 
echo "<br>Precio IVA incluido: " . $miCinta->getPrecioConIva() . " euros";
$miCinta->muestraResumen();


$miDvd = new Dvd("Origen", 24, 15, "es,en,fr", "16:9"); 
echo "<br> <strong>" . $miDvd->titulo . "</strong>"; 
echo "<br>Precio: " . $miDvd->getPrecio() . " euros"; 
echo "<br>Precio IVA incluido: " . $miDvd->getPrecioConIva() . " euros ";
$miDvd->muestraResumen();


$miJuego = new Juego("The Last of Us Part II", 26, 49.99, "PS4", 1, 3); 
echo "<br><strong>" . $miJuego->titulo . "</strong>"; 
echo "<br>Precio: " . $miJuego->getPrecio() . " euros"; 
echo "<br>Precio IVA incluido: " . $miJuego->getPrecioConIva() . " euros";
$miJuego->muestraResumen();

$cliente1 = new Cliente("Bruce Wayne", 23);
$cliente2 = new Cliente("Clark Kent", 33);

//mostramos el número de cada cliente creado 
echo "<br>El identificador del cliente 1 es: " . $cliente1->getNumero();
echo "<br>El identificador del cliente 2 es: " . $cliente2->getNumero();

$soporte1 = new CintaVideo("Los cazafantasmas", 23, 3.5, 107);
$soporte2 = new Juego("The Last of Us Part II", 26, 49.99, "PS4", 1, 1);  
$soporte3 = new Dvd("Origen", 24, 15, "es,en,fr", "16:9");
$soporte4 = new Dvd("El Imperio Contraataca", 4, 3, "es,en","16:9");

$cliente1->alquilar($soporte1);
$cliente1->listaAlquileres();

?>