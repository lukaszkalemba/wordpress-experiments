<?php

/*
  Template Name: O nas
*/


get_header(); ?>


<h1><?php the_title(); ?></h1>

<?php
  if ( has_post_thumbnail() ) {
  	the_post_thumbnail('post-thumbnail-size');
  }
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-9">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>

      <?php
        endwhile;
        wp_reset_query();
      ?>
    </div>


    <div class="col-3">
      <?php
        get_sidebar('right');
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
