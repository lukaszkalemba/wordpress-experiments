<?php

/*
  Template Name: O nas
*/


get_header(); ?>

<div class="container-fluid px-5 my-5">


<h1><?php the_title(); ?></h1>

<?php
  if ( has_post_thumbnail() ) {
  	the_post_thumbnail('post-thumbnail-size');
  }
?>

</div>

<div class="container-fluid px-5 my-5">
  <div class="row">
    <div class="col-9">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>

      <?php
        endwhile;
        wp_reset_query();
      ?>
    </div>

    <section class="team">

    </section>


    <div class="col-3">
      <?php
        get_sidebar('right');
      ?>
    </div>
  </div>
</div>


<i class="fas fa-mobile-alt"></i>
<i class="far fa-envelope"></i>


<?php get_footer(); ?>
