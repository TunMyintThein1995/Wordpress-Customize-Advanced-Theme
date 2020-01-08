<?php 
  /* 
    Template Name: Company Layout
  */
?>
<?php get_header(); ?>
<?php //require_once('header.php'); ?>
<?php //require_once (dirname(__FILE__) . '/header.php'); ?>
  <div class="container content">
    <div class="main block">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post();  ?>
          <div class="page">
            <h2><?php the_title(); ?></h2>
            <p class="phone">Call Us: +95-09450672613
            </p>
            <?php the_content(); ?>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <?php echo apautop('Sorry, no posts were found') ; ?>
      <?php endif; ?>
    </div>
    <div class="side">
      <?php if(is_active_sidebar('sidebar')) : ?>
        <?php dynamic_sidebar('sidebar'); ?>
      <?php endif; ?>
    </div>
  </div>
<?php get_footer(); ?>
<?php //require_once (dirname(__FILE__) . '/footer.php'); ?>