<?php

function musicacademy_lista_clases($cantidad = -1) {
    // si la cantidad es -1 me va a tomar todo lo posible
    ?>

    <ul class="listado-grid">
        <?php
            $args = array(
                'post_type' => 'musicacademy_clases',
                'posts_per_page' => $cantidad
        );

        $clases = new WP_Query($args);

        while ($clases->have_posts()) {
            $clases->the_post();
        ?>

            <li class="card">
                <a href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail() ?>
                    <div class="contenido">
                        <h3><?php the_title() ?></h3>

                        <?php
                            $hora_inicio = get_field('hora_inicio');
                            $hora_fin = get_field('hora_fin');
                        ?>
                        <p>
                            <?php the_field('dias_clase'); ?> -
                            <?php echo $hora_inicio . " a " . $hora_fin; ?>
                        </p>
                    </div>
                </a>
            </li>

        <?php
        }
            wp_reset_postdata();
        ?>
    </ul>

    <?php
}


// profesores
function musicacademy_profesores() {
    ?>

    <ul class="listado-grid profesores">
        <?php
            $args = array(
                'post_type' => 'profesores',
                // 'posts_per_page' => $cantidad
        );

        $profesores = new WP_Query($args);

        while ($profesores->have_posts()) {
            $profesores->the_post();
        ?>

            <li class="profesor">
                <?php the_post_thumbnail('large') ?>
                <div class="contenido text-center">
                    <h3><?php the_title() ?></h3>
                    <?php the_content() ?>

                    <div class="especialidad">
                        <?php
                            $especialidad = get_field('especialidad');

                            foreach ($especialidad as $e) {
                                ?> 
                                <span class="etiqueta">
                                    <?php echo esc_html($e); ?>
                                </span>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </li>

        <?php
        }
            wp_reset_postdata();
        ?>
    </ul>

    <?php
}

function musicacademy_testimoniales(){
    ?>
    <ul class="listado-testimoniales swiper-wrapper">
        <?php
            $args = array(
                'post_type' => 'testimoniales',
                // 'posts_per_page' => $3
        );

        $testimoniales = new WP_Query($args);

        while ($testimoniales->have_posts()) {
            $testimoniales->the_post();
        ?>

            <li class="testimonial text-center swiper-slide">
                <blockquote>
                    <?php the_content() ?>

                    <footer class="testimonial-footer">
                        <?php the_post_thumbnail('thumbnail') ?>
                        <p>
                            <?php the_title() ?>
                        </p>
                    </footer>
                </blockquote>
            </li>

        <?php
        }
            wp_reset_postdata();
        ?>
    </ul>
    <?php
}