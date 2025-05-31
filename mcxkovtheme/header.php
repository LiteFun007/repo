<!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">

                              
	  <?php wp_head();?>
  </head>

  <body>
      <nav class="position-fixed w-100 navbar navbar-expand-lg bg-body-tertiary navbarfix navbarshadow">
              <a class="navbar-brand" href="#">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/svg/Logo.svg" alt="" class=""> </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#menu-1" aria-controls="menu-1" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="Menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-1',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
        </div>
                  
                  <button type="button" class="btn btn-warning me-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                      Зв'язок з нами
                  </button>
              
                  
            </div>
          </div>
      </nav>
	 