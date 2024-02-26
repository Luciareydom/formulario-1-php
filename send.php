<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Datos enviados a partir del formulario de contacto.">
    <title>Datos enviados</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <main class="main-content datos-enviados">
        <?php
        // Convierte los índices del $_REQUEST en variables (índices de los arrays asociativos) para poder acceder a ellos de manera más sencilla sin tener que volver a escribir $_REQUEST
        extract($_POST);
        if(isset($_REQUEST['nombre']))
        {
            //Gestionamos
            if (trim($nombre) === '') { // también se puede pregutar por la longitud --> strlen(trim($nombre)) === 0
                echo "<p>Error. El nombre es obligatorio.</p>";
            } else {
                if (trim($email) === '') {
                    echo "<p>Error. El correo electrónico es obligatorio.</p>";
                } else {
                    ?>
                        <section>
                            <h1>Se han enviado los siguentes datos:</h1>
                            <p>Nombre: <?=$nombre?></p>
                            <?php if (trim($apellidos) != '') {
                                echo "<p>Apellidos: $apellidos</p>";
                            }
        
                            if (trim($edad) != '') {
                                echo "<p>Edad: $edad</p>";
                            }
                            if (isset($genero)) {
                                echo "<p>Género: $genero</p>";
                            }
                            ?>
        
                            <p>Correo electrónico: <?=$email?></p>
                            <?php if (trim($tlf) != '') {
                                echo "<p>Teléfono: $tlf</p>";
                            }
                            ?>
                        </section>
                    <?php
                }
            }
        } else {
            //echo 'Permisos insuficientes';
            die('Permisos insuficientes.');
        }
        echo '<a href="./">🔙 Volver</a>';
        // Usando JS para que el enlace de volver vaya una página en el historial de navegación en vez de volver a una página concreta
        // echo '<a href="javascript:window.history.back(-1)">Volver</a>';
        ?>
        
    </main>
</body>
</html>



