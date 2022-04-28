# PROYECTO AGENDA

la base de datos se llama: Agenda.
la tabla se llama: Contactos.


Contacto:

id autoincrementable integer
nombre varchar(200)
apellidos varchar(200)
email varchar(200)
Telefono varchar(100)
movil varchar(100)
activo booleano //para listar los contactos activos

OJO: el boolean se transforma en tynint(1) integer de una sola pocision donde 1 es true, 0 es falso

## conexion a la base de datos


PHP tiene varias clases predeterminadas para manejar conexiones con bases de datos

CLASE1: mysqli() //base de datos mysql
CLASE2: PDO()  //Universal PHP DATA OBJECTS
}

## requiere e include, requiere_once, include_once



todos incluyen un archivo externoo, la diferencia esta en el manejo de errores.

Si hay un error grave INCLUDE rompe o aborta la carga normal del programa el requiere generar el error pero permite la carga del aplicativo. 


## PATRON DE DISEÑO FRONT_CONTROLLER

en el diseño del aplicativo tengo una sola "Puerta de entrada" a las funcionalidades.