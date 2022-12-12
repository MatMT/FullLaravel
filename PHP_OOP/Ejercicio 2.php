<?php

class persona
{
	private string $nombres;
	private string $apellidos;
	private string $DUI;

	// Valores por defecto inicializados
	public function __construct($nombres, $apellidos, $DUI)
	{
		$this->nombres = $nombres;
		$this->apellidos = $apellidos;
		$this->DUI = $DUI;
	}

	public function getNombres(): void
	{
		echo $this->nombres;
	}

	public function setNombres($nombres): void
	{
		$this->nombres = $nombres;
	}

	public function getApellidos(): void
	{
		echo $this->apellidos;
	}

	public function setApellidos($apellidos): void
	{
		$this->apellidos = $apellidos;
	}

	public function getDUI(): void
	{
		echo $this->DUI;
	}

	public function setDUI($DUI): void
	{
		$this->DUI = $DUI;
	}
}

// Creamos Objeto ===================
$personaExample = new persona("Nombres de usuario", "Apellidos de usuario", "21436587-9");

// Definimos nuevos atributos
$personaExample->setNombres('Oscar Mateo');
$personaExample->setApellidos('Elías López');
$personaExample->setDUI('98765432-1');

// Resultados
$personaExample->getNombres();
echo "<br>";
$personaExample->getApellidos();
echo "<br>";
$personaExample->getDUI();
echo "<br>";
