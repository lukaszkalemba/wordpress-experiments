<?php get_header(); ?>

<div class="container px-5 my-5">

<?php

  while(have_posts()) {
    the_post();
?>

    <h2><?php the_title(); ?></h2>
    Posted by <?php the_author(); ?>
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">

    <?php the_content();
    comment_form();
  }

?>

</div>

<?php get_footer(); ?>
