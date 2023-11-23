<?php
    get_header();
?>

<section class="bienvenida seccion contenedor text-center">
    <h2 class="text-primary">
        <?php the_field('encabezado_bienvenida'); ?>
    </h2>
    <p><?php the_field('texto_bienvenida'); ?></p>
</section>

<!-- seccion de bienvenida -->
<?php
    get_template_part('template-parts/bienvenida');
?>

    <main class="contenedor seccion">
        <h2 class="text-center text-primary">Nuestras Clases</h2>
        <?php musicacademy_lista_clases(4) ?>

        <div class="contenedor-boton">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('clases'))); ?>" class="boton boton-primario">
                Ver todas las clases
            </a>
        </div>
    </main>

    <!-- seccion de profesores -->
    <section class="contenedor seccion">
        <h2 class="text-center text-primary">Nuestros Profesores</h2>
        <p class="text-center">Profesionales que te ayudaran a lograr tus objetivos</p>
        <?php musicacademy_profesores() ?>
    </section>

    <!-- seccion de testimoniales -->
    <section class="testimoniales">
        <h2 class="text-center text-blanco">Testimoniales</h2>

        <div class="contenedor-testimoniales swiper">
            <?php musicacademy_testimoniales(); ?>
        </div>
    </section>

    <!-- seccion blog -->
    <section class="contenedor seccion">
        <h2 class="text-center text-primary">Nuestros Blog</h2>
        <p class="text-center">Aprende Tips de nuestros profesores expertos</p>

        <ul class="listado-grid">
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4
                );
                $blog = new WP_Query($args);
                while ($blog -> have_posts()) {
                    $blog->the_post();

                    get_template_part('template-parts/blog');
                }
                wp_reset_postdata();
            ?>
        </ul>
    </section>

<?php
    get_footer();
?>