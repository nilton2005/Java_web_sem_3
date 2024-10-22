<?php 

function init_template(){

    // Herramienta que se cargarán 
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('the_custom_logo', array(
        'height'    => 100,
        'width'     => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

    register_nav_menus(array(
        'top_menu' => 'Menú pricipal'
    ));
}
// Cargamos los estilos
add_action('after_setup_theme', 'init_template');

function assets(){
    wp_register_style('boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', '', '5.3.3', 'all');
    wp_register_style('monstserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', '', '1.0', 'all');

    wp_enqueue_style('estilos', get_stylesheet_uri(), array('boostrap', 'monstserrat'), '1.1', 'all');

    // this links for the styles for sliders
    wp_enqueue_style('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css', '', '1.3.3', 'all');
    wp_enqueue_style('owl-theme', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css', '', '1.3.3', 'all');

    // this links for the styles for the font awesome

    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', '', '2.11.8',true);

    wp_enqueue_script('boostraps','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js', array('jquery', 'popper'),'5.3.3', true);

    wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js','', '1.2', true);

    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-1.12.0.min.js', ' ', '1.12.0', true);

    wp_enqueue_script('owl-corouser', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js', '', '1.3.3', true);

    // estos son los scripts que se cargaran en la pagina

    wp_enqueue_script(
        'masonry',
        get_stylesheet_directory_uri().'/assets/js/masonry.pkgd.min.js',
        '',
        '1.0.2',
        true
    );

    wp_enqueue_script(
        'images-loaded',
        get_stylesheet_directory_uri().'/assets/js/imagesloaded.pkgd.min.js',
        '',
        '1.0.2',
        true
    );

    wp_enqueue_script(
        'anime',
        get_stylesheet_directory_uri().'/assets/js/anime.min.js',
        '',
        '1.0.2',
        true
    );

    wp_enqueue_script(
        'masonry-init',
        get_stylesheet_directory_uri().'/assets/js/masonry-init.js',
        '',
        '1.0.2',
        true
    );
}

// Cargamo los estilo

add_action('wp_enqueue_scripts','assets');

function sidebar(){
    register_sidebar(
        array(
            'nombre' => "footer",
            'id' => "footer",
            'description' => "esto es la primera vez",
            'before_title' => '<p>',
            'after_title' => '</p>',
            'before_widget' => '<div id="%1$s">',
            'after_widget' => '</div>',

        )
        );
}

add_action('widgets_init', 'sidebar');

