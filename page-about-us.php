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

    <div class="col-3">
      <?php
        get_sidebar('right');
      ?>
    </div>
  </div>
</div>


<section class="team px-5 my-5">

  <h2>Nasz zespół</h2>
  <?php

  if( have_rows('czlonek_zespolu') ):
      while ( have_rows('czlonek_zespolu') ) : the_row(); ?>

      <article class="team_member">

        <img src="<?php the_sub_field('zdjecie'); ?>" alt="">
        <?php the_sub_field('imie_i_nazwisko'); ?>
        <?php the_sub_field('stanowisko'); ?>
        <?php the_sub_field('telefon'); ?>
        <?php the_sub_field('adres_pocztowy'); ?>

      </article>

  <?php
    endwhile;
  else :
  endif;

  ?>
</section>


<i class="fas fa-mobile-alt"></i>
<i class="far fa-envelope"></i>


<?php get_footer(); ?>
