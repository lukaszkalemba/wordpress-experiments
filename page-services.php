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


<?php
    if( have_rows('uslugi') ):
      ?>

<?php
      while ( have_rows('uslugi') ) : the_row();
      if( get_row_layout() == 'wiersz1' ):
        ?>

<div class="container-fluid px-5 my-5">
  <div class="row">
    <div class="col">
      <?php the_sub_field('tekst'); ?>
    </div>

    <div class="col">
      <?php $image_url = get_sub_field('zdjecie')['url']; ?>
      <img class="services__image" src="<?php echo $image_url ?>" alt="">
    </div>
  </div>

</div>

<?php
    elseif( get_row_layout() == 'wiersz2' ):
      ?>

<div class="container-fluid px-5 my-5">
  <div class="row">
    <div class="col">
      <?php $image_url1 = get_sub_field('zdjecie2')['url']; ?>
      <img class="services__image" src="<?php echo $image_url1 ?>" alt="">
    </div>

    <div class="col">
      <?php the_sub_field('tekst2'); ?>
    </div>
  </div>

</div>

<?php
    elseif( get_row_layout() == 'wiersz3' ):
    ?>
  <div class="container-fluid px-5 my-5">
      <?php the_sub_field('tekst3');?>
</div>


<?php
    elseif( get_row_layout() == 'wiersz4' ):
?>
    <div class="container-fluid px-5 my-5">

    <?php $image_url2 = get_sub_field('zdjecie3')['url']; ?>
    <img class="services__image" src="<?php echo $image_url2 ?>" alt="">

    </div>

  <?php

    endif;
  endwhile;
  else :
  endif;

?>


<?php get_footer(); ?>
