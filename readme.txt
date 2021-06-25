Lugares donde se encuentran los direcciones locales del servidor a cambiar cuando se traslade
==============================================================================================================================================
-Style.css ../public/css/style.css
    lineas: 1859, 1892, 1927, 2107, 2166 y 2172
==============================================================================================================================================

-ajaxfuncs.js ../public/Admin/js/ajaxfuncs.js
    lineas: 122, 212, 237, 313, 392, 484, 487, 491, 536 y 928
==============================================================================================================================================

Para cambiar la configuracion de los servidores modificar el archivo config.php
-config.php ../app/config/config.php
    lineas: 11: define("RUTAPUBLIC", "http://localhost/demo"); modificar "localhost" por nombre del servidor
            16: define("NOMBREAPP", "Soy Su voz"); modificar "soy su voz" a cualquier otro nombre
            03: define("HOST", "localhost"); define el servidor local de la BD
            04: define("USER", "root"); define el usuario de la base de datos del servidor
            05: define("PASS", ""); define la contraseña de la base de datos
            06: define("NAME", "demo"); define el nombre de la base de datos

==============================================================================================================================================
Para modificar las cabeceras de acceso .htaccess modificar:
.htaccess ../public/.htaccess
    linea: 4 - modificar "demo/public" por el acceso raiz del servidor
==============================================================================================================================================
Base de datos