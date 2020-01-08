<?php get_header(); ?>
<?php //require_once('header.php'); ?>
<?php //require_once (dirname(__FILE__) . '/header.php'); ?>
  <div class="container content">
    <?php if(is_active_sidebar('showcase')) : ?>
      <?php dynamic_sidebar('showcase'); ?>
    <?php endif; ?>
    <div class="block">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post();  ?>
          <div class="page">
            <?php if(page_is_parent() || $post->post_parent > 0) : ?>
              <nav class="nav sub-nav">
                <ul>
                  <span class="parent-link">
                    <a href="<?php echo get_the_permalink(get_top_parent()); ?>">
                      <?php echo get_the_title(get_top_parent()); ?>
                    </a>
                  </span>
                  <?php
                    $args = array (
                      'child_of' => get_top_parent(),
                      'title_li' => ''
                    );
                  ?>
                  <?php wp_list_pages($args); ?>
                </ul>
              </nav>
              <div class="clr"></div>
            <?php endif; ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <?php echo apautop('Sorry, no posts were found') ; ?>
      <?php endif; ?>
    </div>
    <?php if(is_active_sidebar('box01')) : ?>
        <?php dynamic_sidebar('box01'); ?>
      <?php endif; ?>
      <?php if(is_active_sidebar('box02')) : ?>
        <?php dynamic_sidebar('box02'); ?>
      <?php endif; ?>
      <?php if(is_active_sidebar('box03')) : ?>
        <?php dynamic_sidebar('box03'); ?>
      <?php endif; ?>
  </div>
<?php get_footer(); ?>
<?php //require_once (dirname(__FILE__) . '/footer.php'); ?>