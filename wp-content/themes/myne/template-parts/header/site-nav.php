<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage myne
 * @since MYNE 1.0
 */

?>

<div class="collapse navbar-collapse alignRight" id="navbarSupportedContent">
  <ul class="navbar-nav mb-lg-0">
    <li class="nav-item"> <a class="nav-link" aria-current="page" href="#">Features</a> </li>
    <li class="nav-item"> <a class="nav-link" href="#">Pricing</a> </li>
    <li class="nav-item"> <a class="nav-link" href="<?php echo site_url();?>/about/">About us</a> </li>
    <li class="nav-item dropdown btn-Link mobHide"> <a class="nav-link dropdown-toggle btn btn-login" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Log in</a>
      <ul class="dropdown-menu">
        <li class="nav-item"> <a class="nav-link" href="#">Customer</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#">Wealth Planner</a> </li>
      </ul>
    </li>
    <li class="nav-item btn-Link mobOnly"> <a class="nav-link btn btn-login" href="#">Log in as Customer</a> </li>
    <li class="nav-item btn-Link mobOnly"> <a class="nav-link btn btn-login" href="#">Log in as Wealth Planner</a> </li>
    <li class="nav-item btn-Link"> <a class="nav-link btn" href="#">Get Started</a> </li>
  </ul>
</div>
