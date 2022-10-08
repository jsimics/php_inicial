<?php include('header.php');?>

    <section class="contacto_contenido">
        <form action="enviar_consulta.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="contacto_input">

            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" class="contacto_input">

            <label for="edad">Edad</label>
            <input type="text" name="edad" class="contacto_input">

            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="" cols="30" rows="10" class="contacto_input"></textarea>
            <input type="submit" value="Enviar formulario">
        </form>
        
        <!Evita pantalle en blanco>
        <?php 
        if(isset($_GET['e'])){
            echo"<h3> Su mensaje ah sido enviado </h3>";
        }
        ?>

    </section>
    <?php
include('footer.php');
?>