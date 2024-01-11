Para ejecutar el proyecto se debe tener instalado las siguientes herramientas.
1. php 7.4
2. Gestor de base de datos MySql
3. Apache server
4. Composer
5. Postman

Para el desarrollo del proyecto se utilizó XAMPP V3.3.0

Pasos para configurar el proyecto:

Paso 1: Clonar el repositorio dentro del directorio del servidor, en el caso de usar XAMPP en la ruta C:\xampp\htdocs
Paso 2: Abrir una terminar y ejecutar 'git checkout main' esto para dirigirnos a la rama en donde se encuentra nuestro proyecto.
Paso 3: En el gestor de base de datos de MySql crear una base de datos con el siguiente nombre 'challenge-abitmedia-app
Paso 4: Dentro del archivo .env agregar la configuración de la base de datos.
Paso 5: Ejecutar los siguientes comandos
- composer install
- php artisan key:generate
- php artisan migrate:generate
- php artisan passport:client --personal
- php artisan serve
  
Paso 6: Dentro del proyecto se encuetra un comprimido que es la colección de postman de las API realizadas, importamos esta colección en Postman para probar.
Paso 7: Usar la API Register que se encuentra dentro de la carpeta Users para crear un usuario.
Paso 8: Usar la API Login para generar un token de autenticación, copiar el token.
Paso 9: Para hacer uso de las demas APIs se debe configurar en la pestaña de 'Authorization' cambiando el token por el que se generó anteriormente, esto en cada una de las APIs que necesitemos probar. 

