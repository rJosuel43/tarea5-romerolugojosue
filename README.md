Tarea 5 - Despliegue de Saas

Este proyecto es una aplicación sencilla en PHP que demuestra cómo usar variables de entorno para mostrar un mensaje personalizado. La idea es que la aplicación funcione sin modificar el código fuente, solo cambiando la variable de entorno, siendo esto util para aplicaciones SaaS o en la nube.
La aplicación muestra un mensaje en el navegador y puede personalizarse con la variable MENSAJE_APP.

INSTRUCTIVO


1. Abrir XAMPP: Arranca el panel de control de XAMPP y asegúrate de que Apache esté iniciado.


2. Ubicar la carpeta del proyecto: La carpeta descargada tarea5-romerolugojosue debe estar dentro de:

C:\xampp\htdocs


3. Configurar la variable de entorno: Para que el mensaje se personalice, definimos la variable MENSAJE_APP en Windows:

-Presiona Windows + R, escribe sysdm.cpl y entra en Variables de entorno.

-Crea una variable nueva con nombre MENSAJE_APP y el valor que quieras mostrar, por ejemplo:

"Hola, mundo"

-Acepta y cierra todas las ventanas.


4. Reiniciar Apache: Para que Apache lea la nueva variable, en XAMPP debemos detener y volver a iniciar Apache.

5. Abrir la aplicación en el navegador: En el navegador, se escribe:

"http://localhost/tarea5-romerolugojosue"

Se verás el mensaje personalizado. Si no se configura  la variable, se mostrará un mensaje predeterminado que ya viene en el código.
