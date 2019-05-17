<?php

/*
  Template Name: Usługi
*/

get_header(); ?>


<div class="container-fluid px-5 my-5">

  <h1><?php the_title(); ?></h1>

  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>

  <?php
    endwhile;
    wp_reset_query();
  ?>

</div>


<?php get_footer(); ?>
