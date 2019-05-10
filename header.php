<?php
/**
 * @package bulmawp
 * @since 0.1
 * @version 0.3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="A travers ce blog, Neobridge partage son actualité ainsi que les actualités liées à la thématique de la formation" />
    <?php wp_head();?>
</head>

<header>
    <h1 class="seo" style="display:none;">Blog</h1>
    <div class="container">
        <div class="logo">
            RelaisNeo
        </div>
    </div>
    <div class="container">
    <div class="columns is-mobile">
        <div class="column">

        </div>

        <div class="column is-8">
        <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
        <?php wp_nav_menu(array(

    'theme_location' => 'main-menu',
    'menu_class' => 'my-header-menu',

));?>
    </nav>
        </div>

        <div class="column">

        </div>
    </div>





  </div>
  </div>



</header>