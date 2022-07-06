<?php include 'includes/header.php';

class MenuRestaurant {
    public $nombre;
    public $precio;
    protected $categoria; 
    
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

    public function setCategoria($categoria) 
    {
        return $this->categoria = $categoria;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
}

class Bebida extends MenuRestaurant {
    public $medida;

	// Definir constantes
	const CON_ALCOHOL = 1;
	const SIN_ALCOHOL = 0;


    public function __construct( $nombre, $precio, $medida ) { 
        parent::__construct( $nombre, $precio  );
        $this->medida = $medida;
    }
    public function getPrecio()
    {
        return "El precio es: " . $this->precio;
    }
    public function getMedida()
    {
        return $this->medida;
    }
}

//
echo Bebida::CON_ALCOHOL;