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
      <h2 class="service__header"><?php the_sub_field('naglowek');?></h2>
      <p><?php the_sub_field('tekst'); ?></p>
    </div>

    <div class="col">
    <?php $image_url = get_sub_field('zdjecie1')['url']; ?>
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
      <h2 class="service__header"><?php the_sub_field('naglowek');?></h2>
      <p><?php the_sub_field('tekst'); ?></p>
    </div>
  </div>

</div>

<?php
    elseif( get_row_layout() == 'wiersz3' ):
    ?>
  <div class="third-row container-fluid px-5 my-5">
    <?php $image_url2 = get_sub_field('zdjecie3')['url']; ?>
    <img  class="third-row__image services__image" src="<?php echo $image_url2 ?>" alt="">
    <div class="container">
      <h2 class="third-row__header service__header"><?php the_sub_field('naglowek');?></h2>
      <p class="third-row__desc"><?php the_sub_field('tekst'); ?></p>
    </div>
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

<div class="container-fluid--button container-fluid px-5 my-5">
  <button class="service__button"><a class="service__link" href="<?php the_permalink(); ?>">Wszystkie usługi <i class="button__icon fas fa-arrow-right"></i></a></button>
</div>

<?php get_footer(); ?>
