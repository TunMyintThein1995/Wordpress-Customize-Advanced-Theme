<?php //get_header(); ?>
<?php require_once('header.php'); ?>
<?php //require_once (dirname(__FILE__) . '/header.php'); ?>
  <div class="container content">
    <div class="main block">
      <h1 class="page-header">
        Search Results
      </h1>
        <?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
          <?php get_template_part('content', get_post_format()) ; ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php echo apautop('Sorry, no posts were found'); ?>
			<?php endif; ?>
    </div>
    <div class="side">
      <?php if(is_active_sidebar('sidebar')) : ?>
        <?php dynamic_sidebar('sidebar'); ?>
      <?php endif; ?>>
    </div>
  </div>
<?php get_footer(); ?>
<?php require_once (dirname(__FILE__) . '/footer.php'); ?>