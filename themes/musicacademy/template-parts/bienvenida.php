<section class="areas">
    <!-- imagen 1 -->
    <div class="area">
        <?php
        $area1 = get_field('area_1');
        $imagen = $area1['imagen1']['sizes']['medium_large'];
        $texto = $area1['texto1'];
        ?>
        <img src="<?php echo esc_attr($imagen); ?>" alt="<?php echo esc_attr($texto) ?>" />
        <p> <?php echo esc_html($texto) ?> </p>
    </div>

    <!-- imagen 2 -->
    <div class="area">
        <?php
        $area2 = get_field('area_2');
        // echo "<pre>";
        // print_r($area2);
        // echo "</pre>";
        $imagen = $area2['imagen2']['sizes']['medium_large'];
        $texto = $area2['texto2'];
        ?>
        <img src="<?php echo esc_attr($imagen); ?>" alt="<?php echo esc_attr($texto) ?>" />
        <p> <?php echo esc_html($texto) ?> </p>
    </div>

    <!-- imagen 3 -->
    <div class="area">
        <?php
        $area3 = get_field('area_3');
        // echo "<pre>";
        // print_r($area3);
        // echo "</pre>";
        $imagen = $area3['imagen3']['sizes']['medium_large'];
        $texto = $area3['texto3'];
        ?>
        <img src="<?php echo esc_attr($imagen); ?>" alt="<?php echo esc_attr($texto) ?>" />
        <p> <?php echo esc_html($texto) ?> </p>
    </div>

    <!-- imagen 4 -->
    <div class="area">
        <?php
        $area4 = get_field('area_4');
        // echo "<pre>";
        // print_r($area4);
        // echo "</pre>";
        $imagen = $area4['imagen4']['sizes']['medium_large'];
        $texto = $area4['texto4'];
        ?>
        <img src="<?php echo esc_attr($imagen); ?>" alt="<?php echo esc_attr($texto) ?>" />
        <p> <?php echo esc_html($texto) ?> </p>
    </div>
</section>