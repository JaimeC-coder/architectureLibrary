Architecture Library

Descripción

Architecture Library es una librería PHP enfocada en la creación automatizada de archivos esenciales para la implementación del patrón Repository en Laravel. A través de comandos Artisan, permite generar repositorios, servicios, DTOs, controladores y otros componentes necesarios para estructurar una aplicación siguiendo este patrón.

Instalación

Para instalar esta librería, usa Composer:

composer require vendor/architecture_library

Asegúrate de que la librería esté correctamente registrada en el composer.json de tu proyecto y que el autoload de Composer esté actualizado:

composer dump-autoload

Comandos Disponibles

1. Generar una arquitectura completa

php artisan make:architecture {name}

Este comando genera todos los archivos relacionados con el patrón Repository para la entidad especificada ({name}). Incluye:

Repositorio (make:repository)

Servicio (make:service)

DTO (make:dto)

Controlador (make:controller con --resource y --model)

Request (make:request)

Resource (make:resource)


2. Crear un DTO

php artisan make:dto {name}

Genera un Data Transfer Object (DTO) en la carpeta app/DTOs/.

3. Crear un Repositorio

php artisan make:repository {name}

Crea un repositorio en app/Repositories/. Si no existe, también genera un BaseRepository.php.

4. Crear un Servicio

php artisan make:service {name}

Genera un servicio en app/Services/ que interactúa con el repositorio correspondiente.

5. Optimizar la Aplicación

php artisan app:optimize

Limpia la caché de la aplicación y optimiza la configuración para mejorar el rendimiento.

Requisitos

PHP ^7.4|^8.0

Laravel ^8.0|^9.0


Autor

Eduardo Centurión

📧 centurionjaime@gmail.com


Licencia

Este proyecto está bajo la licencia MIT.