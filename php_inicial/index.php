

        <?php include('header.php');?>
        <?php

        //esto es un comentario una linea
        /*esto es un comentario multilinea*/

        //VARIABLES
        $titulo = "Cursos";
        $texto1 = "php y mysqlinicial";
        $unidades1 = 8;
        $arancel1 = 5365;
        $fecha1 = "10/11/2022";

        $texto2 = "php Intermedio";
        $unidades2 = 8;
        $arancel2 = 14766;
        $fecha2 = "12/01/2022";

        ?>

        <h2> <?php
                echo $titulo; ?></h2>

        <section class="contenido">
            <h3>Curso: <?php echo $texto1; ?></h3>

            <ul>
                <li>Duracion: <?php echo $unidades1; ?></li>
                <li>Costo: <?php echo $arancel1; ?></li>
                <li>fecha: <?php echo $fecha1; ?></li>
            </ul>

            <h3>Curso: <?php echo $texto2; ?></h3>

            <ul>
                <li>Duracion: <?php echo $unidades2; ?></li>
                <li>Costo: <?php echo $arancel2; ?></li>
                <li>fecha: <?php echo $fecha2; ?></li>
            </ul>
        </section>


        <?php
        $duracion_total = $unidades1 + $unidades2;
        $arancel_total = $arancel1 + $arancel2;
        $dolar = 300;
        $precio_dolar = $arancel_total / $dolar;
        ?>
        <section class="totales">
            <h3>Totales</h3>

            <ul>
                <li>Duracion: <?php echo $duracion_total; ?></li>
                <li>Costo: <?php echo $arancel_total; ?></li>
                <li>Costo Dolares: <?php echo round($precio_dolar); ?></li>
            </ul>
        </section>

        
            <?php
            //CONSTANTES
            define('constante', 'hola mundo');
            echo constante;

            define('comida', array("pizza", "tallarin", "guiso"));
            echo "<br>";
            echo comida[1];

            const constante2 = "soy una constante con const";
            echo "<br>";
            echo constante2;

            const comida2 = array("pizza", "tallarin", "guiso");
            echo "<br>";
            echo comida[2];
            echo "<br>";
            echo "<br>";
            //Constantes predefinidas

            echo PHP_INT_MAX;
            echo "<br>";
            echo PHP_INT_MIN;



            ?>
            <footer class="footer">
                <h4>Pie de pagina</h4>
            </footer>

</body>

</html>