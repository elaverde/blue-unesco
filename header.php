<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php 
  wp_title(' | ', true, 'right');
  bloginfo('name');


   ?></title>
  <style type="text/css" media="screen">
  	body{
  		margin-top: 40px;
  	}
  	header{
  		background: <?php echo get_theme_mod('telepathe_colors') ?> ;
  	}
  </style>
  <?php 

  wp_head();

   ?>
</head>
<body <?php body_class(); ?> >
	<header class="u_header">
		<nav>
    <div class="">
      <div class="row mx-0">
        <div class="col-12  px-0">
          <div class="u_header">
            <div class="nav-slider">
              <?php
                if (has_nav_menu('primary_menu')) {
                  wp_nav_menu(array(
                    'theme_location' => 'primary_menu',
                    'menu_class' => 'nav nav-border-white',
                    'container' => '',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'walker' => new Custom_Nav_Walker()
                  ));
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>

		</nav>
	</header><!-- /header -->
</body>
