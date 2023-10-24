# Tienda de Negocios en PHP con Laravel

Este proyecto es una tienda de negocios en línea desarrollada utilizando el framework Laravel en PHP. Proporciona una plataforma de comercio electrónico donde los clientes pueden navegar por productos, agregar artículos al carrito de compras y realizar compras en línea

# Integrantes del grupo 1

- Emilio Vernet
- Sebastian Abila

# Instalacion del proyecto

1) Copiar link de nuestro repositorio [enlase](https://github.com/emiliovernet/integrador-alkemy/tree/main)
2) Dentro de la carpeta htdoc ejecutar en comando "git clone URL".
3) Luego cd integrador-alkemy .
4) Ejecutar el comando "composer update" para instalar las dependecias.
5) Crear archivo .env con el comando "copy .env.example .env"
6) Generar Key con el comando "php artisan key:generate"
7) Abrir el server en consola ejecutra comando "php artisan serve"


# Configuracion Posman

archivo de configuras del posman [Descargar](https://github.com/emiliovernet/integrador-alkemy/tree/main)

# Creacion de los rutas

Usuarios:
- GET /usuario 
- GET /usuario/{id}
- PUT /usuario/{id}
Categoria:
- POST /categoria
- PUT /categoria/{id}
Producto:
- POST /producto
- PUT /producto/{id}
- DELETE /producto/{id}
- GET /producto/{id}
Metodos Pago:
- POST /metodospago
- PUT /metodospago/{id}
