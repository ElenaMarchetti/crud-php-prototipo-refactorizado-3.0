<?php
/**
*    File        : backend/config/databaseConfig.php
*    Project     : CRUD PHP
*    Author      : Tecnologías Informáticas B - Facultad de Ingeniería - UNMdP
*    License     : http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
*    Date        : Mayo 2025
*    Status      : Prototype
*    Iteration   : 3.0 ( prototype )
*/

$host = "localhost";     /* no hay tipos, $ operador más facil de redefinir */
$user = "students_user_3";
$password = "12345";
$database = "students_db_3";

$conn = new mysqli($host, $user, $password, $database);  /* new crea dinámicamente la variable */

if ($conn->connect_error)   
{
    http_response_code(500); 
    die(json_encode(["error" => "Database connection failed"]));  
}
?>