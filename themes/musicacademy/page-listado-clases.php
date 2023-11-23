<?php
    /**
     * Template Name: Listado de Clases
     */
    get_header();
?>

    <main class="contenedor seccion">
        <?php
            get_template_part('template-parts/pagina');
        ?>

        <!-- el listado de clases, con todas las disponibles -->
        <?php musicacademy_lista_clases() ?>
    </main>

<?php
    get_footer();
?>


