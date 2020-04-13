<?php
  get_header(); ?>
   <div class="page-banner">
      <div class="page-banner__bg-image" 
      ></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php echo the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>Get started on one of our plans or packages</p>
        </div>
      </div>
    </div>

    <div class="container container--narrow page-section">
      <div class="generic-content">
        <p>
          <?php echo the_content(); ?>
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia
          voluptates vero vel temporibus aliquid possimus, facere accusamus
          modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit
          nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur
          adipisicing elit. Quos molestiae, tempora alias atque vero officiis
          sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam
          quo, ea veniam, ad quod sed.
        </p>
      </div>
    </div>

  <?php
  get_footer();
?>