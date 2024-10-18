<?php get_header(); ?>

<main class="container">
<div class="grid grid--type-c row">
    <div class="grid__sizer"></div>
    <div class="grid__item  col-md-4 ">
        <a href="#" class="grid__link">
            <img class="grid__img no-lazy" src="<?php echo get_template_directory_uri()?>/assets/img/1.jpg" alt="" >
             <p>Pisco bicentenario</p>
        </a>
        
    </div>
    <div class="grid__item col-md-4">
        <a href="#" class="grid__link">
            <img class="grid__img no-lazy" src="<?php echo get_template_directory_uri()?>/assets/img/2.jpg" alt="" >
        </a>
    </div>
    <div class="grid__item col-md-4">
        <a href="#" class="grid__link">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/3.jpg" alt="" class="grid__img lazy">
        </a>
    </div>
    <div class="grid__item col-md-4">
        <a href="#" class="grid__link">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/4.jpg" alt="" class="grid__img lazy">
        </a>
    </div>
    <div class="grid__item col-md-4  ">
        <a href="#" class="grid__link">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/5.jpg" alt="" class="grid__img lazy">
        </a>
    </div>
    <div class="grid__item col-md-4 ">
        <a href="#" class="grid__link">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/6.jpg" alt="" class="grid__img lazy">
        </a>
    </div>
    <div class="grid__item  col-md-4 ">
        <a href="#" class="grid__link">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/7.jpg" alt="" class="grid__img lazy">
        </a>
    </div>
</div>

</main>
<?php get_footer();?>
