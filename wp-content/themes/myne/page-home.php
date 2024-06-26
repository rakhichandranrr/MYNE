<?php 
/*Template Name: Home*/
get_header();

$banner = get_field('banner');
$get_started = get_field('get_started');
$why_choose_myne = get_field('why_choose_myne');
$technology = get_field('technology_section');

?>

<!-- BANNER-START -->

<section class="bannerWraper secSpace">
  <div class="container">
  <div class="bnr_content">
    <!-- <h1><?php echo $banner['banner_heading'];?></h1> -->

    <h1 class="txtHeight" > <span id="types"></span> </h1> 

    <h6><?php echo $banner['banner_sub_heading'];?></h6>
    <div class="appIcons mt-4"> <?php echo get_app_icons();?></div>
      <div class="paragraph"> <?php echo $banner['banner_description'];?></div>
    </div>
    
    <!-- VIDEO START -->
    <div class="videoWraper">
      <video autoplay muted loop playsinline class="video-banner">
        <source src="<?php echo $banner['banner_video']['url'];?>" type="video/mp4">
        Your browser does not support the video. </video>
    </div>
    <!-- VIDEO END --> 
    
    <!-- GET-STARTED START -->
    <div class="getstartWraper mt-5">
      <div class="row algTxt">
        <div class="col-md-9 col-lg-10">
          <h2><?php echo $get_started['get_started_heading'];?></h2>
          <h6><?php echo $get_started['get_started_sub_heading'];?></h6>
        </div>
        <div class="col-md-3 col-lg-2 text-end"> <a class="getBtn btn" href="<?php echo $get_started['get_started_button_url'];?>"><?php echo $get_started['get_started_button_text'];?></a> </div>
      </div>
    </div>
    <!-- GET-STARTED END --> 
    
  </div>
</section>
<!-- BANNER-END --> 



<div class="newShadow">

  <!-- TECHNOLOGY START -->
  <section class="secSpace techWrap">
    <div class="container">
      <div class="titleArea text-center">
        <h2 class="mainTitle mb-3"><?php echo $technology['technology_heading'];?></h2>
        <div class="paragraph"> <?php echo $technology['technology_short_description'];?> </div>
      </div>
      
      <!-- TABS START -->
      <div class="tabsSty">
        <div class="scrollDiv">
          <ul class="nav nav-fill nav-tabs" role="tablist">
            <?php
              if($technology['technologies'])
              {
                $i = 0;
                foreach($technology['technologies'] as $technology_res)
                {
                ?>
            <li class="nav-item" role="presentation"> <a class="nav-link <?php if($i==0){?>active<?php }?>" id="fill-tab-<?php echo $i;?>" data-bs-toggle="tab" href="#fill-tabpanel-<?php echo $i;?>" role="tab" aria-controls="fill-tabpanel-<?php echo $i;?>" aria-selected="true"> <span class="imgSpc"><img src="<?php echo $technology_res['icon']['url'];?>" alt="icon"></span> <?php echo $technology_res['title'];?> </a> </li>
            <?php
              $i++;
                }
              }
              ?>
          </ul>
        </div>
        <div class="tab-content" id="tab-content">
          <?php
            if($technology['technologies'])
            {
              $i = 0;
              foreach($technology['technologies'] as $technology_res)
              {
              ?>
          <div class="prdctList tab-pane <?php if($i==0){?>active <?php }?>" id="fill-tabpanel-<?php echo $i;?>" role="tabpanel" aria-labelledby="fill-tab-<?php echo $i;?>">
            <div class="row aligCont">
              <div class="col-md-12 col-lg-4 contSpc">
                <div class="paragraph"> <?php echo $technology_res['content'];?> </div>
                <a href="<?php echo $technology_res['button_url'];?>" class="btn btn-primary my-4"><?php echo $technology_res['button_text'];?></a> 
              </div>
              <div class="col-md-12 col-lg-8">
                <div class="imgFrames webOnly imgAlign">
                  <div class="webImg"> <img class="prdImg" src="<?php echo $technology_res['image_web']['url'];?>" alt="image"> </div>
                  <!-- <div class="tabFrame"> <img class="prdImg" src="<?php echo $technology_res['image_web']['url'];?>" alt="image"> </div> -->
                  <!-- <img class="frame_shadow" src="<?php echo get_template_directory_uri(); ?>/assets/images/others/shadow.svg" alt="img">  -->
                </div>
                
                <!-- MOBILE-VIEW START -->
                <div class="imgFrames mobOnly">
                  <div class="mobImg"> <img class="prdImg" src="<?php echo $technology_res['image_mobile']['url'];?>" alt="image"> </div>
                  <!-- <div class="tabFrame"> <img class="prdImg" src="<?php echo $technology_res['image_mobile']['url'];?>" alt="image"> </div> -->
                </div>
                <!-- MOBILE-VIEW END --> 
                
              </div>
            </div>
          </div>
          <!-- TAB-1 END -->
          
          <?php
            $i++;
              }
            }
            ?>
        </div>
      </div>
      <!-- TABS END --> 
      
    </div>
  </section>
  <!-- TECHNOLOGYE END --> 


  <!-- WHY_CHOOSE START -->
  <section class="secSpace whyChoose">
    <div class="container">
      <div class="titleArea">
        <h2 class="mainTitle mb-3"><?php echo get_field('why_choose_myne_heading');?></h2>
        <div class="paragraph"> <?php echo get_field('why_choose_myne_short_description');?></div>
      </div>
      <div class="boxWraper">
        <div class="row gridPad">
          <?php
      if($why_choose_myne)
      {
        foreach($why_choose_myne as $why_choose_myne_res)
        {
      ?>
          <div class="col-md-6 col-lg-3 gridPad">
            <div class="chooseBx">
              <div class="imgArea"> <img src="<?php echo $why_choose_myne_res['why_choose_icon']['url'];?>" alt="icon"> </div>
              <div class="contArea">
                <h4><?php echo $why_choose_myne_res['why_choose_heading'];?></h4>
                <div class="paragraph"> <?php echo $why_choose_myne_res['why_choose_content'];?> </div>
              </div>
            </div>
          </div>
          <?php
        }
      }
      ?>
        </div>
      </div>
    </div>
  </section>
  <!-- WHY_CHOOSE END --> 

</div> <!-- newShadow end -->


<!-- PRICE_PACKAGE START -->
<section class="secSpace priceWraper" id="price">
  <div class="container">
    <div class="titleArea text-center">
      <h2 class="mainTitle"><?php echo get_field('pricing_heading');?></h2>
    </div>
    <div class="priceArea">
      <div class="row">
        <?php
	  if(get_field('pricing'))
	  {
		  foreach(get_field('pricing') as $pricing_res)
		  {
	  ?>
        <div class="col-md-6">
          <div class="priceBox">
            <?php if($pricing_res['our_choice_heading']){?>
            <label class="offerLabel"><?php echo $pricing_res['our_choice_heading'];?></label>
            <?php
		  }
		  ?>
            <h3>
				<?php echo $pricing_res['price_prefix']?><?php if($pricing_res['price_suffix']){?><strong>/<?php echo $pricing_res['price_suffix'];?></strong><?php }?>
				<span><s><?php echo $pricing_res['old_price'];?></s></span>
			</h3>
            <h6><?php echo $pricing_res['pricing_content_title']?></h6>
            <?php echo $pricing_res['pricing_content']?> <a href="<?php echo $pricing_res['pricing_button_url']?>" class="btn btn-primary"><?php echo $pricing_res['pricing_button_text']?></a> </div>
        </div>
        <?php
		  }
	  }
	  ?>
      </div>
    </div>
  </div>
</section>
<!-- PRICE_PACKAGE END -->
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

<!-- SIGNUP START -->
<section class="ftrAdjut">
  <div class="container">
    <div class="getstartWraper signupWrap">
      <div class="row algTxt">
        <div class="col-md-7 col-lg-6">
          <h2 class="m-0"><?php echo $footer['sign_up_content'];?></h2>
        </div>
        <div class="col-md-5 col-lg-6 text-end"> <a class="getBtn btn" href="<?php echo $footer['signup_button_url'];?>"><?php echo $footer['signup_button_text'];?></a> </div>
      </div>
    </div>
  </div>
</section>
<!-- SIGNUP END -->
<?php
get_footer();
$formatted_text1 = trim($banner['banner_heading1']);
$formatted_text2 = trim($banner['banner_heading_2']);
?>
<script>
$(document).ready(function() {
  var typed = new Typed('#types', {
  strings: [
    "<?php echo $formatted_text1;?>", 
    "<?php echo $formatted_text2;?>"
  
  ],
  typeSpeed: 80,
  backSpeed: 0,
  startDelay: 0,
  cursorChar: ' ',
  shuffle: false,
  smartBackspace: false,
  loop: true,
  loopCount: Infinity
});
});
</script>
