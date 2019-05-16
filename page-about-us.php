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

      <article class="team__member">

      <div class="member__image">
        <?php $image_url = get_sub_field('zdjecie')['sizes']['medium']; ?>
        <img class="member__img" src="<?php echo $image_url ?>" alt="">
      </div>

      <div class="member__info">
        <p class="member__paragraph member__paragraph--name"><?php the_sub_field('imie_i_nazwisko'); ?></p>
        <p class="member__paragraph member__paragraph--workplace"><?php the_sub_field('stanowisko'); ?></p>
        <p class="member__paragraph member__paragraph--phone-number"><i class="member__icon member__icon--mobile fas fa-mobile-alt"></i><?php the_sub_field('telefon'); ?></p>
        <p class="member__paragraph member__paragraph--email"><i class="member__icon far fa-envelope"></i><?php the_sub_field('adres_pocztowy'); ?></p>
      </div>

      </article>

  <?php
    endwhile;
  else :
  endif;

  ?>
</section>




<?php get_footer(); ?>
