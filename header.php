<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>

</head>
<body>

<header class="header py-3">
  <p class="header__desc">An awesome header</p>
</header>


<nav class="nav">

  <?php wp_nav_menu( array( 
      'theme_location' => 'main_nav'
  ) ); ?>

</nav>