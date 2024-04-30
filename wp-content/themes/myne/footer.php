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


$footer = get_field('footer', 'option');
?>
<!-- GET_IN_TOUCH START -->

<section class="secSpace getinwraper homeOnly">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="mainTitle mb-3"><?php echo $footer['get_in_touch_heading'];?></h2>
        <div class="paragraph"> Want to learn more and hear directly from us?<br>
          Send us your message and we'll get in touch. </div>
      </div>
      <div class="col-md-6 formSpc">
        <form>
          <div class="form-group mb-3">
            <input type="text" class="form-control white" placeholder="Full Name">
          </div>
          <div class="form-group mb-3">
            <input type="email" class="form-control white" placeholder="Email address">
          </div>
          <div class="form-group mb-4">
            <textarea class="form-control white" rows="3" placeholder="Message"></textarea>
          </div>
          <div class="form-group mb-2">
            <button type="submit" class="btn btn-primary">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- GET_IN_TOUCH END --> 
<!-- SIGNUP START -->
<section class="ftrAdjut">
  <div class="container">
    <div class="getstartWraper signupWrap">
      <div class="row algTxt">
        <div class="col-md-7 col-lg-6">
          <h2 class="m-0"><strong>Sign up now</strong> and start building your personal wealth.</h2>
        </div>
        <div class="col-md-5 col-lg-6 text-end"> <a class="getBtn btn" href="#">Sign up now</a> </div>
      </div>
    </div>
  </div>
</section>
<!-- SIGNUP END --> 
<!-- FOOTER-START -->
<?php
$custom_logo_id = get_theme_mod('custom_logo');
$image = wp_get_attachment_image_src($custom_logo_id, 'full');
?>
<footer>
  <div class="container">
    <div class="row footer_wrapper">
      <div class="f_about col-md-8 col-lg-9">
        <div class="f_logo"> <img src="<?php echo $image[0]; ?>" alt="img"> </div>
        <h6 class="my-4">Take control of your wealth with Myne.</h6>
        <div class="appIcons my-2">
          <div class="btnSpace"> <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/appstore.png" alt="img"></a> </div>
          <div class="btnSpace"> <a href="#" target="_blank" ><img style="opacity:0.5;" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/playstore.png" alt="img"> <span>Coming soon</span></a> </div>
        </div>
      </div>
      <div class="f_links col-md-4 col-lg-3">
        <ul>
          <li> <a href="about.html">About us</a> </li>
          <li> <a href="#">Features</a> </li>
          <li> <a href="#">Terms & conditions</a> </li>
          <li> <a href="#">Privacy policy</a> </li>
        </ul>
      </div>
    </div>
    <div class="footerBtm pt-3 mt-3">
      <div class="copyrights"> Copyright <i class="bi bi-c-circle"></i> 2024 myne. All rights reserved. </div>
      <div class="socialFtr">
        <ul>
          <li> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social1.svg" alt="icon"></a> </li>
          <li> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social2.svg" alt="icon"></a> </li>
          <li> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social3.svg" alt="icon"></a> </li>
          <li> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social4.svg" alt="icon"></a> </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!-- FOOTER-END -->

<?php wp_footer(); ?>
</body></html>