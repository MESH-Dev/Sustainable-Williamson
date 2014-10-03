<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header style="background: url(<?php header_image(); ?>) no-repeat top center fixed; background-size: cover;">
  <div class="row">
    <div class="top-third light-green-bg">
      <div class="top-third-text">
        <span>Our Community Clinic</span>
      </div>
    </div>
    <div class="top-third blue-bg">
      <div class="top-third-text">
        <span>Our Campaign Platform</span>
      </div>
    </div>
    <div class="top-third bright-green-bg">
      <div class="top-third-text">
        <span>Our Outreach Response</span>
      </div>
    </div>
  </div>
  <div class="row white-bg">
    <div class="container">
      <div class="angle-left">
        <i class="fa fa-angle-up"></i>
      </div>
      <div class="content-right">
        <span>Breathing life back into Appalachia</span>

        <!-- Add the logo image here -->
        <img src="" />

      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="two columns">
        <div id="logo">
          <a href="<?php echo get_bloginfo('url'); ?>"><img src="http://placehold.it/350x150" /></a>
        </div>
      </div>
      <div class="ten columns">
        <div id="mainNav">
          <?php if(has_nav_menu('main_nav')){
              $defaults = array(
                'theme_location'  => 'main_nav',
                'menu'            => 'main_nav',
                'container'       => false,
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => ''
              ); wp_nav_menu( $defaults );
            }else{
              echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
            } ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="home-callout">
        <span>Building a culture of health for everyone</span>
      </div>
    </div>
  </div>
</header>

<!-- Open the wrapper -->
<div class="wrapper">
