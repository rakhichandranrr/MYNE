<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage myne
 * @since MYNE 1.0
 */

?>

<!-- BANNER-START -->

<section class="bannerWraper secSpace privacy">
  <div class="container">
    <div class="bnr_content innerBnr">
      <h1>
        <?php 
		if(get_field('content_heading'))
		{
			echo get_field('content_heading');
		}
		else
		{
		
		the_title();
		}
		?>
      </h1>
    </div>
  </div>
</section>
<!-- BANNER-END --> 

<!-- FOUNDER START -->
<section class="secSpace norm_conts">
  <div class="container">
    <div class="paragraph">
      <?php the_content();?>
    </div>
  </div>
</section>
<!-- FOUNDER END --> 
<?php
$footer = get_field('footer', 'option',true);
?>
<!-- APP-DOWNLOAD START -->
<section class="ftrAdjut appDownload">
  <div class="container">
    <div class="getstartWraper signupWrap">
      <div class="row algTxt">
        <div class="col-md-7 col-lg-6">
          <h2 class="m-0"><?php echo $footer['download_app_content'];?></h2>
        </div>
        <div class="col-md-5 col-lg-6 text-end">
          <div class="appIcons my-2">
            <?php echo get_app_icons();?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

