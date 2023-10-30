# Tienda de Negocios en PHP con Laravel

Este proyecto es una API RESTFULL de una tienda de negocios en línea desarrollada utilizando el framework Laravel en PHP. Proporciona una plataforma de comercio electrónico donde los clientes pueden navegar por productos, agregar artículos al carrito de compras y realizar compras en línea

# Integrantes del grupo 1

- Emilio Vernet
- Sebastian Abila

# Instalacion del proyecto

1) Dentro del directorio "C:\\xampp\\php\\php.exe" ejecutar el comando "git clone https://github.com/emiliovernet/integrador-alkemy/tree/main".
2) Luego "cd integrador-alkemy".
3) Ejecutar el comando "composer update" para instalar las dependecias.
4) Crear archivo .env con el comando "copy .env.example .env".
5) Generar Key con el comando "php artisan key:generate".
6) Para crear la base de datos ejecutar el comando "php artisan migrate".
7) Para llenar la base de datos ejecutar "php artisan db:seed".
8) Para levantar el servidor ejecutar "php artisan serve".


# Configuración Postman

Archivo de configuración del Postman [Descargar](https://github.com/emiliovernet/integrador-alkemy/tree/main)

# RUTAS DE LA API

Usuarios:

- GET api/usuario 
- GET api/usuario/{id}
- PUT api/usuario/{id}

Categorias:

- POST api/categoria
- PUT api/categoria/{id}

Productos:

- POST api/producto
- PUT api/producto/{id}
- DELETE api/producto/{id}
- GET api/producto/{id}

Metodos de Pago:

- POST api/metodospago
- PUT api/metodospago/{id}

Carritos de compras:

-GET api/carrito
-GET api/carrito/id
-POST api/carrito
-PUT api/carrito/id
-DELETE api/carrito/id