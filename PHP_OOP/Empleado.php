<?php

namespace empleado_1;

class Empleado {
	public function __construct(){
		echo 'Desde empleado';
	}
}

$empleado = new Empleado();