<?php

require_once 'Bd.php'; //incluyo la cadena de conexion PHP
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$email = $_POST['Email'];
$telefono = $_POST['Telefono'];
$movil = $_POST['Movil'];

//hacer el proceso de request - response 

$sql = 'INSERT INTO contactos(nombre,apellido,email,telefono,movil) VALUES (?,?,?,?,?)';

$sentencia = $pdo->prepare($sql); //prepara consulta

$sentencia->execute([$nombre,$apellido,$email,$telefono,$movil]); //ejecuta la sentencia sql

// $result = $sentencia->fetchAll(); //almacena el resultado de la consulta em forma PHP

header('Location:../index.php');
