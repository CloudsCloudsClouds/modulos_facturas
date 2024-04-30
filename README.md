Todo el projecto de modulos factura del grupo de los angeles de noah(?)

El repositorio.


Como siempre, hay cosas que no se ignoran y que deben configurar manualmente dependiento de tu entorno.

- Clona el repositorio
- Ejecuta php composer install (no composer update)
- Configura el .env para que corra en tu dispositivo, asi como configurar el entorno
    - Esto significa cambiar el nombre del .env.example a .env
    - Configurar el puerto, nombre de usuario y contraseña de la base de datos. Crear la base de datos en la cual hacer migraciones en laravel
- Ejecuta php artisan up para levantar el servidor (sino solo veras de respuesta el error 505)
- Crea una llave para el proyecto (esta es local y no se comparte en github). Hazlo con php artisan key:generate
- Ahora deberia correr correr php artisan serve

¡Si algo no funciona abre un issue!
