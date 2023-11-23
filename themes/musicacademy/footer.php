<!-- imagen PRE footer -->
<section class="imagen-fija">
    <?php
        // ID de la imagen que quieres mostrar (reemplaza 123 con el ID correcto)
        $imagen_id = 139;

        // Obtiene la URL de la imagen utilizando wp_get_attachment_image_src
        $imagen_url = wp_get_attachment_image_src($imagen_id, 'full')[0];

        // Muestra la imagen
        echo '<img src="' . esc_url($imagen_url) . '" alt="Imagen Fija">';
    ?>
</section>


    <footer class="footer contenedor">
        <hr/>
        <div class="contenido-footer">
            <?php
                $args = array(
                    'theme_location' =>'menu-principal',
                    'container'=> 'nav',
                    'container_class' => 'menu-principal',
                );

                wp_nav_menu($args);
            ?>

            <p class="copyright">
                Todos los derechos reservados &reg;. 
                <?php echo get_bloginfo('name'). " - " . date('Y') ?>
            </p>
        </div>
    </footer>

    <?php wp_footer() ?>
</body>
</html>