<?php
/*
Template Name: News
*/
get_header();

// Configurar la consulta para obtener las entradas de la subcategoría con ID 9
// $subCategory = array('category__in'=> array(9), 'posts_per_page'=>-1);

// $query = new WP_Query($subCategory);
// //var_dump($query);
// //var_dump($query);
// $categLink = get_category_link(9);
//echo $categLink;



$urlHome = home_url(add_query_arg(array(), $wp->request));

$category_slug = isset($_GET['category']) ? $_GET['category']: null ;

?>
<div class="container-fluid page_news">
    <div class="list_date select-filter  ">
        <div class="dropdown">
            <button type="button" class="btn btn-defatul dropdown-toggle " data-bs-toggle="dropdown" >
                Filter
            </button>
            <ul class="dropdown-menu">
                
                <li><a href="<?php echo home_url().'/news/?category=all'; ?>" >All</a></li>
                <?php $isNumeric = preg_match('/\d/', $category_slug) ? "tiene numeros": "No tiene numeros ";
                    echo $isNumeric;
                    if(preg_match('/\d/', $category_slug)){  
                         $category_slug = substr($category_slug, 0, -5); ?>
                            <li><a href="?category=<?php echo $category_slug.'_'.'2024'?> " >2024</a></li>
                    <?php }else{ ?>
                            <li><a href="?category=<?php echo $category_slug.'_'.'2024' ?> " >2024</a></li>
                    <?php };
                ?>
                <li><a href="?category=<?php echo $category_slug.'_'.'2023' ?>">2023</a></li>
                <?php ;
                echo '<h1>'.$category_slug.'</h1>'
                 ?>
                 

            </ul>
        </div>

    </div>
    <ul class="categories_news list-inline">
        <!-- Create a scrip for listenign click to element li for pait color black, so add new class for exaple active  -->
        <li class="list-inline-item">
            <a id="allNews" href="?category=all">Todo</a>
        </li>
        <li class="list-inline-item">
            <a  href="?category=events">Eventos</a>
        </li>
        <li class="list-inline-item">
            <a href="?category=news">Noticias</a>
        </li>
        <li class="list-inline-item">
            <a href="?category=press">Prensa</a>
        </li> 
        <li class="list-inline-item">
            <a href="?category=blog">Blog</a>
        </li> 
    </ul>
    <div class="line-news"></div>
    <div class="row">
        <?php 
        if(isset($_GET['category'])){
            $category_slug = $_GET['category'];
            $get_category = get_category_by_slug($category_slug);
            if($get_category){
                $id_category = $get_category->term_id;
                $args = array('cat' => $id_category, 'post_per_page' => -1);
                $query2 = new WP_Query($args);
               
                while($query2 -> have_posts()):
                    $query2->the_post();
                    $content = get_the_content();
                    $listContent = explode("\n", wpautop($content));
                    $img = $listContent[1];
                    $date = $listContent[4];
                    $title = $listContent[7];
                    $description = $listContent[10];
                    $linkForMore = $listContent[13];
                    $linkForFacebook = $listContent[16];
                    $linkForLinkIn = $listContent[19];

                    $linkMore = wp_strip_all_tags($linkForMore);
                    $linkFace = wp_strip_all_tags($linkForFacebook);
                    $linkLinkIn = wp_strip_all_tags($linkForLinkIn); 
                ?>
                    <div class="col-md-6">
                        <a href="#">
                            <?php echo $img; ?>
                        </a>
                        <p class="date_news">
                            <strong><?php echo $date; ?></strong>
                        </p>
                        <p class="title_news">
                            <strong>     
                                <?php echo $title; ?>
                            </strong>
                            
                        </p>
                        <p class="description">
                            <?php echo $description;  ?>
                        </p>
                        
                        <a class="learn_more" href="<?php echo $linkMore; ?> "><strong>Leer más</strong></a>
                        <div class="social_media">
                            <!-- href="<p><a href=&quot;https://www.freepik.com/&quot;>Freepik | Create great designs, faster</a></p>" -->
                            <a href="<?php echo $linkFace; ?>" >Facebook</a>|
                        
                            <a href="<?php echo $linkLinkIn; ?>">Linked in</a>
                        </div>
                    </div>
             <?php endwhile; ?>
            <?php }
            
        }


        ?>
    </div>
</div>
<script>

var currentUrl =window.location.search;
if(!currentUrl){
    console.log("si hay cate");
    if(!localStorage.getItem('reenvio')){
        localStorage.setItem('reenvio', true);
        document.getElementById('allNews').click();
        localStorage.removeItem('reenvio');
    }else{
        
        localStorage.removeItem('reenvio');
    }
}
// if(!localStorage.getItem('reenvio')){
//      localStorage.setItem('reenvio', true);
//      document.getElementById('allNews').click();

//  }else{
//      localStorage.removeItem('reenvio');
//  }
</script>

<?php get_footer(); ?>