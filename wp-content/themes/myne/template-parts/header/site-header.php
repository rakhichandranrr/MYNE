<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage myne
 * @since MYNE 1.0
 */

$custom_logo_id = get_theme_mod('custom_logo');
$image = wp_get_attachment_image_src($custom_logo_id, 'full');
?>

<header id="mainHeader">
  <div class="container headCont">
    <div class="headerwraper">
      <div class="mobileHeader"> 
        <!-- LOGO-MOBILE START -->
        <div class="navbar-brand logoMobile"><img class="logo-img" src="<?php echo $image[0]; ?>" alt="MYNE"></div>
        <!-- LOGO-MOBILE END -->
        
        <button data-trigger="navbar_main" class="d-lg-none btn btn-nav_toggle" type="button"> <i class="bi bi-list"></i></button>
      </div>
      <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-md">
        <?php get_template_part( 'template-parts/header/site-branding' ); ?>
        <?php get_template_part( 'template-parts/header/site-nav' ); ?>
      </nav>
    </div>
  </div>
  <span class="screen-darken"></span> </header>
