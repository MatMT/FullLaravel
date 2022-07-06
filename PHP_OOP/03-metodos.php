<?php include 'includes/header.php';

class MenuRestaurant {
    public $nombre = 'Nombre del Producto';
    public $precio = 0;

    public function obtenerProductoyNombre(){
        echo "El producto " . $this->nombre . " tiene un precio de " . $this->precio;
    }
}

// Instanciar una clase
$bebida = new MenuRestaurant();
$bebida->nombre = 'Juego de naranja';
$bebida->precio = 111;
$bebida->obtenerProductoyNombre();

echo "<br>";

$postre = new MenuRestaurant();
$postre->nombre = 'Pastelito';
$postre->precio = 60;
$postre->obtenerProductoyNombre();
