<?php get_header(); ?>

<?php 
  $bannerImage = get_field('page_banner_image');
  while(have_posts()) : the_post(); 
?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url('<?php echo IMG_PATH;?>/Athena.jpg")"
  ></div>
  
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php the_title(); ?></h1>
    <!-- <div class="page-banner__intro">
      <p>about us</p>
    </div> -->
  </div>
</div>

<div class="container container--narrow page-section">
  <div class="generic-content">
    <?php the_content(); ?>
  </div>
  <br>
  <?php the_post_thumbnail('mediumSize',['class'=>'featured-image']); ?>
</div>


<?php endwhile; ?>

<?php get_footer(); ?>
