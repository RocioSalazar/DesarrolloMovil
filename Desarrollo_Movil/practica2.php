<?php

    include "conexion.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        if (!empty($_POST['nombre'])||!empty($_POST['direccion'])||!empty($_POST['celular'])||!empty($_POST['correo'])||!empty($_POST['nota'])) {

            
            $select = mysqli_query($conexion, "SELECT * FROM agenda");

            
            if ($select) {
                while ($informacion = mysqli_fetch_array($select)) {
                    $nombre_select = $informacion['nombres'];
                    $direccion_select = $informacion['direccion'];
                    $celular_select = $informacion['no_celular'];
                    $correo_select = $informacion['correo'];
                    $nota_select = $informacion['nota'];
                }
            }else {
                echo "<script> alert('Datos no encontrados') </script>";
            }

        }else{
            echo "<script> alert('Ingrese minimo un campo') </script>";
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
    <title>Practica2</title>
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
            <p class="texto2">
                Búsqueda 
            </p>
        </div>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

            <div class="centrar">

                <input class="tamñ-input" type="text" pattern="[a-zA-Z ]+" name="nombre" placeholder="Nombres" value="<?php 
                  if(isset($nombre_select)) echo $nombre_select?>">
                <input class="tamñ-input" type="text" name="direccion" placeholder="Dirección" value="<?php 
                  if(isset($direccion_select)) echo $direccion_select?>">
                <input class="tamñ-input" type="number" pattern="[0-9]+" name="celular" placeholder="No. Celular" value="<?php 
                  if(isset($celular_select)) echo $celular_select?>">
                <input class="tamñ-input" type="email" name="correo" placeholder="Correo" value="<?php 
                  if(isset($correo_select)) echo $correo_select?>">
                
                <textarea class="tam-input tamñ-input" name="nota" placeholder="Nota" name="" id="" cols="30"
                    rows="10"><?php 
                  if(isset($nota_select)) echo $nota_select?></textarea>
            </div>

            <div class="btn-div">
                <input class="boton-contacto" type="submit" value="Buscar">
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