
<?php 
/*
* Template Name: Page Trainers
 * 
*/
get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
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
      <?php endwhile; ?>

<?php get_footer(); ?>
