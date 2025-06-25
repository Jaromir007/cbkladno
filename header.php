<?php 
/**
 * Template Name: Header
 * @package cbkladno
 * @since 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body class="body page" id="body">
  <!-- Header start -->
  <header class="header">
    <?php
      if (has_custom_logo()) {
        echo get_custom_logo(); 
      } else {
        bloginfo('name'); 
      }
    ?>
    <?php
      wp_nav_menu([
        'theme_location' => 'Primary',
        'menu_class' => 'primary-menu',
        'container' => false,
      ]);
    ?>
  </header>
  <!-- Header end -->

  <!-- Main content start -->
  <main class="page__inner">
    <div class="container">

