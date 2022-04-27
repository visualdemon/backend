<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend Admin</title>
</head>
<body>

<h1>Backend admin</h1>

    <?php

        include "Modules/header.php";
        include "Modules/login.php";
        include "Modules/menu.php";
        include "Modules/footer.php";

        #rutas

        if  (isset($_GET ["ruta"])) {
        
            if ($_GET["ruta"] == "inicio" || $_GET["ruta"] == "perfil" || $_GET["ruta"] == "productos") {
                include "Modules/" . $_GET["ruta"] . ".php";
                }
            
        }

    ?>
    
</body>
</html>