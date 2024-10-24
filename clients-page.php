<?php
get_header();
/* 
Template Name: Clients
*/
?>
<main class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="client-slider" class="owl-carousel">
            
                <?php 
                
                 $todEntradas = array(
                    'category_name' => 'clientes',
                    'posts_per_page' => -1 // todas la entradas para categoria
                );
                $query = new WP_Query($todEntradas);
                if($query -> have_posts()):
                    while($query -> have_posts()):
                        $query->the_post();
                        $content = get_the_content();
                        $parrafos = explode("\n" ,wpautop($content));
                        $nombreEmpresa = $parrafos[1];
                        $fechaEmpresa = $parrafos[4];
                ?>
                <div class="client">
                    <div class="client-content">
                        <p class="description"><?php echo $nombreEmpresa  ?></p>
                    </div>
                    <h3 class="title"><?php echo $fechaEmpresa ?></h3>
                </div>
                <?php  endwhile; 
                    wp_reset_postdata();
                ?>

               <?php endif; ?>  
            </div>
        </div>
    </div>

</main>
<?php
get_footer();
?>