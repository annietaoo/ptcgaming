<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="single-post-content">
  <div class="container">
    <?php
    if ( get_the_post_thumbnail($post_id) != '' ) {
      the_post_thumbnail();
    } else {
      echo '<img src="';
      echo catch_that_image();
      echo '" alt="" />';
    };
    ?>
    <div class="single-post-title"><?php echo get_the_title( $post_id ); ?></div>
    <div class="single-post-text"><?php echo strip_tags( get_the_content(), "<a>,<b>,<i>,<u>" ); ?></div>
    <div class="nav-post">
    <?php if (strlen(get_previous_post(true,'')->post_title) > 0) { ?>
      <div class="previous">
        <div class="arrow-block"><p><?php previous_post_link('%link','&#129104;',TRUE); ?></p></div>
        <div class="nav-post-text">
          <p id="nav-post-tag">Previous Article</p>
          <p id="single-post-title"><?php previous_post_link('%link','%title',TRUE); ?></p>
        </div>
      </div>
    <?php } ?>
    <?php if (strlen(get_next_post(true,'')->post_title) > 0) { ?>
      <div class="next">
        <div class="nav-post-text">
          <p id="nav-post-tag">Next Article</p>
          <p id="single-post-title"><?php next_post_link('%link','%title',TRUE); ?></p>
        </div>
        <div class="arrow-block"><p><?php next_post_link('%link','&#129106;',TRUE); ?></p></div>
      </div>
    <?php } ?>
    </div>
  </div>
</div>

<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer(); ?>