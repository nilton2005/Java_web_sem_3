<?php
/*
Template Name: Galería de Imágenes
*/
get_header();
?>

<main class="container">
    <div class="grid grid--type-c row">
        <div class="grid__sizer"></div>

        <?php
        $args = array(
            'category_name' => 'galeria', // Categoria Galería
            'posts_per_page' => -1, // Todas las entradas
        );
        $query = new WP_Query( $args );

        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post();
        ?>
            <div class="grid__item col-md-4">
                <a href="<?php the_permalink(); ?>" class="grid__link">
                    <!-- Mostrar la imagen destacada -->
                    <?php if ( has_post_thumbnail() ) : ?>
                        <img class="grid__img no-lazy" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php else : ?>
                        <img class="grid__img no-lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" alt="Imagen por defecto">
                    <?php endif; ?>

                    <!-- Mostrar el subtítulo (contenido de la entrada) -->
                    <p><?php the_content(); ?></p>
                </a>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No hay entradas en la categoría Galería.</p>';
        endif;
        ?>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php
            // Mostrar el footer
            if ( is_active_sidebar( 'footer' ) ) {
                dynamic_sidebar( 'footer' );
            }
            ?>
        </div>
        
    </div>
</main>

<?php get_footer(); ?>
