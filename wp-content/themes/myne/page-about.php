<?php 
/*Template Name: About*/
get_header();
?>
<!-- BANNER-START -->

<section class="bannerWraper secSpace">
  <div class="container">
    <div class="bnr_content innerBnr">
      <h1><?php echo get_field('banner_heading');?></h1>
      <div class="paragraph"><?php echo get_field('banner_content');?></div>
    </div>
    <div class="abt_content secSpace pb-0">
      <div class="row">
        <div class="col-md-5 col-lg-5">
          <h2 class="mainTitle"><?php echo get_field('content_heading');?></h2>
        </div>
        <div class="col-md-7 col-lg-7">
          <div class="paragraph"> <?php echo get_field('content');?> </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- BANNER-END --> 

<!-- FOUNDER START -->
<section class="secSpace teamWraper">
  <div class="container">
    <div class="titleArea titlSpace">
      <h2 class="mainTitle"><?php echo get_field('founder_heading');?></h2>
    </div>
    <div class="teamBxs">
      <div class="row teamSpace">
        <?php
		if(get_field('founders'))
		{
			foreach(get_field('founders') as $founder_res)
			{
		?>
        <div class="col-md-6 teamSpace">
          <div class="teamImg">
            <?php
		  if($founder_res['founder_image'])
		  {
		  ?>
            <img src="<?php echo $founder_res['founder_image']['url'];?>" alt="img">
            <?php
		  }
		  else
		  {
		  ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/others/team.png" alt="img">
            <?php
		  }
		  ?>
          </div>
          <h4><?php echo $founder_res['founder_name'];?></h4>
          <div class="paragraph"> <?php echo $founder_res['founder_short_description'];?></div>
        </div>
        <?php
			}
		}
		?>
      </div>
    </div>
  </div>
</section>
<!-- FOUNDER END --> 

<?php
$footer = get_field('footer', 'option',true);
?>

<!-- GET_IN_TOUCH START -->
<section class="secSpace getinwraper homeOnly">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="mainTitle mb-3"><?php echo $footer['get_in_touch_heading'];?></h2>
        <div class="paragraph"> <?php echo $footer['get_in_touch_description'];?> </div>
      </div>
      <div class="col-md-6 formSpc">
        <?php echo $footer['get_in_touch_form_shortcode'];?>
      </div>
    </div>
  </div>
</section>
<!-- GET_IN_TOUCH END --> 

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
<!-- SIGNUP END -->

<?php
get_footer();
?>
