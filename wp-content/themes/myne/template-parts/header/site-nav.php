<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage myne
 * @since MYNE 1.0
 */

$header = get_field('header', 'option',true);
$title = get_the_title();

$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


if (strpos($url,'price') !== false) {
    $cls='active';
} else {
    $cls='';
}
?>

<div class="collapse navbar-collapse alignRight" id="navbarSupportedContent">
  <ul class="navbar-nav mb-lg-0">
    <li class="nav-item"> <a class="nav-link <?php if(is_page('features')){?>active<?php } ?>" aria-current="page" href="<?php echo site_url();?>/features/">Features</a> </li>
    <li class="nav-item"> <a class="nav-link <?php echo $cls;?>" href="<?php echo site_url();?>/#price" id="pricemenu">Pricing</a> </li>
    <li class="nav-item"> <a class="nav-link <?php if(is_page('security')){?>active<?php } ?>" href="<?php echo site_url();?>/security/">Security</a> </li>
    <!-- login-start -->
    <li class="nav-item dropdown btn-Link mobHide"> <a class="nav-link dropdown-toggle btn btn-login" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Log in</a>
      <ul class="dropdown-menu">
        <li class="nav-item"> <a class="nav-link" href="<?php echo $header['login_customer_url'];?>">Customer</a> </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo $header['login_wealth_planner_url'];?>">Wealth Planner</a> </li>
      </ul>
    </li>
    <li class="nav-item btn-Link mobOnly"> <a class="nav-link btn btn-login" href="<?php echo $header['login_customer_url'];?>">Log in as Customer</a> </li>
    <li class="nav-item btn-Link mobOnly"> <a class="nav-link btn btn-login" href="<?php echo $header['login_wealth_planner_url'];?>">Log in as Wealth Planner</a> </li>
    <!-- login-End -->

    <!-- Signup-Start -->
    <li class="nav-item dropdown btn-Link mobHide"> <a class="nav-link dropdown-toggle btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Get Started</a> 
      <ul class="dropdown-menu signUp">
        <li class="nav-item"> <a class="nav-link" href="<?php echo $header['get_started_sign_up_for_client_user_url'];?>">Sign up for client user </a> </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo $header['get_started_sign_up_page_url'];?>">Sign up page</a> </li>
      </ul>
    </li>
    <li class="nav-item btn-Link mobOnly"> <a class="nav-link btn" href="<?php echo $header['get_started_sign_up_for_client_user_url'];?>">Sign up for client user</a> </li>
    <li class="nav-item btn-Link mobOnly"> <a class="nav-link btn" href="<?php echo $header['get_started_sign_up_page_url'];?>">Sign up page</a> </li>
    <!-- Signup-End -->
  </ul>
</div>
