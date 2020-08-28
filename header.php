<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" >
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
     <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <link
      href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"/>
      <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> >
    <header class="article-nav">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="article-logo"> 
        <?php bloginfo( 'name' ); ?> 
        <br />
        <span class="magazine-subtitle">
         <?php bloginfo( 'description' ); ?>
        </span>
      </a>
    </header>