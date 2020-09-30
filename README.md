# Sistema de blog en laravel 7 

Administracion de un blog en laravel 7 con roles y permisos usando el paquete spatie/laravel-permission, bootstrap 4, jquery y datatable

## Vista previa de la aministración en laravel
!["preview"](https://github.com/Julioous/Laravel-Vuejs-SPA/blob/master/public/assets/images/screenshot.png "preview")	
## Vista previa del SPA en Vuejs
!["preview"](https://github.com/Julioous/Laravel-Vuejs-SPA/blob/master/public/assets/images/screenshot2.png "preview")	

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
9. Carga las dependencias del proyecto con el comando:  
```
composer install
```
```
npm install
```
10. Genera una llave para el proyecto: `php artisan key:generate`
11. Ejecuta las migraciones y seeds: `php artisan migrate --seed`
12. Ejecuta el comando `php artisan storage:link`
13. Ejecuta el servidor: `php artisan serve`
14. Dirigete a la ruta /dashboard e inicia sesión con el usuario:
* Administrador: ```admin@admin.com``` password:```123123```
* Invitado: ```julio@julio.com``` o ```javier@javier.com``` password:```123123```
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
