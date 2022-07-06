<?php include 'includes/header.php';

class MenuRestaurant {
    public string $nombre = 'Nombre del producto';
    public int $precio = 0;
}

$bebida = new MenuRestaurant();
$bebida->nombre = 'Jugo de Naranja';
$bebida->precio = 30;

$postre = new MenuRestaurant();
$postre->nombre = 'Galleta';
$postre->precio = 40;

var_dump($bebida);
echo "<br>";
var_dump($postre);
