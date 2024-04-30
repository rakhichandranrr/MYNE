<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage myne
 * @since MYNE 1.0
 */

$custom_logo_id = get_theme_mod('custom_logo');
$image = wp_get_attachment_image_src($custom_logo_id, 'full');

?>

<div class="colapHeader"> <a class="navbar-brand logoWeb" href="<?php echo esc_url(home_url('/')); ?>"><img class="logo-img" src="<?php echo $image[0]; ?>" alt="MYNE"></a>
  <div class="offcanvas-header">
    <button class="btn-close"><i class="bi bi-x-lg"></i></button>
  </div>
</div>
