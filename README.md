# Sistema de blog en laravel 7 

Administracion de un blog en laravel 7 con roles y permisos usando el paquete spatie/laravel-permission, bootstrap 4, jquery y datatable

## Vista previa
!["preview"](https://github.com/Juliosgd/blog-with-admin-panel/blob/master/public/assets/images/screenshot.png "preview")	

## Instalación
1. Selecciona un lugar en la pc para guardar el proyecto, en mi caso, como utilizo laragon guardo mis proyectos en E:/laragon/www/
2. Descarga el repositorio 
3. Descromprime la carpeta en el directorio, en mi caso E:/laragon/www/
4. Renombra la carpeta descomprimida, para este ejemplo utilizare nuevo-proyecto (opcional)
5. Accede a la carpeta descomprimida, en mi caso E:/laragon/www/nuevo-proyecto>
6. Copia el contenido de .env.example a un nuevo archivo llamado .env
7. Crea una base de datos para el proyecto
8. Modifica las siguientes variables de conexion en el archivo .env que creaste:
* DB_DATABASE=
* DB_USERNAME=
* DB_PASSWORD=
9. Carga las dependencias del proyecto con el comando: `composer install`
10. Genera una llave para el proyecto: `php artisan key:generate`
11. Ejecuta las migraciones y seeds: `php artisan migrate --seed`
12. Ejecuta el servidor: `php artisan serve`
13. Inicia sesión con el usuario: admin@admin.com y password: 123123
14. Por último deberas ejecutar el comando `php artisan storage:link` luego de haber creado una imagen por lo menos de un post
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
