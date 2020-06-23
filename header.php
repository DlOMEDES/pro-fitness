<html lang="en">
  <head>
    <?php wp_head(); ?>
    <meta charset=<?php bloginfo('charset'); ?> />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/styles.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />
    <!-- importing sass styles in app.js through parcel -->
    <!-- <link rel="stylesheet" href="./styles/" /> -->
    <title><?php bloginfo('name'); ?></title>
  </head>
  <body class="bodyClass">
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
          <a href="<?php echo home_url();?>" class="navMenu-link">Home</a>
          <a href="/#members" class="navMenu-link">Membership</a>
          <a href="<?php echo site_url('/gallery')?>" class="navMenu-link">Gallery</a>
        </div>
        <div class="navLogo">
          <a href="<?php echo home_url();?>">
            <img src="<?php echo IMG_PATH;?>/spartan-fitness-logo.png" alt="" />
          </a>
        </div>
        
        <div class="navMenu">
        <!-- link pricin page -->
          <a href="<?php echo site_url("/about") ?>" class="navMenu-link">About</a>
          <a href="#" class="navMenu-link">Pricing</a>
          <a href="/contact" class="navMenu-link">Contact</a>
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
        <a href="/" class="menuMobile-link">Home</a>
        <a href="/#members" class="menuMobile-link">Membership</a>
        <a href="/gallery" class="menuMobile-link">Gallery</a>
        <a href="/about" class="menuMobile-link">About</a>
        <a href="#" class="menuMobile-link">Pricing</a>
        <a href="/contact" class="menuMobile-link">Contact</a>
      </div>
    </div>