 <?php include 'includes/header.php';

 interface RestauranteInterface
 {
	 public function getNombre();
	 public function getPrecio() : int;
	 public function setPrecio($precio);
 }

class MenuRestaurant implements RestauranteInterface {
    public $nombre; 
    protected $precio;

    public function __construct( $nombre, $precio ) { 
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
    public function getNombre() 
    {
        return $this->nombre;
    }
    public function getPrecio() : int
    {
        return $this->precio;
    }
	public function setPrecio($precio)
	{
		$this->precio = $precio;
	}
}