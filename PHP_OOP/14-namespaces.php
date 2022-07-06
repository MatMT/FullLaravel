<?php
namespace empleado_2;
include 'includes/header.php';

require_once 'Empleado.php';

echo "<br>";

class Empleado {
	public function __construct(){
		echo 'Desde empleado';
	}
}

$empleado = new Empleado();