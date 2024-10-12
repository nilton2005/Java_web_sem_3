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
              <li><a href="#!">About</a></li>
              <li><a href="#!">Services</a>
              <li><a href="#!">Clients</a></li>
              <li><a href="#!">News</a></li>
              <li><a href="#!">Contact</a></li>
            </ul>
          </nav>
        </div>
      </section>
    
  </header>
  
