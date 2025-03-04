# **Proyecto Marvel Countdown**

## **Descripción**
Este proyecto es una práctica básica utilizando **PHP**, **HTML**, **CSS** y la **API de MCU-Countdown**. El objetivo es mostrar información sobre la próxima película o serie del universo Marvel, utilizando datos en tiempo real proporcionados por una API.

Se presenta el **poster de la película**, el **nombre del título**, el **número de días hasta el estreno** y la **siguiente película/serie que se estrenará**. Además, la interfaz se presenta con un diseño sencillo y elegante gracias a **Pico CSS**.

## **Tecnologías usadas**

- **PHP**: Lenguaje de programación utilizado para hacer la solicitud a la API y procesar los datos.
- **HTML**: Lenguaje de marcado utilizado para estructurar el contenido de la página web.
- **CSS**: Hojas de estilo utilizadas para estilizar la página y mejorar su diseño.
- **API de MCU-Countdown**: API externa utilizada para obtener información sobre las próximas películas del universo Marvel.
- **Pico CSS**: Un framework de CSS minimalista utilizado para estilizar la interfaz de manera sencilla y rápida.

## **Objetivo del Proyecto**
Este proyecto tiene como objetivo mostrar cómo interactuar con una API utilizando PHP para obtener datos y presentarlos de forma visual en una página web. Es una práctica sencilla que muestra cómo realizar solicitudes HTTP a una API, procesar los datos (JSON) y presentarlos en un sitio web con un diseño limpio y minimalista.

## **Características**
- Visualiza la próxima película o serie de Marvel.
- Muestra el número de días hasta el estreno.
- Presenta el cartel de la película.
- Muestra el nombre de la siguiente producción que se estrenará.
- Diseño simple y elegante con **Pico CSS**.

## **Cómo ejecutar el proyecto**

1. **Clonar el repositorio o descargar los archivos**:
   Si tienes el repositorio en GitHub, clónalo en tu entorno local o descarga los archivos directamente.
   
2. **Configurar el archivo PHP**:
   Asegúrate de tener un entorno de desarrollo PHP funcionando en tu máquina local o en un servidor que soporte PHP. El archivo PHP principal hace una llamada a la API de Marvel para obtener los datos.

3. **Acceder al proyecto**:
   Abre el archivo `.php` en tu navegador a través de tu servidor PHP local (por ejemplo, con `localhost/nombre_del_archivo.php`).

## **Estructura de Archivos**
- **index.php**: El archivo principal donde se hace la solicitud a la API y se muestra el contenido en la página.
- **style.css**: Estilos CSS personalizados para el proyecto.

## **Instalación de Dependencias**
El proyecto utiliza el framework de CSS **Pico CSS**, que se incluye directamente desde una CDN:

```html
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
```
No es necesario instalar nada adicional, ya que la CDN maneja la carga de los archivos necesarios.
