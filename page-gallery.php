
<?php 
/*
* Template Name: Page Gallery
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
  <?php endwhile; ?>

<?php get_footer(); ?>

