<html lang="en">
  <head>
    <?php wp_head(); ?>
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
          <a href="/" class="navMenu-link">Home</a>
          <a href="/#members" class="navMenu-link">Membership</a>
          <a href="/#staff" class="navMenu-link">Trainers</a>
        </div>
        <div class="navLogo">
          <a href="/">
            <img src="<?php echo IMG_PATH;?>/spartan-fitness-logo.png" alt="" />
          </a>
        </div>
        <div class="navMenu">
          <a href="/" class="navMenu-link">pricing</a>
          <a href="/#location" class="navMenu-link">Location</a>
          <a href="/" class="navMenu-link">free pass</a>
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