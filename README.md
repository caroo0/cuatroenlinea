# Cuatro en linea 

Juego de cuatro en linea, consiste en colocar cuatro fichas en linea vertical horizontal o diagonal, se juega de a dos personas por turnos; esta hecho en php con laravel y ddev.


## Requisitos 

Para poder usar este repositorio será necesario contar con los siguientes programas(los links proporcionados son los del sitio oficial correspondiente).
-   DDEV ([https://ddev.readthedocs.io/en/stable/](https://ddev.readthedocs.io/en/stable/))
-   Docker Desktop ([https://docs.docker.com/desktop/](https://docs.docker.com/desktop/))
-   Composer ([https://getcomposer.org/download/](https://getcomposer.org/download/))

## Pasos a seguir para el correcto funcionamiento 

El primer paso es descargar el repositorio en el directorio deseado usando:


> `git clone https://github.com/caroo0/cuatroenlinea`

**Como configurar ddev**

 - Lo primero será abrir la consola con el directorio del que recién se descargo y ejecutamos el siguiente comando.

> `ddev config`

Acá nos preguntara el nombre que le queremos asignar a nuestro proyecto, este puede ser el mismo que vine por defecto. Después preguntara donde queremos guardar la raíz del proyecto, la cual no hay problemas al usar la misma en la que nos encontramos. y para finalizar nos preguntara que tipo de proyecto es, a tal pregunta responderemos que es un proyecto de tipo laravel. 

**Verificar con composer**
 El gestor que usaremos para las dependencias de php es composer, lo actualizaremos con el comando:
 

> `ddev composer install`

**Creación de archivo de ambiente**                       
Para asegurarnos que las variables del ambiente están bien copiadas usaremos los siguientes comandos 
> `ls -la`

> `cp .env.example .env`

> `echo "WWWGROUP=1000" >> .env`

> `echo "WWWUSER=1000" >> .env`

**Clave**
Crearemos una clave para nuestro proyecto 
> `php artisan key:generate`

**Corriendo la aplicación**
Cuando ya hayamos completado los steps de arriba saldremos del servidor local con:

> `exit`

después reiniciamos el proyecto

> `ddev restart`

luego en la consola nos dará la dirección en la que esta alojada la pagina web, para entrar le agregaremos /jugar/1 a la dirección y comenzara el juego.

**Cerrar**
Para cerrar la aplicación usaremos 

> `ddev poweroff`

**JUGAR**
Para jugar si ya configuraste todo, o es necesario que lo vuelvas a hacer, para poder jugar lo que deberás hacer será entrar a la URL del paso " Correr la aplicación" y correr el siguiente comando:

> `ddev strart`
