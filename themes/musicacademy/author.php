<?php
    get_header();
?>
    <main class="seccion contenedor">
        <?php 
            $author = get_queried_object();
        ?>
        <h2 class="text-primary text-center">
            Author: <?php echo  $author->data->display_name; ?>
        </h2>

        <p class="text-center">
            <?php echo get_the_author_meta('description', $author->data->ID); ?>
        </p>

        <ul class="listado-grid">
            <?php
                while( have_posts() ){ //es una variante a la otra forma
                    the_post();
                    get_template_part('template-parts/blog');
                }
            ?>
        </ul>
    </main>

<?php
    get_footer();
?>