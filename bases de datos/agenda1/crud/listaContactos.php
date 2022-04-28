<?php

require_once 'Bd.php'; //incluyo la cadena de conexion PHP

//hacer el proceso de request - response 

$sql = 'SELECT * FROM contactos';

$sentencia = $pdo->prepare($sql); //prepara consulta

$sentencia->execute(); //ejecuta la sentencia sql

$result = $sentencia->fetchAll(); //almacena el resultado de la consulta em forma PHP
// echo '<pre>';
// print_r($result);
// echo '</pre>';







