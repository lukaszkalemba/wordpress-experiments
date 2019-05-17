<?php

/*
  Template Name: Usługa
*/

get_header(); ?>


<div class="thumbnail container-fluid px-5 my-5">

<?php
  if ( has_post_thumbnail() ) {
    ?>
      <?php the_post_thumbnail(); ?>
    <?php
  }
?>

  <h1 class="mt-5"><?php the_title(); ?></h1>

  <p class="service__row"><span class="service__desc"><i class="service__icon far fa-clock"></i> Czas trwania usługi: </span><?php the_field('czas_trwania_uslugi'); ?></p>
  <p class="service__row"><span class="service__desc"><i class="service__icon far fa-user"></i> Osoba wykonująca usługę: </span><?php the_field('osoba_wykonujaca_usluge'); ?></p>

  <div class="mt-4">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>

  <?php
    endwhile;
    wp_reset_query();
  ?>
  </div>

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
      <h2><?php the_sub_field('naglowek');?></h2>
      <p><?php the_sub_field('tekst'); ?></p>
    </div>

    <div class="col">
      <?php $image_url = get_sub_field('zdjecie')['url']; ?>
      <img class="" src="<?php echo $image_url ?>" alt="">
    </div>
  </div>

</div>

<?php
    elseif( get_row_layout() == 'wiersz2' ):
      ?>

<div class="container-fluid px-5 my-5">
  <div class="row">
    <div class="col">
      <?php $image_url = get_sub_field('zdjecie')['url']; ?>
      <img class="" src="<?php echo $image_url ?>" alt="">
    </div>

    <div class="col">
      <h2><?php the_sub_field('naglowek');?></h2>
      <p><?php the_sub_field('tekst'); ?></p>
    </div>
  </div>

</div>

<?php
    elseif( get_row_layout() == 'wiersz3' ):
    ?>
  <div class="container-fluid px-5 my-5">
    <h2><?php the_sub_field('naglowek');?></h2>
    <p><?php the_sub_field('tekst'); ?></p>
    <?php $image_url = get_sub_field('zdjecie')['url']; ?>
    <img class="" src="<?php echo $image_url ?>" alt="">
</div>


<div class="container-fluid px-5 my-5">
<?php
    elseif( get_row_layout() == 'wiersz4' ):
?>
      <?php the_sub_field('tekst');?>
</div>


  <?php

    endif;
  endwhile;
  else :
  endif;

?>


<?php get_footer(); ?>
