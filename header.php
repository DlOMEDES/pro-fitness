<!DOCTYPE html>
<html lang="en">
<head>
  <?php wp_head(); ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
</head>
<body>
  <!-- top announcement notification bar -->
  <a href="/" class="notifyBar">
    <div class="notifyBar-content">
      <p class="notifyBar-text">
        click here to schedule your free training session!
      </p>
    </div>
    <span><p class="notifyBar-close">x</p></span>
  </a>
  <!-- main header with navigation -->
  <header class="mainHeader">
    <nav class="nav">
      <div class="navMenu">
        <a href="<?php echo site_url('/')?>" class="navMenu-link">Home</a>
        <a href="<?php echo site_url('/trainers')?>" class="navMenu-link">Trainers</a>
        <a href="<?php echo site_url('/membership')?>" class="navMenu-link">Membership</a>
      </div>
      
      <div class="navLogo">
        <a href="<?php echo site_url('/')?>">
          <img src="<?php echo get_theme_file_uri('/assets/images/spartan-fitness-logo.png');?>" alt="" />
        </a>
      </div>
    
      <div class="navMenu">
        <a href="<?php echo site_url('/gallery')?>" class="navMenu-link">Gallery</a>
        <a href="<?php echo site_url('/location')?>" class="navMenu-link">Location</a>
        <a href="<?php echo site_url('/about-us')?>" class="navMenu-link">About Us</a>
      </div>
    </nav>
    <div class="menuBtn">
      <div class="menuBtn-line"></div>
      <div class="menuBtn-line"></div>
      <div class="menuBtn-line"></div>
    </div>
  </header>
  <!-- mobile menu -->
  <div class="menu">
    <div class="menuMobile">
      <a href="/" class="menuMobile-link">home</a>
      <a href="/#members" class="menuMobile-link">membership</a>
      <a href="/#staff" class="menuMobile-link">trainers</a>
      <a href="" class="menuMobile-link">pricing</a>
      <a href="/#location" class="menuMobile-link">location</a>
      <a href="" class="menuMobile-link">free pass</a>
    </div>
  </div>