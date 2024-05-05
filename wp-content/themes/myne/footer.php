<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage myne
 * @since MYNE 1.0
 */


$footer = get_field('footer', 'option',true);
$social_media =  get_field('social_media_links', 'option',true);

$custom_logo_id = get_theme_mod('custom_logo');
$image = wp_get_attachment_image_src($custom_logo_id, 'full');
?>

<!-- FOOTER-START -->

<footer>
  <div class="container">
    <div class="row footer_wrapper">
      <div class="f_about col-md-8 col-lg-9">
        <div class="f_logo"> <img src="<?php echo $image[0]; ?>" alt="img"> </div>
        <h6 class="my-4"><?php echo $footer['footer_logo_tagline'];?></h6>
        <div class="appIcons my-2">
          <?php echo get_app_icons();?>
        </div>
      </div>
      <div class="f_links col-md-4 col-lg-3">
        <ul>
          <li> <a href="<?php echo site_url();?>/about-us/">Security</a> </li>
          <li> <a href="<?php echo site_url();?>/features/">Features</a> </li>
          <li> <a href="<?php echo site_url();?>/terms-conditions/">Terms & Conditions</a> </li>
          <li> <a href="<?php echo site_url();?>/privacy-policy/">Privacy policy</a> </li>
        </ul>
      </div>
    </div>
    <div class="footerBtm pt-3 mt-4">
      <div class="copyrights"> Copyright <i class="bi bi-c-circle"></i> <?php echo date('Y');?> myne. All rights reserved. </div>
      <div class="socialFtr">
        <ul>
          <li> <a href="<?php echo $social_media['linkedin_url'];?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social1.svg" alt="icon"></a> </li>
          <!-- <li> <a href="<?php echo $social_media['twitter_url'];?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social2.svg" alt="icon"></a> </li>
          <li> <a href="<?php echo $social_media['facebook_url'];?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social3.svg" alt="icon"></a> </li> -->
          <li> <a href="<?php echo $social_media['instagram_url'];?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social4.svg" alt="icon"></a> </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!-- FOOTER-END -->

<?php wp_footer(); ?>
</body></html>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
function onload() {
      $("#contact ").click(function() {
    grecaptcha.execute();
});
    }
	

$("#contact ").click(function() {
    grecaptcha.execute();
});
</script>
