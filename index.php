<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<script type="text/javascript" src="jquery.min.js"></script>
</head>

<body>
<code>
<?php

$mi_variable = "Hola Mundo";

$numero = 1;

$otraCadena = 'Adios';

$mi_variable = 3.1416;

if ($numero == '1') {
	# Número si es 1
} elseif ($numero < 0) {
	
} else {
	# Cuando número no es 1
}

while ($numero > 1) {
	
}

do {
	$numero = 0;
} while ($numero);

for ($i = 1; $i <= 10; $i++) {
	
}

$primos = array(2,3,5,7,11);
foreach ($primos as $numero) {
	echo $numero . '<br />';
}

/**
Operadores
* Multiplicación
+ Suma
- Resta
/ Div
% Mod
> Mayor q
< Menor q
>= Mayor o igual
<= Menor o igual
== Igual
!= Diferente
=== Identico
!== Distinto
|| or
&& and
! negado
*/

// El tercer parámetro es opcional con valor por defecto nulo
function mi_primera_funcion($numero1, $numero2, $numero3 = null) {
	if (!is_int($numero1) || !is_int($numero2) || ($numero3 != null && !is_int($numero3))) {
		// Si los parámetros no son enteros, regresa un valor nulo
		echo 'Los parámetros tienen que ser enteros';
		return null;
	}
	// Regresa la multiplicación de los parámetros
	return $numero1 * $numero2 * (is_null($numero3) ? 1 : $numero3);
}
?> <span>El valor de la función con 1, 2, y 3: <?php
echo mi_primera_funcion(1,2,3);
echo '</span>';

$res = mi_primera_funcion(1,2);

class Pastel {
	public $nombre;
	private $stock;
	
	public function __construct($nombre) {
        // la variable $this hace referencia al objeto
		$this->nombre = $nombre;
		$this->stock = 2;
	}
	
	public function obtenerStock() {
		return $this->stock;
	}
}

$tresLeches = new Pastel('Pastel de 3 leches');
echo '<br />Tengo ' . $tresLeches->obtenerStock() . ' pasteles';


?>
</code>
<a href="conexiones.php">Ejemplo de conexión a la base</a>
</body>
</html>