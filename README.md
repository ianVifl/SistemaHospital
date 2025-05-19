# README - Instalación Local Detallada para Prueba de Portabilidad (Usando XAMPP)

Este documento proporciona una guía paso a paso para configurar el proyecto Laravel localmente. 
Utilizaremos XAMPP para proveer el entorno PHP y MySQL necesario, y la base de datos se importará desde un archivo SQL adjunto en el repositorio.

## Requisitos Previos

Antes de comenzar con la instalación, asegúrate de tener lo siguiente preparado:

* **Archivo de Exportación SQL de la Base de Datos:** Debes haber exportado un archivo `.sql` de la base de datos de tu entorno de desarrollo principal.
* Este archivo contiene la estructura de las tablas y los datos de tu aplicación.
* **Conexión a Internet:** Necesaria para descargar XAMPP y las dependencias del proyecto con Composer.
* **Espacio en Disco:** Asegúrate de tener suficiente espacio libre en la computadora de prueba para instalar XAMPP y el proyecto Laravel.

## Pasos de Instalación Detallados

1.  **Descargar e Instalar XAMPP:**
    * Abre tu navegador web y ve al sitio oficial de descargas de XAMPP: (https://www.apachefriends.org/download.html).
    * Descarga la versión de XAMPP para Windows (o el sistema operativo de tu computadora de prueba si es diferente).
    * Elige una versión reciente que incluya una versión de PHP compatible con tu proyecto Laravel. Necesitaremos la version **PHP 8.2.12**.
    * Una vez descargado, ejecuta el archivo instalador (`.exe`). Sigue cuidadosamente las instrucciones del asistente de instalación.
    * Durante la instalación, se te preguntará qué componentes deseas instalar. Para esta prueba, asegúrate de seleccionar al menos **PHP** y **MySQL**.
    * **Apache no es estrictamente necesario iniciarlo para usar el servidor de desarrollo de Laravel, pero puedes dejarlo seleccionado por si acaso.**
    * Elige una carpeta de destino para la instalación de XAMPP (la ubicación predeterminada suele ser `C:\xampp`).
    * Completa la instalación siguiendo los pasos del asistente.

2.  **Clonar el Repositorio del Proyecto desde GitHub:**
    * Una vez instalado XAMPP, abre el **Panel de Control de XAMPP**. Puedes buscarlo en el menú de inicio de Windows.
    * En el Panel de Control de XAMPP, busca la fila de **"Apache"** o cualquier servicio que esté corriendo y a la derecha verás un botón **"Shell"**.
    * Haz clic en ese botón. Se abrirá una ventana de línea de comandos con el entorno de XAMPP configurado, lo que asegura que los comandos de PHP y Composer se ejecuten correctamente.
    * En la XAMPP Shell, navega hasta la carpeta `htdocs` dentro de la carpeta de instalación de XAMPP. Esta es la carpeta donde se almacenan los archivos web. Utiliza el comando `cd`:
        ```bash
        cd htdocs
        ```
    * Dentro de la carpeta `htdocs`, clona tu repositorio del proyecto Laravel desde GitHub utilizando el comando `git clone`:
        ```bash
        git clone https://github.com/ianVifl/SistemaHospital.git
        cd SistemaHospital
        ```

3.  **Instalar las Dependencias del Proyecto con Composer:**
    * Dentro de la carpeta de tu proyecto (aún en la XAMPP Shell), ejecuta el siguiente comando para descargar e instalar todas las bibliotecas y paquetes de PHP de los que depende tu proyecto Laravel. Estas dependencias están listadas en el archivo `composer.json` de tu proyecto.
        ```bash
        composer install
        ```
        Composer se encargará de descargar e instalar todas las dependencias necesarias en una carpeta llamada `vendor` dentro de tu proyecto. Este proceso puede tardar varios minutos dependiendo de la cantidad de dependencias y la velocidad de tu conexión a internet.
      Si no se ha instalado previamente ir a la siguiente liga y seguir los pasos de instalación: https://getcomposer.org/download/

4.  **Generar la Clave de la Aplicación Laravel:**
    * Laravel requiere una clave de aplicación única para asegurar datos sensibles. Ejecuta el siguiente comando de Artisan para generar esta clave:
        ```bash
        php artisan key:generate
        ```
        Este comando modificará el archivo `.env` de tu proyecto, estableciendo un valor para la variable `APP_KEY`. Deberías ver un mensaje en la consola indicando que la clave se ha establecido correctamente.

5.  **Crear la Base de Datos en MySQL:**
    * Abre tu navegador web y accede a phpMyAdmin, que generalmente se encuentra en `http://localhost/phpmyadmin`.
    * En la interfaz de phpMyAdmin, en la barra lateral izquierda, busca la lista de bases de datos. Si la base de datos con el mismo nombre que la de tu proyecto (`sistemahospital` en nuestro ejemplo) no existe, necesitas crearla.
    * Haz clic en el enlace **"Nueva"** o busca el campo **"Crear base de datos"**. Escribe el nombre de tu base de datos (`sistemahospital`) y haz clic en el botón **"Crear"**.

6.  **Importar la Base de Datos desde el Archivo SQL:**
    * Una vez que hayas creado la base de datos, selecciónala haciendo clic en su nombre (`sistemahospital`) en la barra lateral izquierda de phpMyAdmin. La base de datos debería aparecer resaltada.
    * En la parte superior de la ventana principal, haz clic en la pestaña **"Importar"**.
    * En la sección **"Archivo a importar"**, haz clic en el botón **"Seleccionar archivo"** y busca el archivo `.sql` que exportaste previamente desde tu entorno de desarrollo principal. Selecciónalo y haz clic en **"Abrir"**.
    * Deja las demás opciones de importación con sus valores predeterminados (generalmente `utf-8` para el conjunto de caracteres y las opciones de importación parcial activadas).
    * Finalmente, haz clic en el botón **"Continuar"** (generalmente ubicado en la parte inferior de la página) para iniciar el proceso de importación. phpMyAdmin importará la estructura de las tablas y los datos a tu base de datos local.

7.  **Configurar la Conexión a la Base de Datos Local en el Archivo `.env`:**
    * Vuelve a la carpeta de tu proyecto en el Explorador de Archivos (o en la XAMPP Shell). Busca el archivo `.env` en la raíz del proyecto y ábrelo con un editor de texto.
    * Modifica las variables de configuración de la base de datos para que apunten a tu instalación local de MySQL en XAMPP:
        ```
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1       # Indica que la base de datos está en la misma computadora (localhost)
        DB_PORT=3306              # El puerto estándar de MySQL
        DB_DATABASE=sistemahospital # El nombre de la base de datos que creaste e importaste
        DB_USERNAME=root            # El nombre de usuario por defecto para MySQL en XAMPP
        DB_PASSWORD=              # La contraseña por defecto para MySQL en XAMPP (suele estar vacía)
        ```
        **Es crucial asegurarse de que `DB_USERNAME` y `DB_PASSWORD` coincidan con la configuración de tu servidor MySQL local de XAMPP.**

8.  **Ejecutar el Servidor de Desarrollo de Laravel:**
    * Vuelve a la XAMPP Shell, asegurándote de que todavía estás dentro de la carpeta de tu proyecto. Inicia el servidor de desarrollo de Laravel con el siguiente comando:
        ```bash
        php artisan serve --host=0.0.0.0 --port=8000
        ```
        El parámetro `--host=0.0.0.0` permite que el servidor sea accesible desde cualquier dirección IP en la red local (útil para pruebas de portabilidad en diferentes dispositivos), y
       `--port=8000` especifica el puerto en el que se ejecutará el servidor. Puedes elegir otro puerto si lo prefieres.
    * Una vez que el servidor se inicie correctamente, verás un mensaje indicando la dirección en la que está corriendo (generalmente `http://0.0.0.0:8000`).

Ahora tu proyecto Laravel debería estar completamente configurado y ejecutándose localmente en tu computadora de prueba, utilizando la base de datos que importaste. 
Puedes acceder a la aplicación abriendo tu navegador web y navegando a la dirección proporcionada por el comando `php artisan serve` (probablemente `http://localhost:8000`).

by Ian Villamil :P
