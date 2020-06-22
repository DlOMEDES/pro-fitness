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

    </main>
<?php get_footer(); ?>