<?php 
/*Template Name: Features*/
get_header();
?>
<!-- BANNER-START -->

<section class="bannerWraper secSpace bgRemove">
  <div class="container">
    <div class="bnr_content innerBnr">
      <h1><?php echo get_field('banner_heading');?></h1>
      <div class="paragraph"> <?php echo get_field('banner_content');?> </div>
    </div>
    <div class="featured_img innerBnr">
      <div class="img_space text-center"> 
      <?php
	  $banner_img = get_field('banner_image');
	  ?>
      <img src="<?php echo $banner_img['url'];?>" alt="img"> </div>
    </div>
  </div>
</section>
<!-- BANNER-END --> 

<!-- FEATURED START -->
<section class="secSpace techWrap featuredTabs pt-0">
  <div class="container">
    <div class="titleArea text-center titleAdjust">
      <h2 class="mainTitle"><?php echo get_field('features_heading');?></h2>
    </div>
    
    <!-- TABS START -->
    <div class="tabsSty">
      <div class="scrollDiv">
        <ul class="nav nav-fill nav-tabs" role="tablist">
        
        
              <?php
		if(get_field('features'))
		{
			$i = 0;
			foreach(get_field('features') as $feature_res)
			{
		?>
        
        
          <li class="nav-item" role="presentation"> <a class="nav-link <?php if($i==0){?>active"<?php }?> id="fill-tab-<?php echo $i;?>" data-bs-toggle="tab" href="#fill-tabpanel-<?php echo $i;?>" role="tab" aria-controls="fill-tabpanel-<?php echo $i;?>" aria-selected="false"> <span class="imgSpc"><img src="<?php echo $feature_res['features_icon']['url'];?>" alt="icon"></span> <?php echo $feature_res['features_title'];?> </a> </li>         
   
          
         <?php
		 $i++;
			}
			}
			?>
          
          
          
        </ul>
      </div>
      <div class="tab-content ftrOnly" id="tab-content">
      
      <?php
		if(get_field('features'))
		{
			$i = 0;
			foreach(get_field('features') as $feature_res)
			{
		?>
      
        <div class="prdctList tab-pane <?php if($i==0){?>active<?php }?>" id="fill-tabpanel-<?php echo $i;?>" role="tabpanel" aria-labelledby="fill-tab-<?php echo $i;?>">
          <div class="row aligCont">
            <div class="col-lg-6 col-md-12 padSpc">
              <div class="tab-content vertTab-cont" id="v-pills-tabContent">
                
                  <?php
                  if($feature_res['features_content'])
                  {
                    $j=0;
                    foreach($feature_res['features_content'] as $features_content_res)
                    {
                  ?>
                
                
                  <div class="tab-pane fade show <?php if($j==0){?>active<?php }?>" id="sub_content_<?php echo $j.$i;?>" role="tabpanel" aria-labelledby="sub_content_tab_<?php echo $j.$i;?>">
                    <div class="imgFrames">
                    
                      <div class="webImg webOnly"> <img class="prdImg" src="<?php echo $features_content_res['image_web']['url'];?>" alt="image"> </div>
                      <!-- <img class="frame_shadow" src="<?php echo get_template_directory_uri(); ?>/assets/images/others/shadow.svg" alt="img"> </div> -->
                    
                      <!-- MOBILE-VIEW START -->
                      <div class="mobImg mobOnly">
                        <img class="prdImg" src="<?php echo $features_content_res['image_mobile']['url'];?>" alt="image"> 
                      </div>
                      
                      <!-- <div class="tabFrame"> <img class="prdImg" src="<?php echo $features_content_res['image_mobile']['url'];?>" alt="image"> </div> -->
                      
                      <!-- MOBILE-VIEW END --> 
                      </div>
                  </div>
                  
                  <?php
                  $j++;
                    }
                  }
                  ?>
           
                
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="vertTab">
                <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                  
                  <?php
				if($feature_res['features_content'])
				{
					$j=0;
					foreach($feature_res['features_content'] as $features_content_res)
					{
				?>
                
                  
                  <div class="tabLine">
                    <button class="nav-link <?php if($j==0){?>active<?php }?>" id="sub_content_tab_<?php echo $j.$i;?>" data-bs-toggle="pill" data-bs-target="#sub_content_<?php echo $j.$i;?>" type="button" role="tab" aria-controls="sub_content_<?php echo $j.$i;?>" aria-selected="true">
                    <h3><?php echo $features_content_res['content_titile'];?></h3>
                    <h6><?php echo $features_content_res['content'];?></h6>
                    </button>
                  </div>
                  
                  <?php
				$j++;
					}
				}
				?>
           
                  
                  
                  
                  
                  
                  
                </div>
              </div>
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
<!-- FEATURED END --> 
<?php
$footer = get_field('footer', 'option',true);
?>
<!-- APP-DOWNLOAD START -->
<section class="appDownload secSpace pt-0">
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

<!-- GET_IN_TOUCH START -->
<section class="secSpace getinwraper">
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
<?php
get_footer();
?>