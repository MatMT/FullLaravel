<?php include 'includes/header.php';

class MenuRestaurant {
    public $nombre;
    public $precio;

    public function __construct( $nombre, $precio ) { 
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

class Bebidas {
	public $nombre;
	public $precio;

	public function __construct( $nombre, $precio ) {
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
