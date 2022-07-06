<?php include 'includes/header.php';

class MenuRestaurant
{
	public $nombre = 'Nombre del Producto';
	public $precio = 0;
	public $cantidad = 1;


	public function getNombre()
	{
		return $this->nombre;
	}

	public function getPrecio()
	{
		return $this->precio;
	}

	/**
	 * @return int
	 */
	public function getCantidad(): int
	{
		return $this->cantidad;
	}

}

$bebida = new MenuRestaurant();
$bebida->nombre = "Jugo de Naranja";
$bebida->precio = 30;
$bebida->cantidad = 2;


echo $bebida->getNombre();
echo $bebida->getPrecio();
echo $bebida->getCantidad();

echo "<br>";

$pastel = new MenuRestaurant();
$pastel->nombre = "Pastel Naranja";

echo $pastel->getNombre();
echo $pastel->getPrecio();




