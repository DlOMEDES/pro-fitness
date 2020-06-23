<?php get_header(); ?>
<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url('<?php $bannerImage = get_field('page_banner_image'); echo $bannerImage['url'] ?>)"
  ></div>
  
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php the_title(); ?></h1>
    <!-- <div class="page-banner__intro">
      <p>about us</p>
    </div> -->
  </div>
</div>

<!-- image grid with location information -->
<section id="location" class="location sections">
<div class="container">
    <div class="locationGrid">
    <div class="locationInfo">
        <h3 class="locationInfo-heading">Visit, Call, or Email</h3>
        <p class="text">
        10 Crozerville Rd*<br />
        Aston, PA 19014<br />
        (610) 358-1888<br />
        <a
            class="locationInfo-link"
            href="mailto:info@spartanfitgym.com"
            >info@spartanfitgym.com</a
        >
        </p>

        <h3 class="locationInfo-heading">Hours</h3>
        <p class="text">
        Monday-Friday: 5am-9pm<br />
        Saturday: 8am-4pm<br />
        Sunday: 8am-12pm
        </p>
        <h3 class="locationInfo-heading">
        Semi-Private Session Schedule
        </h3>
        <p class="text">
        <a class="locationInfo-link" href="/schedule"
            >Click here to see our schedule</a
        >.
        </p>
    </div>
    </div>
</div>
</section>


<?php get_footer(); ?>