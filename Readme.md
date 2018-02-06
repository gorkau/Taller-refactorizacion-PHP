# Instalación

## Requisitos

Es necesario tener instalado:

* Composer (https://getcomposer.org/).
* PHP 7.0 o superior.
* Saber manejar la línea de comandos (Bash, Windows, PowerShell o lo que uses).

### ¿Y si...

#### tengo una versión más antigua de PHP?

Si tienes una versión antigua de PHP es posible que no funcione correctamente Composer.
Tienes dos opciones:

* Instalar una versión más reciente de PHP.
* Modificar el composer.json e indicar una versión más antigua de PHPUnit.

Puedes tener más de una versión de PHP en tu máquina sin problemas.

[En Windows]

Si usas Xampp o similares no es necesario que arranques el servidor.
Puedes descargarte una versión reciente de PHP y ejecutarlo desde consola.

[En Linux]

Si usas Linux seguro que no tienes ningún problema con esto.
Aún así, si tienes dudas avísame y ya miraremos cómo solucionarlo.

## Crear una carpeta

Crear una carpeta para el proyecto.

## Clonar el proyecto

Entra en la carpeta recién creada y ejecuta el comando:

    git clone https://github.com/gorkau/Taller-refactorizacion-PHP.git .
    
No olvides poner el punto del final.
Si no lo pones te creará una subcarpeta.

## Descargar archivos

Ahora hay que crear la carpeta vendor, descargar PHPUnit y demás historias.
Eso se hace con el comando (tienes que ejecutarlo desde la carpeta del proyecto):

    composer update

## Probar el script

Para comprobar que se ejecuta correctamente puedes hacer:

    php index.php

Si tienes más de una versión de PHP en tu sistema es posible que tengas que usar la ruta completa de PHP.

## Ejecutar los test

Para evitar problemas usa el PHPUnit que se ha descargado en el proyecto:

    vendor/phpunit/phpunit/phpunit tests/ --color
