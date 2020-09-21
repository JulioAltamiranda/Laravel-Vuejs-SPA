# Sistema de blog en laravel 7 

Administracion de un blog en laravel 7 con roles y permisos usando el paquete spatie/laravel-permission, bootstrap 4, jquery y datatable

## Vista previa
!["preview"](https://github.com/Juliosgd/blog-with-admin-panel/blob/master/public/assets/images/screenshot.png "preview")	

## Instalación
1. Selecciona un lugar en la pc para guardar el proyecto, en mi caso, como utilizo laragon guardo mis proyectos en E:/laragon/www/
2. Descarga el repositorio 
3. Descromprime la carpeta en el directorio, en mi caso E:/laragon/www/
4. Una vez el proyecto descomprimido, copia el contenido de .env.example a un nuevo archivo llamado .env
6. Crear una base de datos para el proyecto
7. Modifica las siguientes variables de conexion en el archivo .env que creaste:
* DB_DATABASE=
* DB_USERNAME=
* DB_PASSWORD=
8. Cargar las dependencias del proyecto con el comando: `composer install`
9. Generar una llave para el proyecto: `php artisan key:generate`
10. Ejecuta las migraciones y seeds: `php artisan migrate --seed`
11. Ejecuta: `php artisan storage:link`
12. Ejecuta el servidor: `php artisan serve`

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
