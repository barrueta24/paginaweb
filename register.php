<? php

try {
$host = "localhost:3306"
$dbname = "Register"
$username = "cpses_cnj6sehr9z@localhost"
$pasword = ""
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username,$pasword);
echo "Conexion satisfacgtorio";

} catch (PDOException $e){

die("No se pudo conectar con la base de datos")

}

?>