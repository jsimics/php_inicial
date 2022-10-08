<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>

<body>
    <header class="header">
        <nav class="boton_principal">
            <ul>
                <li> <a href="index.php"> Home </a></li>
                <li><a href="tienda.php"> Productos </a></li>
                <li><a href="nosotros.php"> Nosotros</a></li>
                <li><a href="contacto.php"> Contacto</a></li>

            </ul>
        </nav>
    </header>
    <section class="tienda_contenido">
        <h2>Productos</h2>
        <ul>
            <li><a href="tienda.php?producto=ct">chocotorta</a></li>
            <li><a href="tienda.php?producto=tr">Tarta de Ricota</a></li>
            <li><a href="tienda.php?producto=rc">Roll de Canela</a></li>

        </ul>

    </section>

    <?php
    $nombre = null;
    $ingredientes = null;
    $precio = null;
    if (isset($_GET['producto'])) {
        switch ($_GET['producto']) {
            case 'ct':
                $nombre = "chocotorta";
                $ingredientes = "chocolinas, dulce de leche, crema";
                $precio = 1000;
                $img = './img/chocotorta.jpg';
                break;
            case 'tr':
                $nombre = "Tarta de Ricota";
                $ingredientes = "Ricota, azucar y pasas";
                $precio = 1200;
                $img = './img/ricota.jpg';
                break;
            case 'rc':
                $nombre = "roll de canela";
                $ingredientes = "Canela, manzana";
                $precio = 1300;
                $img = './img/roll.jpg';
                break;
        }
    }
    ?>

    <div class="producto_descripcion">
        <h2><?php echo $nombre;?></h2>
        <h3><?php echo $ingredientes;?></h3>
        <h4><?php echo $precio;?></h4>
        <div class="contenedor_img">
            <img src="<?php echo $img; ?>" alt="">
        </div>
    </div>
<?php
include("footer.php");
?>
