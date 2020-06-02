<?php get_header(); ?>
    <!-- hero banner -->
    <div class="hero">
      <div class="heroContent">
        <div class="heroContent-head">
          <h1 class="heroContent-heading">
            The Price of Excellence <br />
            is discipline.
          </h1>
        </div>
      </div>
      <!-- hero video -->
      <div class="bgVideo">
        <video class="bgVideo-content" autoplay muted loop>
          <source src="<?php echo IMG_PATH;?>/workout-video.mp4" />
          Your browser is not supported!
        </video>
      </div>
    </div>
    <!-- start of main page area -->
    <main>
      <!-- a quote -->
      <div class="mainQuote">
        <div class="container">
        <?php 
          $homepage_quotes = new WP_Query([
            'post_type' => 'quote',
            'posts_per_page' => 1,
            'orderby'   => 'rand'
          ]);

          while($homepage_quotes->have_posts()) {
            $homepage_quotes->the_post(); ?>
            <?php echo wp_trim_words(get_the_content(), 30) ?>
            <br>
          <cite>– <?php the_field('quote_author'); ?></cite>
            
          <?php }

// the loop alternative syntax
// if ( have_posts() ) : while ( have_posts() ) : the_post(); 
// <?php endwhile; endif; 
        ?>
          

        </div>
      </div>
      <!-- membership section -->
      <section id="members" class="members sections">
        <div class="container">
          <div class="membersHead">
            <h1 class="membersHeading">what we offer</h1>
          </div>
          <div class="membersGrid">
          <?php 
            $homepage_service = new WP_Query([
              'post_type' => 'service',
              'posts_per_page' => 4,
            ]);

            while($homepage_service->have_posts()) {
              $homepage_service->the_post(); ?>
               <div class="membersGrid-training">
                <h3 class="membersGrid-title"><?php the_title(); ?></h3>
                <p class="text">
                <?php the_content(); ?>
                </p>
              </div>
            <?php } ?>
           
          </div>
        </div>
      </section>
      <!-- staff / trainers carousel section -->
      <section id="staff" class="staff sections">
        <div class="staffContainer">
          <div class="staffIntro">
            <h1 class="staffHeading">
              Meet our staff <br />
              and trainers
            </h1>
          </div>
          <!-- staff images slider-->
          <div class="sliderWrapper">
            <div class="slider" id="slider">
              <!-- slide 1 -->
              <?php  
              // query from wp db
                $slider = new WP_Query([
                  'post_type' => 'slider',
                  'posts_per_page' => 8,
                  
                ]);
              
              // iterate images
              $imageIndex = 0;
              // loop over slides and change the images
                while($slider->have_posts()) {
                  $imageIndex +=1;
                  $slider->the_post(); ?>
                
                  <div class="slide">
                    <div class="slide-content">
                    <img src="<?php the_post_thumbnail(); ?>
                      <span class="slide-text"><?php the_field('overlay_text'); ?></span>
                    </div>
                  </div>
                <?php }
                
                ?>
             
            </div>
            <div class="arrow" id="arrowLeft"></div>
            <div class="arrow" id="arrowRight"></div>
          </div>
        </div>
        <!--add trainers pop up modal -->
      </section>

      <!-- first timers tips section -->
      <section id="tips" class="tips sections">
        <div class="tips-head">
          <h1 class="tips-heading">First-Timer Tips</h1>
        </div>
        <div class="tips-text">
          <p class="text">
            Get ready to sweat, have fun and crush your fitness goals.
          </p>
        </div>
        <div class="tipBoxes">
          <?php 
            $someTips = new WP_Query([
              'post_type' => 'tips',
              'posts_per_page' => 3,
              'orderby' => 'post_date',
              'order' => 'ASC'
            ]);
 
            while($someTips->have_posts()) {
              $someTips->the_post(); 
              ?>
              <!-- box 1 -->
              <div class="tipBoxes-1 box">
                <div class="box-head">
                  <img src="<?php the_field('tip_icon') ?>"/>
                  <h2 class="box-heading"><?php the_title(); ?></h2>
                </div>
                <div class="box-details">
                  <p class="text">
                    <?php the_content(); ?>
                  </p>
                </div>
              </div>
             <?php }
            ?>
          
        </div>
      </section>

      <!-- image grid with location information -->
      <section id="location" class="location sections">
        <div class="container">
          <div class="locationGrid">
            <div class="galleryGrid">
              <figure class="galleryFig galleryFig-1">
                <img
                  src="<?php echo IMG_PATH;?>/view-1.jpg"
                  alt="gallery image 1"
                  class="galleryFig-img"
                />
              </figure>
              <figure class="galleryFig galleryFig-2">
                <img
                  src="<?php echo IMG_PATH;?>/view-2.jpg"
                  alt="gallery image 2"
                  class="galleryFig-img"
                />
              </figure>
              <figure class="galleryFig galleryFig-3">
                <img
                  src="<?php echo IMG_PATH;?>/view-3.jpg"
                  alt="gallery image 3"
                  class="galleryFig-img"
                />
              </figure>
              <figure class="galleryFig galleryFig-4">
                <img
                  src="<?php echo IMG_PATH;?>/view-4.jpg"
                  alt="gallery image 4"
                  class="galleryFig-img"
                />
              </figure>
              <figure class="galleryFig galleryFig-5">
                <img
                  src="<?php echo IMG_PATH;?>/view-5.jpg"
                  alt="gallery image 5"
                  class="galleryFig-img"
                />
              </figure>
              <figure class="galleryFig galleryFig-6">
                <img
                  src="<?php echo IMG_PATH;?>/view-6.jpg"
                  alt="gallery image 6"
                  class="galleryFig-img"
                />
              </figure>
              <figure class="galleryFig galleryFig-7">
                <img
                  src="<?php echo IMG_PATH;?>/view-7.jpg"
                  alt="gallery image 7"
                  class="galleryFig-img"
                />
              </figure>
              <figure class="galleryFig galleryFig-8">
                <img
                  src="<?php echo IMG_PATH;?>/view-8.jpg"
                  alt="gallery image 8"
                  class="galleryFig-img"
                />
              </figure>
              <figure class="galleryFig galleryFig-9">
                <img
                  src="<?php echo IMG_PATH;?>/view-9.jpg"
                  alt="gallery image 9"
                  class="galleryFig-img"
                />
              </figure>
              <figure class="galleryFig galleryFig-10">
                <img
                  src="<?php echo IMG_PATH;?>/view-10.jpg"
                  alt="gallery image 10"
                  class="galleryFig-img"
                />
              </figure>
              <figure class="galleryFig galleryFig-11">
                <img
                  src="<?php echo IMG_PATH;?>/view-11.jpg"
                  alt="gallery image 11"
                  class="galleryFig-img"
                />
              </figure>
              <figure class="galleryFig galleryFig-12">
                <img
                  src="<?php echo IMG_PATH;?>/view-12.jpg"
                  alt="gallery image 12"
                  class="galleryFig-img"
                />
              </figure>
              <figure class="galleryFig galleryFig-13">
                <img
                  src="<?php echo IMG_PATH;?>/view-13.jpg"
                  alt="gallery image 13"
                  class="galleryFig-img"
                />
              </figure>
              <figure class="galleryFig galleryFig-14">
                <img
                  src="<?php echo IMG_PATH;?>/view-14.jpg"
                  alt="gallery image 14"
                  class="galleryFig-img"
                />
              </figure>
            </div>
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
    </main>
<?php get_footer(); ?>