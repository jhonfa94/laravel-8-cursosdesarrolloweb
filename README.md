# Guía para instalar el proyecto
Este es un proyecto de prueba 

El curso esta disponible en el siguiente enlace: [Curso gratuito Laravel 8 desde cero](https://www.youtube.com/playlist?list=PLd3a4dr8oUsDAjQa8T0eKSyOxUCoiMVxO)

###Pasos para instalar el proyecto:

1. Descarga el repositorio
2. Descromprime la carpeta dentro del directorio de Valet/Laragon
3. Renombra la carpeta (Opcional) 
4. Entra a la carpeta desde la terminal `cd directorio/de/la/carpeta`
5. Copia el contenido del archivo `.env.example` a un nuevo archivo llamado `.env`
    * Si estás en Liunx o Mac puedes ejecutar el comando: `cp .env.example .env`
6. Crea una base de datos para el proyecto
7. Modifica las variables de conexión del nuevo archivo `.env` 
    * Define los datos de conexión 
        * DB_DATABASE=
        * DB_USERNAME=
        * DB_PASSWORD=
    * Define las credenciales de [Mailtrap](https://mailtrap.io/) (Opcional)
    * Define las credenciales de [Sendgrid](https://sendgrid.com/) (Para enviar emails en producción)
8. Ejecuta **```composer install```**
9. Ejecuta **```php artisan key:generate```**
10. Ejecuta **```php artisan migrate```**
11. Ejecuta **```npm install```**
12. Ejecuta **```npm run dev```**
13. Opcional: ejecutar **```php artisan server --port:80```**
14. Abre la aplicación en el navegador
