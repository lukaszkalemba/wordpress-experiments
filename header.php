<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>

</head>
<body>

<p>header.php</p>

<nav>

  <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

</nav>