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
        <!-- link pricin page -->
          <a href="<?php echo site_url("/pricing") ?>" class="navMenu-link">pricing</a>
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