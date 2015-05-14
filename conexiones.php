<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>
<div class="container">
<p>En el ejemplo vamos a usar la clase MySQLi que viene incluida en PHP</p>
<p>Para crear una instancia de la clase se usa la palabra reservada <span class="text-success">new</span>. El contructor de esta clase puede recibir como parametros:</p>
<code>
$con = new MySQLi(string $host, string $usuario, string $contraseña, string $nombre_base);
</code>
<?php
// Podemos colocar un bloque try para "atrapar" las excepciones
try {
    $con = new MySQLi('localhost', 'root', '', 'almace');
} catch (Exception $ex) {
    echo '<span class="text-danger">'  . $ex->getMessage() . '</span>';
}
// Podemos revisar el estatus de la conexión haciendo uso de la propiedad connect_errno, si es diferente de cero existe un error
if ($con->connect_errno != 0) {
    echo '<span class="text-danger">Error al conectar a la base: '  . $con->connect_error . '</span>';
} else {
    
}
?>
</div>
</body>
</html>