<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
  <header>
      <section class="navigation">
        <div class="nav-container">
          <div class="brand">
            <a href="#!">
              <img src="<?php echo get_template_directory_uri()?>/assets/img/logo.jpg" alt="logo" >
            </a>
          </div>
          <nav>
            <div class="nav-mobile">
              <a id="nav-toggle" href="#!"><span></span></a>
            </div>
            <ul class="nav-list">
              <!-- Setting the links to #! will ensure that no action takes place on click. -->
                <li><a href="<?php echo get_permalink(get_page_by_path('about')); ?>">About</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('services')); ?>">Services</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('clients')); ?>">Clients</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('news')); ?>">News</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Contact</a></li>
            </ul>
          </nav>
        </div>
      </section>
    
  </header>
  
