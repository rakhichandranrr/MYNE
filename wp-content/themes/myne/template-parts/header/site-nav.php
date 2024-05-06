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
    <li class="nav-item"> <a class="nav-link <?php if(is_page('about-us')){?>active<?php } ?>" href="<?php echo site_url();?>/about-us/">Security</a> </li>
    <li class="nav-item dropdown btn-Link mobHide"> <a class="nav-link dropdown-toggle btn btn-login" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Log in</a>
      <ul class="dropdown-menu">
        <li class="nav-item"> <a class="nav-link" href="<?php echo $header['login_customer_url'];?>">Customer</a> </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo $header['login_wealth_planner_url'];?>">Wealth Planner</a> </li>
      </ul>
    </li>
    <li class="nav-item btn-Link mobOnly"> <a class="nav-link btn btn-login" href="<?php echo $header['log_in_as_customer_mobile_url'];?>">Log in as Customer</a> </li>
    <li class="nav-item btn-Link mobOnly"> <a class="nav-link btn btn-login" href="<?php echo $header['log_in_as_wealth_planner_mobile_url'];?>">Log in as Wealth Planner</a> </li>
    <li class="nav-item dropdown btn-Link"> <a class="nav-link dropdown-toggle btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Get Started</a> 
      <ul class="dropdown-menu signUp">
        <li class="nav-item"> <a class="nav-link" href="<?php echo $header['get_started_url'];?>">Sign up for client user </a> </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo $header['login_wealth_planner_url'];?>">Sign up page</a> </li>
      </ul>
    </li>
  </ul>
</div>
