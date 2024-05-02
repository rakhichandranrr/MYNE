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
?>

<div class="collapse navbar-collapse alignRight" id="navbarSupportedContent">
  <ul class="navbar-nav mb-lg-0">
    <li class="nav-item"> <a class="nav-link <?php if(is_page('features')){?>active<?php } ?>" aria-current="page" href="<?php echo site_url();?>/features/">Features</a> </li>
    <li class="nav-item"> <a class="nav-link" href="<?php echo site_url();?>/#price">Pricing</a> </li>
    <li class="nav-item"> <a class="nav-link <?php if(is_page('about-us')){?>active<?php } ?>" href="<?php echo site_url();?>/about-us/">About us</a> </li>
    <li class="nav-item dropdown btn-Link mobHide"> <a class="nav-link dropdown-toggle btn btn-login" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Log in</a>
      <ul class="dropdown-menu">
        <li class="nav-item"> <a class="nav-link" href="<?php echo $header['login_customer_url'];?>">Customer</a> </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo $header['login_wealth_planner_url'];?>">Wealth Planner</a> </li>
      </ul>
    </li>
    <li class="nav-item btn-Link mobOnly"> <a class="nav-link btn btn-login" href="<?php echo $header['log_in_as_customer_mobile_url'];?>">Log in as Customer</a> </li>
    <li class="nav-item btn-Link mobOnly"> <a class="nav-link btn btn-login" href="<?php echo $header['log_in_as_wealth_planner_mobile_url'];?>">Log in as Wealth Planner</a> </li>
    <li class="nav-item btn-Link"> <a class="nav-link btn" href="<?php echo $header['get_started_url'];?>">Get Started</a> </li>
  </ul>
</div>
