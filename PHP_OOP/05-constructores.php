<?php include 'includes/header.php';

class MenuRestaurant
{
	public $nombre;
	public $precio;

	public function __construct($nombre, $precio)
	{
		$this->nombre = $nombre;
		$this->precio = $precio;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function getPrecio()
	{
		return $this->precio;
	}
}

$bebida = new MenuRestaurant("Jugo de naranja", 30);
echo $bebida->getNombre();