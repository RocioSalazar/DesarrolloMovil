<?php


    include "conexion.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        if (!empty($_POST['nombre'])&&!empty($_POST['direccion'])&&!empty($_POST['celular'])&&!empty($_POST['correo'])&&!empty($_POST['nota'])) {

            $nombre = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $celular = $_POST['celular'];
            $correo = $_POST['correo'];
            $nota = $_POST['nota'];
            
            $insert = mysqli_query($conexion, "INSERT INTO agenda VALUES (NULL, '$nombre','$direccion','$celular','$correo','$nota')");

            if ($insert) {
                echo "<script> alert('Datos enviados') </script>";
            }else{
                echo "<script> alert('Envío fallido') </script>";
            }

        }else{
            echo "<script> alert('Completa los campos') </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@700&display=swap" rel="stylesheet">
    <title>Practica1</title>
</head>
<body>
    <nav class="menu-via">
        <ul class="ul-menu-via">
            <a class="ancla-menu-via" href="index.html">
                <li class="li-menu-via">Inicio</li>
            </a>
            <a class="ancla-menu-via" href="imagenes.html">
                <li class="li-menu-via">Imágenes</li>
            </a>
            <a class="ancla-menu-via" href="videos.html">
                <li class="li-menu-via">Videos</li>
            </a>
            <a class="ancla-menu-via" href="audios.html">
                <li class="li-menu-via">Audios</li>
            </a>
            <li class="li-menu-desplegable li-practica">Prácticas
                <ul class="ul-practica-desplegable desaparece">
                    <a href="practica1.php" class="ancla-menu-practica">
                        <li class="li-practica-desplegable desaparece">
                            Práctica 1</li>
                    </a>
                    <a href="practica2.php" class="ancla-menu-practica">
                        <li class="li-practica-desplegable desaparece">Práctica 2</li>
                    </a>
                </ul>
            </li>
        </ul>
    </nav>

    <div class="contenedor-contactos">
        <div>
            <p class="texto1">
                AGENDA <br>
                Estoy a tu disposición en cada una de las redes sociales que te proporciono o me puedes mandar un
                mensaje para cualquier duda o pregunta.
            </p>
        </div>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="centrar">

                <input class="tamñ-input" type="text" pattern="[a-zA-Z ]+" name="nombre" placeholder="Nombres" required>
                <input class="tamñ-input" type="text" name="direccion" placeholder="Dirección" required>
                <input class="tamñ-input" type="text" pattern="[0-9]+" name="celular" placeholder="No. Celular" required>
                <input class="tamñ-input" type="email" name="correo" placeholder="Correo" required>
                
                <textarea class="tam-input tamñ-input" name="nota" placeholder="Nota" name="" id="" cols="30"
                    rows="10" required></textarea>
                    
            </div>
                
            <div class="btn-div">
                <input class="boton-contacto" type="submit" value="Guardar">
                <input class="boton-contacto" type="reset" value="Borrar">
            </div>
                
        </form>    

        <div class="todos-anclas">
            <a class="icon-facebook-square iconofb icono-contacto"
                href="https://web.facebook.com/rocio.sc.129/"><span class="text-contacto"> Rocio Salazar</span></a>
            <a class="icon-instagram iconoig icono-contacto"
                href="https://www.instagram.com/rociosalazar2817/?hl=es-la"><span class="text-contacto">
                    rociosalazar2817</span></a>
            <a class="icon-whatsapp iconowh icono-contacto" href=""><span class="text-contacto">
                    6182612810</span></a>
            <a class="icon-mail iconogm icono-contacto"
                href="mailto:rociosalazar3457@gmail.com?Subject=Presupuesto o Más Info."><span
                    class="text-contacto"> rociosalazar3457@gmail.com</span></a>
        </div>

    </div>
</body>
</html>